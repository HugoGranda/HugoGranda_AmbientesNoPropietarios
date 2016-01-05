$(document).ready(function($) {

	$('#btn-ocultar').on('click',function(event){
		event.preventDefault();


		if($('#btn-ocultar').css('display')!= 'none'){
			//$('#info').hide();
			$('#btn-ocultar').fadeOut();
		}
	});
});