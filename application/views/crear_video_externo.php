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
            <form action="subir_video_externo" enctype="multipart/form-data" method="post">
              <div class="encabezado-formulario">
                Formulario para subir videos externos al servidor
              </div>
              <div class="form-group">
                <br>
                <br>

                <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Nombre de video subir <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
                <br><br>
                <input type="text" class="nombre_archivo campos-archivo" placeholder="Nombre del video" id="nombre_imagen_interna" name="nombre_archivo" required>

                
              </div>

              <div class="form-group">
                <br>
                <br>

                <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Tipo de archivo</label>
                <br><br>
                <input type="text" class="nombre_archivo campos-archivo" value="ve" readonly name="tipo_archivo" required >

                
              </div>

              <div class="form-group">
                <br>
                <br>

                <label for="" class="label-archivo campos-archivo" style="color:black; font-weight:900;">Url del IFRAME de youtube <span style="color:red; font-weight:900;">(Este campo es obligatorio que lo llenes)</span> </label>
                <br><br>
                <input type="text" class="nombre_archivo campos-archivo" placeholder="URL de la imagen externa" id="nombre_imagen_interna" name="archivo" required>

                
              </div>




              <div class="form-group">


                <br>
                <button type="submit" class="nombre_archivo campos-archivo" style="cursor: pointer"  id="btn-subir-interna">Subir</button>
                <br><br>
              </div>
            </form>
          </div>  
        </div>

      </div>

    </div>


    
  </div>


  
  

</body>
</html>