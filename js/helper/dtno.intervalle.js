var Dtno_Intervalle = function(elId, values, options) {
	// Options par défaut
	var defaults = {
		takeBoundValues: true, 	// Si TRUE, les bornes min et max renvoient des valeurs,
								// Sinon elles sont sélectionnables mais ne mettent pas à jour de valeur
		lower: null,
		upper: null
	};

	this.el = null;			// référence vers l'élement du DOM sur lequel est créé le widget
	this.slider = null;		// référence ver l'objet JQuery UI Slider
	
	this.keys = [];			// liste des id
	this.invKeys = [];		// tableau associatif des index, indexés sur l'id
	this.labels = [];		// liste des labels
	
	this.lowerBound = null;	// l'id du min sélectionné
	this.upperBound = null;	// l'id du max sélectionné
	this.lowerBoundLabel = null;	// le label du min sélectionné
	this.upperBoundLabel = null;	// le label du max sélectionné
	
	this.init = function() {
		this.el = document.getElementById(elId);

		var myObj = this;

		// Met à jour les options
		this.options = $.extend({}, defaults, JSON.parse(options));
		
		// Initialise les tableaux de valeurs
		var i = 0;
		values = JSON.parse(values);
		$.each(values, function(key, val) {
			myObj.keys[i] = key;
			myObj.invKeys[key] = i;
			myObj.labels[i] = values[key];
			i++;
		});

		// Met à jour les valeurs sélectionnées
		var lastEltInd = this.keys.length - 1;
		if (this.options.lower) {
			if (this.options.takeBoundValues || (this.options.lower != this.keys[0] && this.options.lower != this.keys[lastEltInd])) {
				this.lowerBound = this.options.lower;
				this.lowerBoundLabel = values[this.options.lower];
			}
		}
		if (this.options.upper) {
			if (this.options.takeBoundValues || (this.options.upper != this.keys[0] && this.options.upper != this.keys[lastEltInd])) {
				this.upperBound = this.options.upper;
				this.upperBoundLabel = values[this.options.upper];
			}
		}
		
		var min = 1;
		var max = this.keys.length;

		// Positionne les barres glissantes
		var selected = [];
		selected[0] = (this.options.lower ? this.invKeys[this.options.lower] + 1 : min);
		selected[1] = (this.options.upper ? this.invKeys[this.options.upper] + 1 : max);

		// Initialise le slider
		this.slider = $('#' + this.el.id).slider({
			range : true,
			min : min,
			max : max,
			values : selected,
			slide : function(event, ui) {
				// Si on a sélectionné une valeur min
				if (myObj.options.takeBoundValues || (ui.values[0] != min && ui.values[0] != max)) {
					myObj.lowerBound = myObj.keys[ui.values[0] - 1];
					myObj.lowerBoundLabel = myObj.labels[ui.values[0] - 1];
				}
				else {
					myObj.lowerBound = null;
					myObj.lowerBoundLabel = null;
				}
				
				// Si on a sélectionné une valeur max
				if (myObj.options.takeBoundValues || (ui.values[1] != min && ui.values[1] != max)) {
					myObj.upperBound = myObj.keys[ui.values[1] - 1];
					myObj.upperBoundLabel = myObj.labels[ui.values[1] - 1];
				}
				else {
					myObj.upperBound = null;
					myObj.upperBoundLabel = null;
				}
			}
		});

		var width = this.slider.width() / (this.keys.length - 1);
		this.slider.after('<div class="ui-slider-legend"><label style="width:' + width + 'px;">'
				+ this.labels.join('</label><label style="width:' + width + 'px;">') +
				'</label></div>');
		$('.ui-slider-legend label:last-child').css('width', 'auto');
	};

	this.init();
};