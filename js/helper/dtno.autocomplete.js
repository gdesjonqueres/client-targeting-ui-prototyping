var Dtno_AutoComplete = function(elId, callbackUri, callbackArgs, options) {
	
	var defaults = {
		delay: 300,
		minLength: 3
	};
	
	this.el = null;
	this.jqEl = null;
	this.value = null;
	this.timeOutCllBck = null;
	this.successCount = 0;
	
	this.id = elId;
	this.callbackUri = callbackUri;
	this.callbackArgs = JSON.parse(callbackArgs);
	this.options = $.extend({}, JSON.parse(options), defaults);

	this.init = function() {
		this.el = document.getElementById(this.id);
		this.jqEl = $("#" + this.id);
		this.value = this.jqEl.val();
		
		var myObj = this;
		
		this.jqEl.on("keydown", function(event) {
			if (myObj.timeOutCllBck) {
				clearTimeout(myObj.timeOutCllBck);
			}
			myObj.timeOutCllBck = setTimeout(function() {
				if (myObj.value !== myObj.jqEl.val()) {
					if (myObj.jqEl.val().length >= myObj.options.minLength) {
						myObj.search(myObj.jqEl.val());
					}
					else if (myObj.value !== null) {
						$("#autocomp_" + myObj.id + " .results").hide();
						$("#autocomp_" + myObj.id + " .elements").html("");
					}
				}
			}, myObj.options.delay);
		});
		
		this.createElement();
	};
	
	this.createElement = function() {
		this.jqEl.wrap('<div id="autocomp_' + this.id + '" class="autocomplete" />');
		$("#autocomp_" + this.id).append('<div class="noresults">Aucun résultat</div>' + "\n" +
										'<div class="results">' + "\n" +
										'<div class="instructions">Cochez les éléments à sélectionner</div>' + "\n" +
										'<div class="elements"></div>' + "\n" +
										'</div>');
		this.jqEl.addClass("field");
	};
	
	this.search = function(term) {
		var myObj = this;
		
		var callbackArgs = $.extend({}, this.callbackArgs, {lookup: term});
		$.post(this.callbackUri, callbackArgs, function(data){
			myObj.value = term;
			myObj.updateResults(data);
		}, 'json');
	};
	
	this.updateResults = function(data) {
		var myObj = this;
		var isSuccessful = data.length >= 1 ? true : false;

		$("#autocomp_" + this.id + " .noresults").hide();
		$("#autocomp_" + this.id + " .results").hide();
		$("#autocomp_" + this.id + " .elements").html("");
		$.each(data, function(index, item) {
			// $("#autocomp_" + myObj.id + " .elements").append('<input type="checkbox" id="cb_' + item.id + '" name="valeurs[]" value="' + item.id + '" />' + 
			//		'<label for="cb_' + item.id + '">' + item.label + '</label><br />');
			$("#autocomp_" + myObj.id + " .elements").append('<span><input type="checkbox" id="cb_' + item.id + '" ' +
																'name="valeurs[' + item.id + ']" value="' + item.label + '" />' + 
															'<label for="cb_' + item.id + '">' + item.id + ' - ' + item.label + '</label></span><br />');
		});
		
		if (isSuccessful) {
			$("#autocomp_" + this.id + " .results").show();
		}
		else {
			$("#autocomp_" + this.id + " .noresults").show();
		}

		if (parent.$.colorbox && isSuccessful && this.successCount == 0) {
			var myForm = $("form");
			var myContent = $(".content");
			var myWidth = myForm.width() > myContent.width() ? myForm.width() : myContent.width();
			var myHeight = myForm.height() > myContent.height() ? myForm.height() : myContent.height();
			myWidth += 90;
			myHeight += 60;
			parent.$.colorbox.resize({innerWidth: myWidth, innerHeight: myHeight});
		}
		this.isLastSearchSuccess = isSuccessful;

		if (isSuccessful) {
			this.successCount++;
		}

	};

	this.init();
};

Dtno_AutoComplete.prototype = {
	
};