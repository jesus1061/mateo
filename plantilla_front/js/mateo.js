$(document).ready(function(){
	$(".img-programa").css("width","100%");
	$(".img-programa").css("height","200px");
	$(".img-slider").css("height","100%");
	$(".nombre-talento").css("color","black");
	$(".section-title").css("font-family","'Fjalla One', sans-serif");
	$("h1 , h2 , h3 , h4 , h5 , h6").css("font-family","'Fjalla One', sans-serif");
	$(".site-menu > li > a").css("color","white");
	$(".bg-light").css("background-color","rgb(255 , 180 , 29)");
	$(".site-footer p").css("color","white");
	$(".site-footer a").css("color","white");


	/*Intervalo de 10 minutos*/
	setTimeout(cerrar_sesion_front, 1000*60*60);

	function cerrar_sesion_front(){
		$.ajax({
                data:  { sesion:1}, //datos que se envian a traves de ajax
                url:   'inicio/salir', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
              },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".confirmar_cerrar").html(response);


                  //$(".confirmar_eliminar").load("archivos_multimedia.php");
                  //alert("Borrar");
              }
          });
	};


	$("#crear_contacto").click(function(){
		if($("#nombre").val().length > 0 && $("#apellido").val().length && $("#correo").val().length > 0 && $("#mensaje").val().length > 0 && $("#telefono").val().length > 0){
			var nombre = $("#nombre").val();
			var apellido = $("#apellido").val();
			var correo = $("#correo").val();
			var mensaje = $("#mensaje").val();
			var telefono = $("#telefono").val();
			
			$.ajax({
                data:  { arg_nombre:nombre , arg_apellido:apellido , arg_correo:correo , arg_mensaje:mensaje , arg_telefono:telefono}, //datos que se envian a traves de ajax
                url:   'inicio/crear_contacto', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
              },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".confirmar_cerrar").html(response);
                	alert("Te has registrado correctamente");
                	var nombre = $("#nombre").val();
                	$("#nombre").val("");
                	$("#apellido").val("");
                	$("#correo").val("");
                	$("#mensaje").val("");
                	$("#telefono").val("");


                  //$(".confirmar_eliminar").load("archivos_multimedia.php");
                  //alert("Borrar");
              }
          });


		}else{
			alert("Por favor llenar los campos correspondientes");
		}
	});
	

});