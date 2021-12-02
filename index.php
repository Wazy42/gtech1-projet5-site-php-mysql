<!DOCTYPE html>
<html>
    <?php require "menu.php" ;?>
    <!-- Carousel avec projets -->
    <div class="row">
      <div id="carouselFirst" class="col s12 l10 offset-l1 carousel carousel-slider">
        <div class="carousel-fixed-item center clearfix">
          <a id="carousel-prev" class="movePrevCarousel btn purple waves-effect left">←</a>
          <a id="carousel-next" class="moveNextCarousel btn purple waves-effect right">→</a>
        </div>
        <?php 
          $sql = "SELECT img_header, id FROM pages ORDER BY title_navbar";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $data = $pre->fetchAll(PDO::FETCH_ASSOC);
          foreach ($data as $row) { echo '
          <div class="carousel-item">
            <a href="projet.php?id='.$row['id'].'"><img class="img-responsive" src="img/'.$row['img_header'].'"></a>
          </div>
        ';}?>
      </div>
    </div>

    <?php require "footer.php" ;?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
