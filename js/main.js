$(function(){
	$('.radio').hide();

	$('section#body .newsletter div').click(function(){
		$('section#body .newsletter div').removeClass('selected');
		$(this).addClass('selected');

		var value = $(this).attr('id');

		$('.newsletter .radio input').removeAttr('checked');
		$('.newsletter .radio input[value='+ value +']').attr('checked', 'checked');
	});
})