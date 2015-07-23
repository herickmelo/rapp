$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');
	$("#active a:contains('Search Projects')").parent().addClass('active');
    $("#archive a:contains('Archive Projects')").parent().addClass('active');
    $("#help a:contains('Help and Tutorial')").parent().addClass('active');
	
	/*if($("#photographer_pack a:contains('Photographer\'s Package')").parent().hasClass('active')){
	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	}
	
	if($("#joomla a:contains('Joomla Training')").parent().hasClass('active')){
	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	}

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover
	*/
}); //jQuery is loaded