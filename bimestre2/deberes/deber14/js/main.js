$(document).ready(function(){
	$("form#usuario").validate({
		rules:{
			nombre:{
				required:true,
				minlength:2
			},
			email:{
				email:true,
				required:true
			},
			telefono:{
				required:true,
				minlength:7
			},
			usuario:{
				required:true,
        	remote: {

		        url: "rpc/validar_usuario.php",
		        type: "post",
		        data:{
		         
		        	usuario: function(){
		            return $('#txtusuario').val();
		        }

        	}


        	}
			},
			contrasena:{
				required:true,
				minlength: 6
			},
			conf_contrasena:{
				required:true,
				equalTo:"#contrasena"
			} 
		},
		messages:{
			nombre:{
				required:'Ingresa tu nombre',
				minlength:$.validator.format("Al menos 2 caracteres requeridos")
			},
			email:{
				required:'Ingresa el email'
			},
			telefono:{
				required:'Ingrese el telefono',
				minlength:$.validator.format("Al menos 3 caracteres requeridos")
			},
			usuario:{
				required:'Ingrese un usuario valido',
				remote:"El usuario ya esta registrado , intente con otro"
			},
			contrasena:{
				required:'Ingrese la contraseña',
				minlength: $.validator.format("Se requiere al menos 6 caracteres")
			},
			conf_contrasena:{
				
				equalTo: $.validator.format("La contraseña no coincide")
			}
		}
	})

	$("#btn-enviar").on('click', function(event) {
		event.preventDefault();
		if ($("form#usuario").valid()) {

			$.ajax({
				url: 'rpc/procesar.php',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {
					nombre: $('#nombre').val(),
					email: $('#email').val(),
					telefono:$('#telefono').val(),
					direccion:$('#direccion').val(),
					provincia:$('#txtprovincia').val(),
					canton:$('#txtcanton').val(),
					parroquia:$('#txtparroquia').val(),
					usuario:$('#txtusuario').val(),
					contrasena:$('#contrasena').val(),
					conf_contrasena:$('#conf_contrasena').val(),
				},
			})
			.done(function(msg) {
			    if(msg == "Mensaje enviado con éxito.")
			    	$('#mensaje').addClass('alert-success');
			    else
			        $('#mensaje').addClass('alert-danger');

			    $('#mensaje').html(msg);
			    console.log("success");
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

	$('#txtprovincia').on('change', function(event) {
		event.preventDefault();
	  
		$.ajax({
			url: 'rpc/get_cantones.php',
			type: 'POST',
			data: {provincia: $('#txtprovincia').val()},
	  	})
		.done(function(msg) {
			$('#txtcanton').html(msg);
		    
			$('#txtparroquia').html('<option value="">Seleccione...</option>');
			console.log("success");
		})
		
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	  
	});


	$('#txtcanton').on('change', function(event) {
		event.preventDefault();
	  
		$.ajax({
			url: 'rpc/get_parroquias.php',
			type: 'POST',
			data: {canton: $('#txtcanton').val()},
		})
	  	.done(function(msg) {
	    	$('#txtparroquia').html(msg);
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