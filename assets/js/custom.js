$(document).ready(function(){

	$('.carousel').carousel()

	//menu mobile
	$("#menuMobile").mmenu({
		"navbar": {
        "add": false
     },
		 "offCanvas": {
            "position": "right"
         }
	});


	$(".product-options li a").click(function(){
		$(this).find("span").append("<i class=\"fa fa-check\" aria-hidden=\"true\"></i>");
		return false;
	});



});
