(function($){

//Function to open and close the search bar
	var searchButton = $('.search-submit'),
		searchField = $('.search-field');

		$('body').on('click', function(event){

			if($(event.target).parents().hasClass('search-submit')){
				event.preventDefault();
				searchField.toggle('slow');
				searchField.focus();
				searchButton.submit();
			
			}else if(searchField.val().length > 0){
				searchField.focusout();
				searchField.show();
			
			}else {
				searchField.hide('slow');
				searchField.focusout();
			}
		});

}(jQuery));