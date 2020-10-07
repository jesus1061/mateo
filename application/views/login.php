<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mateo</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<link rel="stylesheet" href="../plantilla_back/css/personalizacion.css">
	
	<script type="text/javascript" src="../plantilla_back/js/jquery.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
	<div class="container" id="contenedor-login">
		<header>
			<div class="main">
				<div class="logotipo-contenedor">
					<img src="../plantilla_back/img/logo.png" alt="" class="logotipo-img">
					<i class="fa fa-navicon" id="btn-abrir-menu"></i>
				</div>
				


				
			</div>
		</header>
	</div>
	<form action="panel/validar_login" method="post" style="box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.75);">
		<div class="contenedor-login">
			<div class="encabezado-login">
				<label>Login</label>
			</div>
			<div class="contenedor-login-data">
				<div class="form-group">
					<label for=""  class="data-login" >Usuario</label>
					<br>
					<input type="text" name="usuario" class="data-login" id="usuario" >

				</div>
				<div class="form-group">
					<label for=""   class="data-login">contraseña</label>
					<br>
					<input type="password" name="clave" class="data-login" id="clave">

				</div>
				<div class="form-group">

					<br>
					<input type="button" id="btn-login" class="data-login" required value="Iniciar" style="color:white; border: none; font-weight: 900; cursor: pointer;">

				</div>
			</div>

		</div>
	</form>
	<div class="respuesta">
		
	</div>
	<script>
		$("input , textarea").attr("autocomplete" ,"off");
		$("body").attr("oncopy","return false");
		$("body").attr("onpaste","return false");
		$("#btn-login").click(function(){

			if($("#usuario").val().length > 0  && $("#clave").val().length > 0){
				var usuario = $("#usuario").val();
				var clave = $("#clave").val();
				//alert(usuario+clave);
				ajax_login(usuario , clave);
			} else{
				alert("Por favor llenar los campos respectivos");
			}
		});

		function ajax_login(usuario , clave){
			$.ajax({
                data:  { arg_usuario:usuario , arg_clave:clave}, //datos que se envian a traves de ajax
                url:   'validar_login', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
              },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".respuesta").html(response);
                }
            });
		}

		
	</script>
</body>
</html>
