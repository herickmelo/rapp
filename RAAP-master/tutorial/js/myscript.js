$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');
	$("#active a:contains('Search Projects')").parent().addClass('active');
    $("#archived a:contains('Archived Projects')").parent().addClass('active');
    $("#help a:contains('Help and Tutorial')").parent().addClass('active');
	
}); //jQuery is loaded