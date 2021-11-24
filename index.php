<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">

    <title>Turbo Portfolio Ratio</title>
  </head>
  <body>
    <?php require "menu.php" ?>
    <!-- Carousel avec projets -->
    <div id="carouselFirst" class="carousel carousel-slider">
      <div class="carousel-fixed-item center clearfix">
        <a id="carousel-prev" class="movePrevCarousel btn waves-effect left">←</a>
        <a id="carousel-next" class="moveNextCarousel btn waves-effect right">→</a>
      </div>
      <div class="carousel-item ">
        <a href="ef.php"><img class="img-responsive" src="img/ef-logo.png" alt="EntityFall logo"></a>
      </div>
      <div class="carousel-item">
        <a href="laby.php"><img class="img-responsive" src="img/laby-logo.png" alt="Labyrithe logo"></a>
      </div>
      <div class="carousel-item">
        <a href="p4.php"><img class="img-responsive" src="img/p4-logo.jpg" alt="Puissance 4 logo"></a>
      </div>
    </div>
    
    <!-- Présentations de créateurs -->
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <img src="img/pdp_Lucas.png" alt="photo de profil Lucas">
          </div>
          <div class="card-content">
            <h5>Lucas Vocanson</h5>
            <p>Eleve G.Tech 1 Gaming Campus</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <img src="img/pdp-raph.jpg" alt="photo de profil Raphaël">
          </div>
          <div class="card-content">
            <h5>Raphaël Mateescu</h5>
            <p>Eleve G.Tech 1 Gaming Campus</p>
          </div>
        </div>
      </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
