<!DOCTYPE html>
<html>
    <?php require "menu.php" ?>
    <!-- Carousel avec projets -->
    <div class="row">
      <div id="carouselFirst" class="col s12 l10 offset-l1 carousel carousel-slider">
        <div class="carousel-fixed-item center clearfix">
          <a id="carousel-prev" class="movePrevCarousel btn purple waves-effect left">←</a>
          <a id="carousel-next" class="moveNextCarousel btn purple waves-effect right">→</a>
        </div>
        <div class="carousel-item ">
          <a href="ef.php"><img class="img-responsive" src="img/ef-logo.png" alt="EntityFall bannière"></a>
        </div>
        <div class="carousel-item">
          <a href="laby.php"><img class="img-responsive" src="img/laby-logo.png" alt="Labyrithe bannière"></a>
        </div>
        <div class="carousel-item">
          <a href="p4.php"><img class="img-responsive" src="img/p4-logo.jpg" alt="Puissance 4 bannière"></a>
        </div>
      </div>
    </div>

    <?php require "footer.php" ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
