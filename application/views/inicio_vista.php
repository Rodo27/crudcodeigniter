<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body>
 <?php
  $this->load->view('header');
  ?> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover"> <!-- //clase carousel y slide es la transicion(se puede omitir), data-ride para iniciar en automatico la animacion(se puede omitir)-->
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li> <!-- data target apunta al id del carrusel -->
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url('assests/images/1.jpg')?>" alt="1">
        <div class="carousel-caption">
        <h3>Star Wars</h3>
        <p>Thank you!</p>
      </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url('assests/images/1.jpg')?>" alt="2">
      </div>

      <div class="item">
        <img src="<?php echo base_url('assests/images/1.jpg')?>" alt="3">
      </div>
    </div>

  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- menu con tabs -->
  <div class="container">
      <h2>Tabs Dynamicas</h2>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#historia">HISTORIA</a></li>
        <li><a data-toggle="tab" href="#episodio1">EPISODIO I</a></li>
        <li><a data-toggle="tab" href="#episodio2">EPISODIO II</a></li>
      </ul>

      <div class="tab-content">
        <div id="historia" class="tab-pane fade in active">
        <h3>RESEÑA</h3>
          <PRE>
            <p>La Guerra de las Galaxias, es una franquicia compuesta de películas, novelas, cómics, videojuegos y juguetes. 
            Es un universo de ficción creado por George Lucas.
            La historia de Star Wars utiliza arquetipos comunes a la ciencia ficción, climax político y mitología,
            así como temas musicales de estos aspectos.</p>

            <p>Siendo uno de los ejemplos más importantes de la space opera (subgénero de ciencia ficción) 
            Star Wars se ha convertido en una parte esencial de la cultura popular,
            así como una de las películas de mayor recaudación en taquilla de todos los tiempos
            y una de las mas aclamadas por el público en general.</p>
          </PRE>

        </div>
        <div id="episodio1" class="tab-pane fade">
           <h3>LA AMENAZA FANTASMA</h3>
            <PRE>
            <p>LA AMENAZA FANTASMA
            La República Galáctica está
            sumida en disturbios. Hay
            protestas contra la tributación
            de las rutas comerciales a
            sistemas estelares.</p>
            <p>Esperando resolver el problema
            con un bloqueo de mortíferos
            cruceros, la avariciosa
            Federación de Comercio ha
            detenido todos los envios al
            pequeño planeta de Naboo.</p>
            <p>Mientras el Congreso de la
            República debate sin fin
            esta alarmante cadena de
            acontecimientos, el Canciller
            Supremo ha despachado en
            secreto a dos Caballeros Jedi,
            los guardianes de la paz y la
            justicia en la galaxia, a resolver
            el conflicto…</p>
            </PRE>  
        </div>
        <div id="episodio2" class="tab-pane fade">
            <h3>EL ATAQUE DE LOS CLONES</h3>
              <PRE><p>Hay inquietud en el Senado
              Galáctico. Varios miles de
              sistemas solares han declarado
              sus intenciones de abandonar 
              la República.</p>

              <p>El movimiento separatista,
              bajo el liderazgo del misterioso
              Conde Dooku, ha hecho difícil
              que el número limitado de 
              Caballeros Jedi mantengan la 
              paz y el orden en la galaxia.</p>

              <p>La Senadora Amidala, la ex
              reina de Naboo, va a regresar 
              al Senado Galáctico para 
              votar sobre la cuestión crítica 
              de formar un EJÉRCITO DE 
              LA REPÚBLICA para ayudar a 
              los abrumados Jedi…</p>
            </PRE>
        </div>
      </div>
  </div>
  <!-- termina menu con tabs -->

  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
 <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  </body>
</html>
