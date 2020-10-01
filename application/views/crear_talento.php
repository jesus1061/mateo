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

        <form action="crear_talento" method="post" class="formulario">
          <div class="encabezado-formulario">
           Creación de Funcionarios
         </div>
         

         <div class="form-control">
           <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Nombre del Funcionario <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
           <br>
           <br>
           <input type="text" class="input-form" name="personal_nombre"   placeholder="Nombre del funcionario" id="nombre_personal">


         </div>


         <div class="form-control">
           <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Cargo<span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
           <br>
           <br>
           <input type="text" class="input-form" name="personal_cargo"   placeholder="Cargo del funcionario" id="cargo_personal">


         </div>


         <div class="form-control">
           <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Perfil profesional <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
           <br>
           <br>
           <textarea id="perfil_profesional" name="perfil_profesional" style="width: 92%; height: 100px; resize:none" placeholder="Perfil profesional"></textarea>


         </div>






         <div class="form-control">
          <label for="" class="label-form">Cargar Foto del perfil</label>
          <br>
          <br>
          <input type="text" id="btn-abrir-multimedia" name="portada_foto"  placeholder="Seleccionar archivo multimedia" class="input-form"  style="background-color: gray; color: white; font-weight: 900; cursor: pointer" readonly>

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


       <div class="form-control">
         <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Link facebook<span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
         <br>
         <br>
         <input type="text" class="input-form" name="link_facebook"   placeholder="Link facebook" id="facebook">


       </div>

       <div class="form-control">
         <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Link instagram<span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
         <br>
         <br>
         <input type="text" class="input-form" name="link_instagram"   placeholder="link instagram" id="instagram">


       </div>

       <div class="form-control">
         <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Link twitter<span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
         <br>
         <br>
         <input type="text" class="input-form" name="link_twitter"   placeholder="Link twitter" id="twitter">


       </div>

       <input type="hidden" class="tipo-banner" name="tipo_portada" >





       <center><input type="button" id="btn-activar-formulario" value="Crear Funcionario" style="display:block;"></center> 
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
      if($("#nombre_personal").val().length < 1  ||  $("#cargo_personal").val().length <  1 ||   $("#perfil_profesional").val().length <  1  ||   $("#facebook").val().length <  1 ||   $("#instagram").val().length <  1 ||   $("#twitter").val().length <  1  || validacion_programa == 0 ){
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