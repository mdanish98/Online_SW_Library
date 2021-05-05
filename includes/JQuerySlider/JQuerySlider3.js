var JQuerySlider3_json = 
	{
          "align": "left",
          "auto": true,
          "hideOnMouseOut": true,
          "vertical": false,
          "ease": "easeOut",
          "continuous": true,
          "loop": true,
          "sliderEffect": "slide",
          "speed": "2000",
          "fadeDuration": "2000",
          "pause": "1500",
          "stopAtInteraction": false,
          "resumeDuration": "3000",
          "innernavbaritem.spacing": "0px",
          "innernumbers.spacing": "0px",
          "innerbutton.back.opacity": 1,
          "innerbutton.back.hideOnMouseOut": true,
          "innerbutton.back.mouseOutEffect": "fadeIn",
          "innerbutton.back.mouseOutEffectDuration": "200",
          "innerbutton.back.mouseOutEffectEasing": "linear",
          "innerbutton.back.halign": "left",
          "innerbutton.back.valign": "middle",
          "innerbutton.back.left": "25px",
          "innerbutton.back.top": "0px",
          "innerbutton.next.opacity": 1,
          "innerbutton.next.hideOnMouseOut": true,
          "innerbutton.next.mouseOutEffect": "fadeIn",
          "innerbutton.next.mouseOutEffectDuration": "200",
          "innerbutton.next.mouseOutEffectEasing": "linear",
          "innerbutton.next.halign": "right",
          "innerbutton.next.valign": "middle",
          "innerbutton.next.left": "25px",
          "innerbutton.next.top": "0px",
          "innerplaypause.opacity": 1,
          "innerplaypause.hideOnMouseOut": false,
          "innerplaypause.mouseOutEffect": "fadeIn",
          "innerplaypause.mouseOutEffectDuration": "1000",
          "innerplaypause.mouseOutEffectEasing": "linear",
          "innerplaypause.halign": "left",
          "innerplaypause.valign": "top",
          "innerplaypause.left": "0px",
          "innerplaypause.top": "0px",
          "innernavbar.hideOnMouseOut": false,
          "innernavbar.mouseOutEffect": "fadeIn",
          "innernavbar.mouseOutEffectDuration": "1000",
          "innernavbar.mouseOutEffectEasing": "linear",
          "innernavbar.halign": "left",
          "innernavbar.valign": "top",
          "innernavbar.left": "0px",
          "innernavbar.top": "0px",
          "innernavbaritem.orientation": "horizontal",
          "innerbullets.valign": "bottom",
          "innerbullets.halign": "center",
          "innerbullets.left": "-45px",
          "innerbullets.hideOnMouseOut": false,
          "innerbullets.mouseOutEffect": "slideFromBottom",
          "innerbullets.mouseOutEffectEasing": "linear",
          "innerbullets.mouseOutEffectDuration": "500",
          "innerbulletsitem.orientation": "horizontal",
          "innernumbers.valign": "middle",
          "innernumbers.halign": "left",
          "innernumbers.left": "40px",
          "innernumbers.hideOnMouseOut": false,
          "innernumbers.mouseOutEffect": "fadeIn",
          "innernumbers.mouseOutEffectEasing": "linear",
          "innernumbers.mouseOutEffectDuration": "1000",
          "innernumbersitem.orientation": "horizontal",
          "content_paragraph.opacity": "1",
          "content_subheader.opacity": "1",
          "content_header.opacity": "1",
          "innernavbar.scrollerType": "noScroll",
          "width": "664px",
          "height": "339px",
          "backgroundType": "predefined",
          "innerslider.left": "18px",
          "innerbulletsitem.spacing": "5px",
          "innerbullets.top": "20px",
          "innerslider.top": "15px",
          "gifPath": "../../includes/JQuerySlider/x.gif"
};
	
var JQuerySlider3_slider = null;	

xtd_jQuery(document).ready(function(){
	var $ = xtd_jQuery;
	var jQuery = xtd_jQuery;
	
	$("#JQuerySlider3Container").hide();
	
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
		$("#JQuerySlider3Container").show();
		
		// create the slider
		JQuerySlider3_slider = $("#JQuerySlider3").jQuerySlider();
	}
});