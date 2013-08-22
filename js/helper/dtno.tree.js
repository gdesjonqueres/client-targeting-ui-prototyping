var Dtno_Tree = function(elId, nodes, selected) {
	this.el = null;
	this.tree = null;

	this.id = elId;
	this.nodes = JSON.parse(nodes);
	this.selected = JSON.parse(selected);

	this.treeDefaults = {
		"showcheck" : true,
		complete : true,
		"isexpand" : false,
		"checkstate" : 0,
		"hasChildren" : true
	};

	this.init = function() {
		var myObj = this;
		
		// hack...
		// "selected" doit contenir un tableau de string,
		// parfois les index numériques sont castés en int par php quand récupérés en POST
		// ce qui pose problème avec le $.inArray plus loin car les ids de la liste des nodes
		// sont uniquement des chaînes, eux
		$.each(myObj.selected, function(index, item) {
			if (typeof item == "number") {
				myObj.selected[index] = item.toString();
			}
		});
		
		this.el = document.getElementById(this.id);

		this.recursive(this.nodes, this.selected);

		var root = $.extend({}, this.treeDefaults, {
			"id" : "root",
			"text" : "Tout sélectionner",
			"isexpand" : true,
			"ChildNodes" : this.nodes
		});
		this.tree = $("#" + this.id).treeview({
			showcheck : true,
			data : [root]
		});
		var tree = this.tree;
	};

	this.init();
};

Dtno_Tree.prototype = {
	recursive : function(nodes, selected, parent, prefix) {
		if (prefix == null) {
			prefix = '';
		}

		for ( var i = 0; i < nodes.length; i++) {

			nodes[i] = $.extend({}, this.treeDefaults, nodes[i]);

			if (!nodes[i].id) {
				nodes[i].id = (prefix != '' ? prefix + '_n' + i : 'n' + i);
			} else {
				nodes[i].value = nodes[i].id;
			}
			if ($.inArray(nodes[i].id, selected) != -1) {
				nodes[i].checkstate = 1;
				if (parent) {
					parent.checkstate = 2;
					parent.isexpand = true;
				}
			}

			if (nodes[i].ChildNodes == null) {
				nodes[i].hasChildren = false;
			} else {
				this.recursive(nodes[i].ChildNodes, selected, nodes[i], prefix + 'n' + i);
				if (nodes[i].checkstate == 2 && parent) {
					parent.checkstate = 2;
					parent.isexpand = true;
				}
			}
		}
	},

	getCheckedNodes : function() {
		var checkedItems = $("#" + this.id).getTSNs();
		var values = [];
		$.each(checkedItems, function(index, item) {
			if (item.value) {
				values.push({id: item.value, label: item.text});
			}
		});
		return values;
	}
};
