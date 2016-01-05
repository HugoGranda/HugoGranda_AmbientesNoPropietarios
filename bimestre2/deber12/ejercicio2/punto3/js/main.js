$(document).ready(function($) {

	$('#btn-ocultar').on('click',function(event){
		event.preventDefault();


		if($('.intro').css('display')!= 'none'){
			//$('#info').hide();
			$('.intro').fadeOut();
			$('#btn-ocultar').text('Mostrar');
		}else{
			//$('#info').show();
			$('.intro').fadeIn();
			$('#btn-ocultar').text('Ocultar');
		}
	});
});