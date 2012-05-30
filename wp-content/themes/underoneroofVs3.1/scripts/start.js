	
	var $ = jQuery.noConflict();
	$(document).ready(function() {
	
		jQuery("#menu-item-95 a").css("background-image", "none");
		
		/* for top navigation */
		jQuery("#nav ul").css({display: "none"}); // Opera Fix
		jQuery("#nav li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown(1000);
		},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
		});
		
		jQuery("#form-wysija-nl-1337446152-wysija-to").val("your email");
				
		jQuery("#form-wysija-nl-1337446152-wysija-to").focus(function() {
				
			if (jQuery("#form-wysija-nl-1337446152-wysija-to").val() == "your email")
			{
			
				jQuery("#form-wysija-nl-1337446152-wysija-to").val("");
			
			}
			
		});
		
		jQuery("#form-wysija-nl-1337446152-wysija-to").blur(function() {
				
			if (jQuery("#form-wysija-nl-1337446152-wysija-to").val() == "")
			{
			
				jQuery("#form-wysija-nl-1337446152-wysija-to").val("your email");
				
			}
		});
	});		 	

