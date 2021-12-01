<!DOCTYPE html>
<html>
    <?php 
      require "menu.php";
      $id = $_GET['id'];
      $sql = "SELECT * FROM pages WHERE id = ".$id;
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $row) {
    ?>
    <!-- Header -->
    <div class="header">
      <h2 class="center"><?php echo $row['h1']; ?></h2>
      <img class="centered responsive-img" src="img/<?php if ($row['img_header']!='') echo $row['img_header']; else echo "placeholder.png"; ?>">
    </div>
    <div class="divider"></div>
    <!-- Description du projet -->
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <h3>Description du projet:</h3>
        <p class="justify flow-text">
          <?php echo $row['description']; ?>
        </p>
        <div class="divider"></div>
        <!-- TITLE 1 -->
        <h3><?php echo $row['title1']; ?></h3>
        <div class="section row">
          <img class="col s12 l6 responsive-img modal-trigger" src="img/<?php if ($row['img1']!='') echo $row['img1']; else echo "placeholder.png" ?>">
          <div class="col s12 l6">
            <h4><?php echo $row['title_desc1']; ?></h4>
            <p class="justify flow-text">
              <?php echo $row['desc1']; ?>
            </p>
          </div>
        </div>
        <div class="section row">
          <div class="col s12 l6">
            <h4><?php echo $row['title_desc2']; ?></h4>
            <p class="justify flow-text">
              <?php echo $row['desc2']; ?>
            </p>
          </div>
          <img class="col s12 l6 responsive-img" src="img/<?php if ($row['img2']!='') echo $row['img2']; else echo "placeholder.png" ?>">
        </div>
        <div class="section row">
          <img class="col s12 l6 responsive-img" src="img/<?php if ($row['img3']!='') echo $row['img3']; else echo "placeholder.png" ?>">
          <div class="col s12 l6">
            <h4><?php echo $row['title_desc3']; ?></h4>
            <p class="justify flow-text">
              <?php echo $row['desc3']; ?>
            </p>
          </div>
        </div>
        <div class="divider"></div>
        <!-- GALLERY -->
          <h3><?php echo $row['title_gallery']; ?></h3>
        <div class="section row">
          <img class="col s12 m6 l4 responsive-img modal-trigger" src="img/<?php echo ($row['gllry_img1']!='') ? $row['gllry_img1'] : "placeholder.png"; ?>">
          <img class="col s12 m6 l4 responsive-img modal-trigger" src="img/<?php echo ($row['gllry_img2']!='') ? $row['gllry_img2'] : "placeholder.png"; ?>">
          <img class="col s12 m6 l4 responsive-img modal-trigger" src="img/<?php echo ($row['gllry_img3']!='') ? $row['gllry_img3'] : "placeholder.png"; ?>">
          <img class="col s12 m6 l4 responsive-img modal-trigger" src="img/<?php echo ($row['gllry_img4']!='') ? $row['gllry_img4'] : "placeholder.png"; ?>">
          <img class="col s12 m6 l4 responsive-img modal-trigger" src="img/<?php echo ($row['gllry_img5']!='') ? $row['gllry_img5'] : "placeholder.png"; ?>">
          <img class="col s12 m6 l4 responsive-img modal-trigger" src="img/<?php echo ($row['gllry_img6']!='') ? $row['gllry_img6'] : "placeholder.png"; ?>">
        </div>
        <div class="divider"></div>
        <!-- TITLE 2 -->
        <h3><?php echo $row['title2']; ?></h3>
        <div class="section row">
          <img class="col s12 l6 responsive-img modal-trigger" src="img/<?php if ($row['img4']!='') echo $row['img4']; else echo "placeholder.png" ?>">
          <div class="col s12 l6">
            <h4><?php echo $row['title_desc4']; ?></h4>
            <p class="justify flow-text">
              <?php echo $row['desc4']; ?>
            </p>
          </div>
        </div>
        <div class="section row">
          <div class="col s12 l6">
            <h4><?php echo $row['title_desc5']; ?></h4>
            <p class="justify flow-text">
              <?php echo $row['desc5']; ?>
            </p>
          </div>
          <img class="col s12 l6 responsive-img" src="img/<?php if ($row['img5']!='') echo $row['img5']; else echo "placeholder.png" ?>">
        </div>
      </div>
    </div>

    <?php
      }
      require "footer.php"
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
