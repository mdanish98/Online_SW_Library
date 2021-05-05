var JQuerySlider2_json = 
	{
          "innerbullets.hideOnMouseOut": false,
          "innernavbaritem.spacing": "0px",
          "innerplaypause.left": "0px",
          "innerbullets.mouseOutEffectEasing": "linear",
          "width": "664px",
          "height": "264px",
          "speed": "500",
          "backgroundType": "predefined",
          "innerbutton.next.halign": "right",
          "innerbutton.back.mouseOutEffectDuration": "200",
          "innernavbar.mouseOutEffectEasing": "linear",
          "innerslider.left": "18px",
          "innerbutton.next.top": "0px",
          "innerbullets.left": "0px",
          "hideOnMouseOut": true,
          "vertical": false,
          "innernumbers.halign": "left",
          "innernavbar.mouseOutEffectDuration": "1000",
          "resumeDuration": "3000",
          "pause": "1000",
          "innerbutton.next.hideOnMouseOut": true,
          "innerbutton.next.valign": "middle",
          "innerbutton.back.valign": "middle",
          "innerbutton.next.mouseOutEffect": "fadeIn",
          "continuous": true,
          "innernavbar.left": "0px",
          "innerplaypause.valign": "top",
          "innerbutton.next.mouseOutEffectDuration": "200",
          "innernavbar.hideOnMouseOut": false,
          "auto": true,
          "innerbutton.next.left": "25px",
          "innernumbersitem.orientation": "horizontal",
          "innernumbers.mouseOutEffect": "fadeIn",
          "innerbutton.back.hideOnMouseOut": true,
          "innernumbers.valign": "middle",
          "innerbutton.back.left": "25px",
          "innerbullets.halign": "center",
          "innernumbers.mouseOutEffectEasing": "linear",
          "innerbutton.back.mouseOutEffect": "fadeIn",
          "innernavbar.valign": "top",
          "innerbulletsitem.spacing": "5px",
          "innernumbers.mouseOutEffectDuration": "1000",
          "innernumbers.spacing": "0px",
          "innerbutton.back.mouseOutEffectEasing": "linear",
          "innerbutton.back.top": "0px",
          "innerplaypause.top": "0px",
          "innernumbers.hideOnMouseOut": false,
          "innerplaypause.mouseOutEffect": "fadeIn",
          "innernavbar.mouseOutEffect": "fadeIn",
          "innerbutton.next.mouseOutEffectEasing": "linear",
          "stopAtInteraction": false,
          "innerbullets.top": "20px",
          "innerplaypause.halign": "left",
          "loop": true,
          "innernavbar.top": "0px",
          "ease": "easeOut",
          "innerbulletsitem.orientation": "horizontal",
          "innerplaypause.mouseOutEffectDuration": "1000",
          "innernavbar.halign": "left",
          "innerbullets.mouseOutEffect": "slideFromBottom",
          "innerplaypause.hideOnMouseOut": false,
          "innerplaypause.mouseOutEffectEasing": "linear",
          "innernumbers.left": "40px",
          "innernavbaritem.orientation": "horizontal",
          "innerbullets.mouseOutEffectDuration": "500",
          "innerslider.top": "15px",
          "fadeDuration": "500",
          "gifPath": "includes/JQuerySlider/x.gif",
          "innerbutton.back.halign": "left",
          "innerbullets.valign": "bottom"
};
	
var JQuerySlider2_slider = null;	

xtd_jQuery(document).ready(function(){
	var $ = xtd_jQuery;
	var jQuery = xtd_jQuery;
	
	$("#JQuerySlider2Container").hide();
	
	// fix bug on webkit//
	if (jQuery.browser.webkit && document.readyState != "complete") {
		setTimeout( createJQuerySlider, 100 );
	} else {
		createJQuerySlider()
	}
		
	function createJQuerySlider() {

		if (document.readyState && document.readyState != "complete") {
			setTimeout( createJQuerySlider, 100 );
			return;
		}

		//show element first as height/width of auto elements is 0 if container is hidden//
		$("#JQuerySlider2Container").show();
		
		// create the slider
		JQuerySlider2_slider = $("#JQuerySlider2").jQuerySlider();
	}
});