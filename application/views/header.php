<!DOCTYPE html>
<html>
<head>
	<title>Plantilla</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <!-- <script type="text/javascript">
      function AbrirVista($vista){
        var ruta=$vista;

          if(ruta=="home"){
            $("#vista").load('<?php echo base_url('inicio/index')?>'); // esta línea carga el contenido
          }
      }
    </script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
    <div class="bg-primary" style="height:50px;"></div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="<?php echo base_url('inicio/index');?>">FRIDA</a> -->
      </div>
     
      <!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url('listado/index');?>">LISTADO</a></li>
          <li><a href="<?php echo base_url('formulario/index');?>">REGISTRAR</a></li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menú 1 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="AbrirVista('home')">Opción 1</a></li>
              <li><a href="#">Opción 2</a></li>
              <li class="divider"></li>
              <li><a href="#">Opción 4</a></li>
              <li class="divider"></li>
              <li><a href="#">Opción 5</a></li>
            </ul>
          </li> -->
        </ul>
     
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>

      </div>
    </nav>

    <div id="vista"></div>

</body>
</html>