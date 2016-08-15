$(document).ready(function{
	console.log('Im loaded');
	var searchIcon = $('.icon-search');
	var inputField = $('input[type="search"]');
	var searchForm = $('.search-form');
	var isOpen = false;
	
	searchIcon.on('click', function(event){
		
		event.preventDefault();
		console.log('Im clicked');
		if(isOpen == false){
			searchForm.addClass('search-field-open');
			inputField.focus();
			isOpen = true;
		} else {
			searchForm.removeClass('search-field-open');
			inputField.focusout();
			isOpen = false;
		}
	});  
});