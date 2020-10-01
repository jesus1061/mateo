<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_archivos();
//print_r($_POST);
extract($_POST);
$peticion_select_unico = $instancia -> consultar_programa_unico($elemento);
foreach($peticion_select_unico as $programa){

}
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

        <form action="editar_programa_datos" method="post" class="formulario">
          <div class="encabezado-formulario">
           Modificar Programa
         </div>


         <div class="form-control">
           <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Codigo del programa </label>
           <br>
           <br>
           <input type="text" class="input-form" name="elemento"   placeholder="Nombre del programa" id="nombre_programa" value="<?php echo $programa['programa_id'] ?>" readonly>


         </div>
         

         <div class="form-control">
           <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Nombre del programa <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
           <br>
           <br>
           <input type="text" class="input-form" name="titulo_programa"   placeholder="Nombre del programa" id="nombre" value="<?php echo $programa['titulo_programa'] ?>">


         </div>


         <div class="form-control">
           <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Contenido del programa <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
           <br>
           <br>
           <input type="text" id="contenido" value="<?php echo $programa['contenido_programa']; ?>" name="contenido_programa" style="width: 92%; height: 100px; resize:none">


         </div>






         <div class="form-control">
          <label for="" class="label-form">Cargar portada del programa</label>
          <br>
          <br>
          <input type="text" id="btn-abrir-multimedia" value="<?php echo $programa['portada_programa'] ?>" name="portada_programa"  placeholder="Seleccionar archivo multimedia" class="input-form"  style="background-color: gray; color: white; font-weight: 900; cursor: pointer" readonly>

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


       <input type="hidden" class="tipo-banner" name="tipo_portada" value="<?php echo $programa['tipo_portada'] ?>" >





       <center><input type="button" id="btn-activar-formulario" value="Editar Programa" style="display:block;"></center> 
     </form>
   </div>

 </div>

</div>



</div>
<script>
  $(document).ready(function(){

    var validacion_programa = 0;
    /*Abre los archivos multimedia para su posterior elección*/
    $("#btn-abrir-multimedia").click(function(){
      $(".container-imagenes").css("display","table");
    });


    $(".img-archivo").each(function(){
      var tipo_banner = $(this).attr("id");


      if(tipo_banner == "ii"){
        var ruta_sistema = $(this).attr("src");
        var ruta_visualizacion = "../"+ruta_sistema;
        $(this).attr("src",ruta_visualizacion);
      }
    });

    $(".img-archivo").click(function(){
      var tipo_banner = $(this).attr("id");
      $(".tipo-banner").val(tipo_banner);
      if(tipo_banner == "ii"){
        var ruta_seleccionada = $(this).attr("src");
        var ruta_convertida = ruta_seleccionada.slice(3);
        $("#btn-abrir-multimedia").val(ruta_convertida);
        validacion_programa = 1;
      } else{
       var ruta_seleccionada = $(this).attr("src");
       $("#btn-abrir-multimedia").val(ruta_seleccionada);
       validacion_programa = 1;
     }

   });


    $("#btn-activar-formulario").click(function(){
      if($("#nombre").val().length < 1  ||  $("#contenido").val().length <  1){
        alert("Por favor dilifenciar los datos correctamente");
      } else{
        /*Fin de validación*/
        $("#btn-activar-formulario").attr("type","submit");

      }
    });


  });
</script>





</body>
</html>