$(document).ready(function($) {

	$('.primero').on('click',function(event){
		event.preventDefault();


		if($('.primero').css('display')!= 'none'){
			//$('#info').hide();
			$('.primero').fadeOut();
			$('.segundo').fadeOut();
		}
	});
});