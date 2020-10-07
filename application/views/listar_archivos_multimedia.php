<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_archivos();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listar archivos multimedia</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  
  <link rel="stylesheet" href="../plantilla_back/css/personalizacion.css">
  
  <script type="text/javascript" src="../plantilla_back/js/jquery.js"></script>
  <script src="../plantilla_back/js/enrutador.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
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
       <div class="archivos-multimedia-container">


        <div class="archivos">
          <div class="encabezado-formulario">
            Listado de archivos cargados en el servidor
          </div>
          <?php

          foreach($peticion_select as $archivo){
            echo "<div class='archivo'>
            <div class='cont-archivo' id='".$archivo['id_archivo']."'>

            ".$archivo['archivo']."
            <br>
            <span class='nombre-archivo-label'>".$archivo['nombre_archivo']."</span>

            <br>

            <div class='opciones-archivo'>
            <i class='fa fa-trash' id='btn-borrar-archivo' title='".$archivo['id_archivo']."' rel='".$archivo['tipo_archivo']."'></i>

            </div>

            </div>
            </div>
            ";

          }
          ?>






        </div>  
      </div>

    </div>

  </div>



</div>
<div class="confirmar_eliminar"></div>


<script>
  $(document).ready(function(){

    $(".fa-trash").click(function(){
      var id_archivo = $(this).attr("title");
      var ruta = $(this).parent().parent().children().attr("src");
      var tipo_archivo = $(this).attr("rel")
     
      
      alertify.confirm('Eliminar archivo multimedia', '¿Deseas eliminar este archivo recuerde que eliminara tambien todos los elementos creados con este archivo?', function(){ alertify.success('Archivo eliminado con exito');



        $.ajax({
                data:  { archivo_id:id_archivo , arg_ruta:ruta , tipo_archivo_arg:tipo_archivo}, //datos que se envian a traves de ajax
                url:   'eliminar_archivo', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                 $(".confirmar_eliminar").html(response);


                  //$(".confirmar_eliminar").load("archivos_multimedia.php");
                  //alert("Borrar");
                }
              });








      }
      , function(){ alertify.error('Cancel')});

      
    });
    
  });
</script>


</body>
</html>