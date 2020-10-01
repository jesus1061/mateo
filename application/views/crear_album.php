<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_archivos();

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
       <div  id="formulario-blog">

        <form action="crear_album_registro" method="post" class="formulario">
          <div class="encabezado-formulario">
           Crear albúm
         </div>
         

         <div class="form-control">
          <label for="" class="label-form">Titulo del albúm</label>
          <br>
          <br>
          <input type="text" class="input-form" id="album"  name="album_titulo" placeholder="Titulo para el albúm" required>


        </div>
        





        <div class="form-control">
          <label for="" class="label-form">Cargar portada principal a utilizar</label>
          <br>
          <br>
          <input type="text" id="btn-abrir-multimedia" name="album_portada_principal"  placeholder="Seleccionar archivo multimedia"   required  class="input-form"  style="background-color: gray; color: white; font-weight: 900; cursor: pointer" readonly>

          <div class="container-imagenes" style="display:none;">
           <div class="archivos" style="display:table;">
            <?php
            foreach($peticion_select as $archivo){
              echo "<div class='archivo'>
              <div class='cont-archivo' id='".$archivo['id_archivo']."' title=''>

              ".$archivo['archivo']."
              <br>
              <span class='nombre-archivo-label'> ".$archivo['nombre_archivo']."</span>

              <br>
              <div class='opciones-archivo'>


              </div>
              </div>
              </div>";
            }
            echo '  <script>

            $(".cont-archivo .img-archivo").each(function(){
              var tipo = $(this).attr("id");
              if(tipo == "ve"){
                $(this).parent().remove();
              }
              if(tipo == "ii"){
               var ruta_sistema = $(this).attr("src");


               var ruta_visual = ruta_sistema.substr(3);
               $(this).attr("src",ruta_visual);

               

             }





             });

             </script>';
             ?>








           </div>
         </div>


       </div>


       <input type="hidden" class="tipo-banner" name="tipo_portada" >





       <center><input type="button" id="btn-activar-formulario" value="Crear album" style="display:block;"></center> 
     </form>
   </div>

 </div>

</div>



</div>
<script>
  $(document).ready(function(){

    var validacion_banner = 0;
    /*Abre los archivos multimedia para su posterior elección*/
    $("#btn-abrir-multimedia").click(function(){
      $(".container-imagenes").css("display","table");
    });

     $(".img-archivo").click(function(){
      var tipo_banner = $(this).attr("id");
      $(".tipo-banner").val(tipo_banner);
      if(tipo_banner == "ii"){
        var ruta_seleccionada = $(this).attr("src");
        var ruta_convertida = ruta_seleccionada.slice(3);
        $("#btn-abrir-multimedia").val(ruta_convertida);
        validacion_banner = 1;
      } else{
       var ruta_seleccionada = $(this).attr("src");
       $("#btn-abrir-multimedia").val(ruta_seleccionada);
     }

   });


    $("#btn-activar-formulario").click(function(){
      if($("#album").val().length < 1  || validacion_banner == 0){
        alert("Por favor dilifenciar los datos correctamente");
      } else{
        /*Fin de validación*/
        $("#btn-activar-formulario").attr("type","submit");

      }
    });

    $(".img-archivo").each(function(){
      var tipo_banner = $(this).attr("id");


      if(tipo_banner == "ii"){
        var ruta_sistema = $(this).attr("src");
        var ruta_visualizacion = "../"+ruta_sistema;
        $(this).attr("src",ruta_visualizacion);
      }
    });
  });
</script>





</body>
</html>