$(document).ready(function(){
	$("form#estudiante").validate({
		rules:{
			nombre:{
				required:true,
				minlength:2
			},
			apellido:{
				required:true,
				minlength:2
			},
			email:{
				email:true,
				required:true,
				remote: {

			        url: "rpc/validar_email.php",
			        type: "post",
			        data:{
			         
			        	email: function(){
			            return $('#email').val();
			        	}
			        }
			    }

			},
			
			contrasenia:{
				required:true,
				minlength: 5
			},

			verfcontrasenia:{
				required:true,
				equalTo:"#contrasenia"
			} 
		},
		messages:{
			nombre:{
				required:'Ingresa tu nombre',
				minlength:$.validator.format("Al menos 2 caracteres requeridos")
			},
			apellido:{
				required:'Ingresa tu apellido',
				minlength:$.validator.format("Al menos 2 caracteres requeridos")
			}
			,
			email:{
				required:'Ingresa el email',
				remote:"El email ya esta registrado, intente con otro"
			},
			contrasenia:{
				required:'Ingrese la contraseña',
				minlength: $.validator.format("Se requiere al menos 5 caracteres")
			},
			verfcontrasenia:{
				
				equalTo: $.validator.format("La contraseña no coincide")
			}
		}
	})
	
	$("#btn-registrar").on('click', function(event) {
		event.preventDefault();
		if ($("form#estudiante").valid()) {

			$.ajax({
				url: 'rpc/procesar.php',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {
					nombre: $('#nombre').val(),
					apellido:$('#apellido').val(),
					email: $('#email').val(),
					contrasenia:$('#contrasenia').val(),
					verfcontrasenia:$('#verfcontrasenia').val(),
				},
			})
			.done(function(msg) {
			    if(msg == 'Datos ingresados correctamente')
			    	$('#mensaje').addClass('alert-danger');
			    else
			        $('#mensaje').addClass('irsesion');

	    		$('#mensaje').html('<a href="index.php" type="button" class="btn btn-primary">Inicia tu sesion</a>');
			    console.log("success");

			    $('#usuario').trigger('reset');

    		})
		    .fail(function() {
		      console.log("error");
		    })
		    .always(function() {
		      // $('#usuario').reset();
		      console.log("complete");
		    });
		};

	});

	$('btn-iniciar').on('click', function(event) {
		event.preventDefault();

		if ($('form#sesion').valid()) {
			$.$.ajax({
				url: 'rpc/inicarsesion.php',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {

					email:$('#email').val(),
					contrasenia:$('#contrasenia').val(),
				},
			})
			.done(function(msg){
				if (msg==true) 
					$('#mensaje').addClass('alert-danger');
			    else
			        $('#mensaje').addClass('irsesion');

	    		$('#mensaje').html('<a href="matriculacion.php" type="button" class="btn btn-primary">Ir a la matricula</a>');
			    console.log("success");	
				
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		};
	});

	var campo,id; 

	$('#tabla-registro tr td').each(function(index, el) {
		$(el).on('click', function(event) {
		 	event.preventDefault();

			campo=$(this).closest("td").data("campo");
			id=$(this).closest("tr").find(".id").text();
			$(this).html('<input type="text" id="modificar" value=""> <button id="guardar_' + $(this).attr("id") + '">Guardar cambios</button>  <button id="cancelar_' + $(this).attr('id') + '">Cancelar</button>');
			$('#modificar').focus();
		});

       
		$('guardar_' + $(this).attr('id')).on('click', function(event) {
	   		event.preventDefault();
	    
		    $.ajax({
		    	url:'rpc/actualizar.php',
		    	type:'post',
		    	dataType:'json',
		    	data: {

			    	valorM: $('#modificar').val(),
			    	campo:campo,
			    	id:id

		        },
		    })

		  	.done(function() {
		    	console.log("success");
		    })

		    .fail(function() {
		    	console.log("error");
		    })

		    .always(function() {
		    	console.log("complete");
		    });
	      
	   	});
   	});

   	$('#buscar').on('keyup',function(event){
   		event.preventDefault();

   		$.ajax({
   			url: 'rpc/buscar.php',
   			type: 'POST',
   			data: {
   					texto:$('#buscar').val()
   				},
   		})
   		.done(function() {
   			$('#tabla-registro tbody').html();
   			console.log("success");
   		})
   		.fail(function() {
   			console.log("error");
   		})
   		.always(function() {
   			console.log("complete");
   		});
   		
   	});
})