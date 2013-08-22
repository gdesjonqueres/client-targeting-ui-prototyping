/**
 * 
 */
(function($){

	$(document).ready(function(){
		// Méthodes exécutées au chargement du DOM
		initLightBoxes();
		initLibelleEdit();
		initSlideMenu();
	});
	
	function initLightBoxes() {
		$(".iframe").colorbox({
			iframe: true,
			speed: "200",
			width: "400px",
			height: "200px",
			fastIframe: false,
			scrolling: false,
			onComplete: resizeColorbox
		});
		
		$(".iframeReload").colorbox({
			iframe: true,
			speed: "200",
			width: "400px",
			height: "200px",
			fastIframe: false,
			onComplete: resizeColorbox,
			onClosed: function() {
				parent.document.location.reload();}
		});
		
		/*$(".iframe").colorbox({iframe: true,
			width: "680px",
			height: "350px",
			onClosed: function(){parent.document.location.reload();}});*/

		$(".iframeSmall").colorbox({iframe: true,
						width: "400px",
						height: "350px"/*,
						onClosed: function(){parent.document.location.reload();}*/});

		/*$(".iframeBig").colorbox({iframe: true,
						width: "800px",
						height: "500px",
						fastIframe: false,
						onClosed: function(){parent.document.location.reload();},
						onComplete: function() {$.colorbox.resize();}});*/
		$(".iframeBig").colorbox({iframe: true,
								fastIframe: false,
								onComplete: function() {$.colorbox.resize();}});

		$(".inline").colorbox({inline: true, href: "#toto"});

		$(".ajax").colorbox();
	}
	
	function initLibelleEdit() {
		$("#libelle-campagne").editable(function(value, settings) {
			myCpg.doSaveLibelle(value);
			return value;
		}, {
			type : "text",
			indicator : "Enregistrement en cours...",
			tooltip : "Cliquez ici pour changer le nom de la campagne...",
			cssclass: "edit",
			submit: "OK",
			select: true,
			width: "460px"/*,
			height: "20px"*/
		});
	}
	
	function initSlideMenu()
	{
		$("#menu-site ul").hide();
		$(".menu h1").each(function() {
			$(this).css("cursor", "pointer");
			$(this).on("click", function(event) {
				var myJqObj = $(this).parent();
				myJqObj.children("ul").slideToggle();
				$(".menu").not(myJqObj).children("ul").slideUp();
			});
		});
	}
	
	function resizeColorbox() {
		var myForm = $(".cboxIframe").contents().find("form");
		var myContent = myForm.find(".content");
		var myWidth = myForm.width() > myContent.width() ? myForm.width() : myContent.width();
		var myHeight = myForm.height() > myContent.height() ? myForm.height() : myContent.height();
		
		myWidth += 90;
		myHeight += 70;
		
		$.colorbox.resize({innerWidth: myWidth, innerHeight: myHeight});
		//$.colorbox.resize();
	}

})(jQuery);