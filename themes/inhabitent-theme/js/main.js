$(function() {
	console.log('Im loaded');
	var submitIcon = $('.icon-search');
	var inputField = $('.search-field');
	var searchForm = $('.search-form');
	var isOpen = false;
	submitIcon.on('click', function(event){
		
		// event.preventDefault(event);
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