$(document).ready(function($) {

	$('#btn-ocultar').on('click',function(event){
		event.preventDefault();


		if($('#contenedor').css('display')!= 'none'){
			//$('#info').hide();
			$('#contenedor').fadeOut();
			$('#btn-ocultar').text('Mostrar todo el html');
		}else{
			//$('#info').show();
			$('#contenedor').fadeIn();
			$('#btn-ocultar').text('Ocultar todo el html');
		}
	});
});