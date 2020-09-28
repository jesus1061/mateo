<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mateo</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  
  <link rel="stylesheet" href="plantilla_back/css/personalizacion.css">
  
  <script type="text/javascript" src="plantilla_back/js/jquery.js"></script>
  <script src="plantilla_back/js/mateo2.js"></script>
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
       // $instancia = new Blog_controller();
       // $peticion_controlador = $instancia -> listar_archivos_controller();



        ?>
        <div  id="formulario-blog">

          <?php
          //foreach($peticion_album as $album){

       // }
        ?>

        <form action="../../controller/enrutador/route.php" method="post" class="formulario">
          <div class="encabezado-formulario">
           Editar album <?php //echo $album['album_titulo'];?>
         </div>
         <div class="form-control" style="display: none;">

          <input type="hidden" id="tipo_peticion" value="20"   class="input-form" name="tipo_peticion">
          <input type="text" id="tipo_peticion" value="<?php echo $album_id?>"   class="input-form" name="album_id">


        </div>

        <div class="form-control">
          <label for="" class="label-form">Titulo del banner</label>
          <br>
          <br>
          <input type="text" class="input-form" id="titulo_programa"  name="album_titulo" value="<?php //echo $album['album_titulo']?>" required >


        </div>






        <div class="form-control">
          <label for="" class="label-form">Cargar banner a utilizar</label>
          <br>
          <br>
          <input type="text" id="btn-abrir-multimedia" name="album_portada_principal" value='<?php echo $album['album_portada_principal']?>'   required  class="input-form" readonly style="background-color: gray; color: white; font-weight: 900; cursor: pointer" >

          <div class="container-imagenes">
           <div class="archivos">
            <?php
            //foreach($peticion_controlador as $archivo){
           // echo "<div class='archivo' rel='".$archivo['ruta_basica']."' title='".$archivo['procedencia']."'>
             // <div class='cont-archivo' id='".$archivo['id_archivo']."'>

                //'".$archivo['archivo']."'
                //<br>
               // <span class='nombre-archivo-label'>Nombre + extencion</span>
                //<span class='datos-archivo'>'".$archivo['peso_archivo']."'</span>
               // <br>
                //<div class='opciones-archivo'>
                //  <i class='fa fa-trash' id='btn-borrar-archivo' title='".$archivo['id_archivo']."'></i>

                //</div>
              //</div>
            //</div>";
        //  }
          ?>






        </div>
      </div>


    </div>





    <center><input type="submit" id="btn-activar-formulario" value="Editar componente" style="display:block;"></center> 
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
$("#subir-archivos").click(function(){
  $(".contenedor-ajustado").load("subir_archivos.php");
});

$("#ver-archivos").click(function(){
  $(".contenedor-ajustado").load("archivos_multimedia.php");
});

$("#agregar_slider").click(function(){
  $(".contenedor-ajustado").load("crear_slider.php");
});

$("#ver_elementos_slider").click(function(){
  $(".contenedor-ajustado").load("tabla_banners.php");
});
$("#crear_album").click(function(){
  $(".contenedor-ajustado").load("crear_album.php");
});

$("#crear_elemento_album").click(function(){
  $(".contenedor-ajustado").load("crear_elemento_galeria.php");
});

$("#ver-album").click(function(){
  $(".contenedor-ajustado").load("ver_albumnes.php");
});

$("#crear-blog").click(function(){
  $(".contenedor-ajustado").load("formulario.php");
});

$("#ver-blog").click(function(){
    //alert("Hola");
    $(".contenedor-ajustado").load("tabla_publicaciones.php");
  });

$("#crear-programa").click(function(){
  $(".contenedor-ajustado").load("crear_programa.php");
});

$("#ver-programas").click(function(){
  $(".contenedor-ajustado").load("tabla_programas.php");
});

$("#crear-talento").click(function(){
  $(".contenedor-ajustado").load("crear_talento.php");
});

$("#ver-talento").click(function(){
  $(".contenedor-ajustado").load("ver_talento.php");
});

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

                  window.location.href = "login.php";

                }
              });
});



</script>

</div>

</div>


<div class="david"></div>
</div>


</body>
</html>