$(document).ready(function(){
	$("#opcion1").click(function(){
		window.location.href = '../multimedia/imagen_interna';
	});

	$("#opcion2").click(function(){
		window.location.href = '../multimedia/imagen_externa';
	});

	$("#opcion3").click(function(){
		window.location.href = '../multimedia/video_externo';
	});

	$("#opcion4").click(function(){
		window.location.href = '../multimedia/lanzar_vista_listar_archivos';
	});

	$("#opcion5").click(function(){
		window.location.href = '../banner/inicio';
	});

	$("#opcion6").click(function(){
		window.location.href = '../banner/listar_banners';
	});

	$("#opcion7").click(function(){
		window.location.href = '../galeria/crear_album';
	});

	$("#opcion8").click(function(){
		window.location.href = '../galeria/crear_elemento';
	});

	$("#opcion9").click(function(){
		window.location.href = '../galeria/listar_albumnes';
	});

	$("#opcion10").click(function(){
		window.location.href = '../galeria/ver_elementos_galeria';
	});

	$("#opcion11").click(function(){
		window.location.href = '../blog/inicio';
	});

	$("#opcion12").click(function(){
		window.location.href = '../blog/listar_blogs';
	});

	$("#opcion13").click(function(){
		window.location.href = '../programas/inicio';
	});


	$("#opcion14").click(function(){
		window.location.href = '../programas/listar_programas';
	});

	$("#opcion15").click(function(){
		window.location.href = '../blog/listar_visitas_conteo';
	});

	$("#opcion16").click(function(){
		window.location.href = '../contactos/inicio';
	});


	$("#opcion17").click(function(){
		window.location.href = '../talento/inicio';
	});


	$("#opcion18").click(function(){
		window.location.href = '../talento/listar_talentos';
	});

	$(".btn-cerrar-sesion").click(function(){
		window.location.href = '../panel/salir';
	});

	$('input , textarea').bind('keypress', function (event) { 
		var regex = new RegExp("^[a-zA-Z0-9]+$");
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode); if (!regex.test(key)) { event.preventDefault(); return false; } });

	
	$("input , textarea").attr("autocomplete" ,"off");
	$("body").attr("oncopy","return false");
	$("body").attr("onpaste","return false");


});