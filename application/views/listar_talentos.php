<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_personal();

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
            Listado de funcionarios
          </div>
          <div class="table" id="encabezado_tabla">
            <div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Nombre funcionario</label></div>
            <div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Foto</label></div>
            <div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Opciones</label></div>

          </div>
          <div class="table" id="resultados">
            <?php
            foreach($peticion_select as $personal){
              echo '<div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Titulo del banner</label></div>';
              echo '<div class="column-table-banner"><label style="margin:auto;">'.$personal['personal_nombre'].'</label></div>
              <div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Foto</label></div>
              <div class="column-table-banner"><img id="'.$personal['tipo_portada'].'" src="'.$personal['personal_foto'].'" class="img-archivo" style="width:40%;"></div>
              <div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Opciones</label></div>
              <div class="column-table-banner"><i class="fa fa-pencil btn-editar " id="'.$personal['personal_id'].'" style="color:orange; cursor:pointer; margin:auto;"></i><i class="fa fa-trash btn-eliminar-slider" id="'.$personal['personal_id'].'" style="color:red; cursor:pointer; margin:auto;"></i></div>
              ';
            }


            ?>

          </div>

          <form action="editar_personal" method="post" style="display: none;">
            <input type="hidden" name="elemento" class="elemento">
            <input type="submit" class="btn-editar-consulta">
          </form>
        </div>


      </div>

    </div>

<div class="confirmar_eliminar">
  
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
     // alert(id);

     $(".elemento").val(id);

     $(".btn-editar-consulta").click();




   });


     $(".fa-trash").click(function(){
      var id_archivo = $(this).attr("id");
      alertify.confirm('Eliminar funcionario', '¿Deseas eliminar este funcionario?', function(){ alertify.success('Funcionario eliminado con exito');



        $.ajax({
                data:  { archivo_id:id_archivo}, //datos que se envian a traves de ajax
                url:   'eliminar_talento', //archivo que recibe la peticion
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