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
        <div id="formulario-archivos">

          <div class="archivos-subida">
            <form action="subir_imagen_interna" enctype="multipart/form-data" method="post">
              <div class="encabezado-formulario">
                Formulario para subir imagenes internas al servidor
              </div>
              <div class="form-group">
                <br>
                <br>

                <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Nombre de la imagen a subir <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
                <br><br>
                <input type="text" class="nombre_archivo campos-archivo" placeholder="Nombre del archivo" id="nombre_imagen_interna" name="nombre_archivo">

                
              </div>

              <div class="form-group">
                <br>
                <br>

                <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Tipo de archivo</label>
                <br><br>
                <input type="text" class="nombre_archivo campos-archivo" value="ii" readonly name="tipo_archivo" >

                
              </div>

              <div class="form-group">
                <br>
                <br>

                <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Archivo <span style="color:red; font-weight:900;">(Seleccione 1 imagen de su equipo a cargar)</span> </label>
                <br><br>
                <input type="text" class="nombre_archivo campos-archivo" readonly style="cursor:pointer; background-color: gray; color:white; border:none; font-weight: 900;" value="--Seleccione una imagen--" id="activar-file">
                <input type="file" style="display:none" id="file" name="archivo">
                
              </div>


              <div class="form-group">


                <br>
                <button type="button" class="nombre_archivo campos-archivo" style="cursor: pointer"  id="btn-subir-interna">Subir</button>
                <br><br>
              </div>
            </form>
          </div>  
        </div>

      </div>

    </div>


    
  </div>


  <script>
    $(document).ready(function(){


      var campo_ruta =0;


      //Validaciones previas para activar el formulario

      $("#activar-file").click(function(){
        $("#file").click();
      });


      $("#file").change(function(){
        var ruta_inicial = $(this).val();
        $("#activar-file").val(ruta_inicial);
        campo_ruta = 1;
      });

      $("#btn-subir-interna").click(function(){
        if($("#nombre_imagen_interna").val().length < 1){
          alert("Falta llenar el nombre de la imagen interna");
        } else{


          if(campo_ruta == 0){
            alert("Falta la ruta de la imagen interna");
          } else{
           


           $("#btn-subir-interna").attr("type","submit");



          }


        }
      });

      


    });
  </script>
  

</body>
</html>