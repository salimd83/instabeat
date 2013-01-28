$(function(){
	$('.radio').hide();

	$('section#body .newsletter div').click(function(){
		$('section#body .newsletter div').removeClass('selected');
		$(this).addClass('selected');

		var value = $(this).attr('id');

		$('.newsletter .radio input').removeAttr('checked');
		$('.newsletter .radio input[value='+ value +']').attr('checked', 'checked');
	});

	if($('#press section#body aside').length){
		var int = window.setInterval(function(){ asidePos($('#press section#body header form'), $('#press section#body aside')) }, 400);
	}
})

function asidePos(elem, aside){
	var position = elem.offset().top - $(window).scrollTop();

	if(position < 1){
		aside.css({'position': 'relative', 'top': $(window).scrollTop()-240, 'left': 0});
	}else{
		aside.css({'position': 'auto', 'top': 0, 'left': 0});
	}
	
}