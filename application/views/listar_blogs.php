<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_publicaciones();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mateo</title>
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

        <div class="contenedor-tabla">
          <div class="encabezado-formulario">
            Listado de publicaciones en el blog
          </div>
          <div class="table" id="encabezado_tabla">
            <div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Titulo de la publicación</div>
            <div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Fecha publicación</div>
            <div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">contenido</div>
            <div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Opciones</div>
          </div>
          <div class="table" id="resultados">
            <?php
            foreach($peticion_select as $blog){
              echo '<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Titulo de la publicación</div>';
              echo '<div class="column-table-contenido-pub"><label style="margin:auto">'.$blog['titulo_pub'].'</label></div>
              <div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Fecha publicación</div>
              <div class="column-table-contenido-pub"><label style="margin:auto">'.$blog['fecha_pub'].'</label></div>
              <div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Contenido</div>
              <div class="column-table-contenido-pub"><textarea style="width:90%; margin:auto; resize:none; height:80%;" readonly>'.$blog['contenido_pub'].'</textarea></div>
              <div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Opciones</div>
              <div class="column-table-contenido-pub"> <i class="fa fa-pencil btn-editar" id="'.$blog['blog_id'].'" style="margin:auto; color:orange; cursor:pointer;"></i><i class="fa fa-trash btn-eliminar-blog" id="'.$blog['blog_id'].'" style="margin:auto; color:red; cursor:pointer;"></i></div>';
            }

            ?>
            <form action="editar_blog" method="post" style="display:none">
              <input type="hidden" class="elemento" name="blog_id">
              <input type="submit" class="btn-editar-consulta">
            </form>


          </div>
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



     $(".fa-trash").click(function(){
      var id_archivo = $(this).attr("id");
    // alert(id_archivo);

     alertify.confirm('Eliminar publicación', '¿Deseas eliminar este banner?', function(){ alertify.success('Banner eliminado con exito');


       $.ajax({
                data:  { archivo_id:id_archivo}, //datos que se envian a traves de ajax
                url:   'eliminar_elemento', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                 // $(".confirmar_eliminar").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                 //$(".confirmar_eliminar").html(response);


                 // $(".confirmar_eliminar").load("archivos_multimedia.php");
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