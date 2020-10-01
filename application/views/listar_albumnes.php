<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_albumnes();


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mateo</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  
  <link rel="stylesheet" href="../plantilla_back/css/personalizacion.css">
  
  <script type="text/javascript" src="../plantilla_back/js/jquery.js"></script>
  <script src="../plantilla_back/js/mateo2.js"></script>
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

        <div class="contenedor-tabla">
          <div class="encabezado-formulario">
            Listado de albumnes
          </div>
          <div class="table" id="encabezado_tabla">
            <div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Titulo del banner</label></div>
            <div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Contenido</label></div>
            <div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Opciones</label></div>

          </div>
          <div class="table" id="resultados">
            <?php
            foreach($peticion_select as $album){
              echo '<div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Titulo del banner</label></div>';
              echo '<div class="column-table-banner"><label style="margin:auto;">'.$album['album_titulo'].'</label></div>
              <div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Contenido</label></div>
              <div class="column-table-banner"><img id="'.$album['tipo_portada'].'" src="'.$album['album_portada_principal'].'" class="img-archivo"></div>
              <div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Opciones</label></div>
              <div class="column-table-banner"><i class="fa fa-pencil btn-editar" id="'.$album['album_id'].'" style="color:orange; cursor:pointer; margin:auto;" id="btn-editar"></i><i class="fa fa-trash btn-eliminar-slider" id="'.$album['album_id'].'" style="color:red; cursor:pointer; margin:auto;"></i></div>
              ';
            }


            ?>

          </div>

          <form action="editar_album" method="post" style="display: none;">
            <input type="hidden" name="elemento" class="elemento">
            <input type="submit" class="btn-editar-consulta">
          </form>
        </div>


      </div>

    </div>



  </div>


  <script>
    $(document).ready(function(){
     $(".img-archivo").each(function(){
      var tipo_banner = $(this).attr("id");


      if(tipo_banner == "ii"){
        var ruta_sistema = $(this).attr("src");
        var ruta_visualizacion = "../"+ruta_sistema;
        $(this).attr("src",ruta_visualizacion);
      }
    });


     $(".btn-editar").click(function(){
      var id = $(this).attr("id");
      $(".elemento").val(id);
      $(".btn-editar-consulta").click();
      



    });


   });

 </script>




</body>
</html>