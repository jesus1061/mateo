<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mateo</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  
  <link rel="stylesheet" href="plantilla_back/css/personalizacion.css">
  
  <script type="text/javascript" src="plantilla_back/js/jquery.js"></script>
  <script src="plantilla_back/js/mateo.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div id="foco" style="display: none">

    </div>
    <!-- <input type="text" value="<?php echo $_SESSION['foco']; ?>" class="foco" style="display: none">-->
    

    <?php
    include "header.php";
    ?>


    <div class="contenedor-dinamico-admin">
      <div class="contenedor-ajustado">

         <?php
 //include_once "../../controller/blog/blog_controller.php";
 //$instancia = new Blog_controller();
 //$peticion_controlador = $instancia -> listar_archivos_controller();


 ?>
 <div  id="formulario-blog">
  
  <form action="" method="post" class="formulario">
    <div class="encabezado-formulario">
    Formulario de creación de programas
  </div>
    <div class="form-control" style="display: none;">

      <input type="hidden" id="tipo_peticion" value="11"   class="input-form" name="tipo_peticion">


    </div>

    <div class="form-control">
      <label for="" class="label-form">Titulo del programa</label>
      <br>
      <br>
      <input type="text" class="input-form" id="titulo_programa"  name="titulo_programa" placeholder="Titulo del programa" required >


    </div>
    <div class="form-control">
      <label for="" class="label-form">Descripción del programa</label>
      <br>
      <br>
      <textarea name="contenido_programa" id="contenido_programa" class="input-textarea contenido_publi" required placeholder="Descripción del programa"></textarea >

    </div>
    




    <div class="form-control">
      <label for="" class="label-form">Portada del programa</label>
      <br>
      <br>
      <input type="text" id="btn-abrir-multimedia" name="portada_programa" placeholder="Seleccionar archivo multimedia"   required  class="input-form"  style="background-color: gray; color: white; font-weight: 900; cursor: pointer" >

      <div class="container-imagenes">
        <div class="archivos">
          <?php
         // foreach($peticion_controlador as $archivo){
           // echo "<div class='archivo' rel='".$archivo['ruta_basica']."' title='".$archivo['procedencia']."'>
           // <div class='cont-archivo' id='".$archivo['id_archivo']."'>

            //".$archivo['archivo']."
           // <br>
           // <span class='nombre-archivo-label'>".$archivo['nombre_archivo']."</span>
          
           // <br>
           // <div class='opciones-archivo'>
            

            //</div>
           // </div>
            //</div>";
         // }
          ?>






        </div>
      </div>


    </div>





    <center><input type="submit" id="btn-activar-formulario" value="Crear Programa" style="display:block;"></center> 
  </form>
 </div>
 <div class="respuesta">

 </div>
 <script>



  $("#btn-abrir-multimedia").click(function(){
    $(".container-imagenes").css("display","block");
  });



  $(".archivo").click(function(){

    var tipo_archivo = $(this).attr("title");

    if(tipo_archivo == "imagen_externa" ){
      var id = $(this).attr("rel");

      $("#btn-abrir-multimedia").attr(id);
      var imagen ='<img class="img-archivo" src="'+id+'"></img>';
      $("#btn-abrir-multimedia").attr("value",imagen);
    }

    if(tipo_archivo == "imagen_interna"){
      var id = $(this).attr("rel");

      $("#btn-abrir-multimedia").attr(id);
      var imagen ='<img class="img-archivo" src="'+id+'"></img>';
      $("#btn-abrir-multimedia").attr("value",imagen);
    }

    if(tipo_archivo == "video_externo"){
      var id = $(this).attr("rel");

      $("#btn-abrir-multimedia").attr(id);
      var imagen =id;
      $("#btn-abrir-multimedia").attr("value",imagen);
    }

  });

  function ajax(id){

//alert(id);
$.ajax({
                data:  { codigo_multimedia:id , tipo_peticion:10}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
              },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  //$(".respuesta").html(response);
              }
          });

};



</script>


        <script>
          var validar_nombre = 0;

          var validaar_file = 0;

          function cambio_formulario(valor_formulario){

            if(valor_formulario == 1){
              $("#seleccionador_archivo").css("display","block");
            }

            if(valor_formulario == 2){
              $(".archivos-subida").load("subir_url.php");


            }

            if(valor_formulario == 3){
              $(".archivos-subida").load("subir_url_video.php");


            }

          };

          $("#subir-archivo-file").click(function(){
            $("#btn-file").click();
          });

          function cambiarFile(){
            const input = document.getElementById('btn-file');
            if(input.files && input.files[0])
              var valor =    $(input).val();
            $("#subir-archivo-file").val(valor);
            validaar_file = 1;

          };

          function comprobar_estado(){

            if(validar_nombre == 1 && validaar_file == 1){

              $("#subir-archivo-file-btn").attr("type","submit");
              $("#subir-archivo-file-btn").click();

            } else{
              alert("Por favor diligenciar todos los datos");
            }

          };

          $("#nombre_archivo_texto").keyup(function(){
            var longitud = $(this).val().length;
            if(longitud > 0){
              validar_nombre = 1;

            }else{
              validar_nombre = 0;
            }


          });


        </script>
      </div>

    </div>


    <div class="david"></div>
  </div>
  <script>
    $(".btn-cerrar-sesion").click(function(){
      $.ajax({
                data:  {tipo_peticion:30}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  $(".david").html(response);
                }
              });
    });
  </script>

</body>
</html>