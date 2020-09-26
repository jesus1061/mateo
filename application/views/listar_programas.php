<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Listar programas</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="favicon_16.ico"/>
  <link rel="bookmark" href="favicon_16.ico"/>
  <!-- site css -->
  <link rel="stylesheet" href="../plantilla_back/css/site.min.css">
    <link rel="stylesheet" href="../plantilla_back/css/personalizacion.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
  <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../plantilla_back/js/site.min.js"></script>
     <script type="text/javascript" src="../plantilla_back/js/jquery-3.5.1.min"></script>
    <script type="text/javascript" src="../plantilla_back/js/mateo2.js"></script>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
          <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Bootflat-Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="getting-started.html">Getting Started</a></li>
            <li class="active"><a href="index.html">Documentation</a></li>
            <!-- <li class="disabled"><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Silverbux <b class="caret"></b></a>
              <ul role="menu" class="dropdown-menu">
                <li class="dropdown-header">Setting</li>
                <li><a href="#">Action</a></li>
                <li class="divider"></li>
                <li class="active"><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li class="disabled"><a href="#">Signout</a></li>
              </ul>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--header-->
    <div class="container-fluid" >
      <!--documents-->
      <div class="row row-offcanvas row-offcanvas-left" >
       

<?php
include_once "siderbar.php";
?>

          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Modulo para  banners</h3>
              </div>
              <div class="panel-body">










                <div class="content-row">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Formulario para creación de un banner</b>
                      </div>

                      <div class="panel-options">
                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                      </div>
                    </div>

                    <div class="panel-body">
                      <form role="form">
                        <div class="form-group">
                          <label>Nombre del banner</label>
                          <input type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>Descripcion</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Seleccione archivo para su banner</label>

                          <p class="help-block" style="color:red; font-weight: 900;">Dar click para cargar los archivos que utilizara.</p>
                          <input type="text" placeholder="Click para seleccionar un archivo" disabled="" class="form-control">
                        </div>

                        <div class="form-group">
                         <label for="exampleInputFile">Tipo de archivo a cargar al servidor</label>
                         
                         
                         <select name="selecter_basic" class="selecter_3" data-selecter-options='{"cover":"true"}'>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                          <option value="5">Five</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-success">Crear banner</button>
                    </form>
                  </div>
                </div>

              </div>

















            </div><!-- panel body -->
          </div>
        </div><!-- content -->
      </div>
    </div>
    <!--footer-->
    
  </body>
  </html>
