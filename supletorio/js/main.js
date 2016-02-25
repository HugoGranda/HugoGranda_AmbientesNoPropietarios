$(document).ready(function(){

	$('#materias')
		$.ajax({
			url: 'rpc/get_materias.php'
		})
		  .done(function(msg) {
			$('#materias').html(msg);
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});

	var mats=[];
	$('#guardar').on('click', function(e){
		event.preventDefault();
		$('input[type=checkbox]').each(function(){
			if (this.checked) {
				mats.push($(this).val());
				
			}
		});
		$.ajax({
			url: 'rpc/registrar_materias.php',
			type:'POST',
			dataType:'json',
			data:{
				materias: mats, 
				nivel: $('#nivel').val()
			},
		})
		.done(function(msg) {
            $('#mensaje').html(msg);
           
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
	});





$('#nivel').on('change',function(e){
	event.preventDefault();
	$.ajax({
			url: 'rpc/get_materias_asignadas.php',
			type:'POST',
			//dataType:'json',
			data:{
				nivel: $(this).val()
			},
		})
		.done(function(msg) {
            $('#materias-asignadas').html(msg);
           
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


});


$('#input[type=checkbox]').click(function(){
  if (this.checked) {

  	alert('checkbox activado');
  }
 
});



$('#cancelar').on('click',function(e){
$('input[type=checkbox]').each(function(){
			if (this.checked) {
				$(this).removeAttr('checked');
				
			}
		});




});






});