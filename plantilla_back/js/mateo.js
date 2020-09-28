$(document).ready(function(){

//alert("Hola");

	//Enrutamiento
	$("#opcion1").click(function(){ /*Enrutamiento para crear un banner*/
		window.location.href = 'banner';
	});
	$("#opcion2").click(function(){ /*Enrutamiento para listar un banner*/
		window.location.href = 'banner/listar_banners';
	});


	$("#opcion3").click(function(){ /*Enrutamiento para crear un funcionario*/
		window.location.href = 'talento';
	});


	$("#opcion4").click(function(){ /*Enrutamiento para crear un funcionario*/
		window.location.href = 'talento/listar_talentos';
	});

	$("#opcion5").click(function(){ /*Enrutamiento para crear un programa*/
		window.location.href = 'programas';
	});

	$("#opcion6").click(function(){ /*Enrutamiento para crear un programa*/
		window.location.href = 'programas/listar_programas';
	});

	$("#opcion7").click(function(){ /*Enrutamiento para crear un programa*/
		window.location.href = 'blog';
	});
	$("#opcion8").click(function(){ /*Enrutamiento para crear un programa*/
		window.location.href = 'blog/listar_blogs';
	});

	$("#opcion9").click(function(){ /*Enrutamiento para crear una imagen interna*/
		window.location.href = 'multimedia/imagen_interna';
	});

	$("#opcion10").click(function(){ /*Enrutamiento para crear una imagen externa*/
		window.location.href = 'multimedia/imagen_externa';
	});

	$("#opcion11").click(function(){ /*Enrutamiento para crear un video externo*/
		window.location.href = 'multimedia/video_interno';
	});


	$("#opcion12").click(function(){ /*Enrutamiento para crear un video externo*/
		window.location.href = 'multimedia/lanzar_vista_listar_archivos';
	});
	
});