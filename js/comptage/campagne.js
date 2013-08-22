/**
 * 
 */
var Campagne = function(id, options) {
	this.id = id;
	this.options = JSON.parse(options);

	this.doSave = function() {
		if (typeof this.options.urls != "undefined" && typeof this.options.urls.campagne != "undefined") {
			var isNewCpg = this.id.indexOf("tmp") >= 0 ? true : false;
			$.post(this.options.urls.campagne.save, {}, function(data) {
				if (data.ok == true) {
					alert("Campagne sauvegardée");
					if (isNewCpg) {
						document.location.reload();
					}
				}
				else {
					alert("Erreur lors de l'enregistrement. Campagne non sauvegardée");
				}
			}, "json");
		}
	};
	
	this.doSaveLibelle = function(libelle) {
		if (typeof this.options.urls != "undefined" && typeof this.options.urls.campagne != "undefined") {
			$.post(myCpg.options.urls.campagne.saveLibelle, {"libelle": libelle}, function(data) {
				if (data.ok == true) {
					alert("Campagne sauvegardée");
					if (data.reload) {
						document.location.reload();
					}
				}
				else {
					alert("Erreur lors de l'enregistrement. Campagne non sauvegardée");
				}
			}, "json");
		}
	};
	
	this.doCritereRemove = function(id) {
		if (typeof this.options.urls != "undefined" && typeof this.options.urls.critere != "undefined") {
			$.post(this.options.urls.critere.remove, {"critere": id}, function(data) {
				document.location.reload();
			});
		}
	};
	
	this.doCritereValeurRemove = function (idCritere, idVal) {
		if (typeof this.options.urls != "undefined" && typeof this.options.urls.critere != "undefined") {
			$.post(this.options.urls.critere.removeValeur, {"critere": idCritere, "valeur": idVal}, function(data) {
				document.location.reload();
			});
		}
	};
};