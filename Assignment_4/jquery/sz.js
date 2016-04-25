$('input[type=checkbox]').click(function(){

	// if is checked
	if($(this).is(':checked')){

        $(this).parents('li').children('input[type=checkbox]').prop('checked', true);

	} else {

		// uncheck all children
		$(this).parent().find('li input[type=checkbox]').prop('checked', false);

	}

});

$('input[type=checkbox]').click(function(){

	// if is checked
	if($(this).is(':checked')){

		// check all children
		$(this).parent().find('li input[type=checkbox]').prop('checked', true);

		// check all parents
		$(this).parent().prev().prop('checked', true);

	} else {

		// uncheck all children
		$(this).parent().find('li input[type=checkbox]').prop('checked', false);

	}

});