  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <?php require_once "config.php"; ?> 

    <title>Turbo Portfolio Ratio</title>
  </head>
  <body>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <div class="navbar-fixed">
      <nav> 
        <div class="nav-wrapper cyan darken-1">
          <a href="#" class="sidenav-trigger" data-target="mobile-nav">
            <i class="material-icons">menu</i>
          </a>
          <a href="index.php" class="brand-logo margin10px-left">Turbo Portfolio Ratio</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
              $sql = "SELECT id, title_navbar FROM pages ORDER BY title_navbar";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);
              foreach ($data as $row) {
                echo "<li><a href='projet.php?id=".$row['id']."'>".$row['title_navbar']."</a></li>"; 
              }
              if (isset($_SESSION['user'])) {
                echo '<a class="waves-effect waves-light purple btn dropdown-trigger" data-target="account">';
              } else {
                echo '<a class="waves-effect waves-light purple btn" href="account.php?mode=login">';
              } ?>
              Compte TPR - <?php echo isset($_SESSION['user']) ? $_SESSION['user']['username'] : "Se connecter"; ?>
            </a>
            <!-- Dropdown account -->
            <ul id='account' class='dropdown-content'>
              <li>
                <a class="modal-trigger" href="isadmin.php">
                  <?php
                    if (isset($_SESSION['user'])) {
                      echo 'Paramètres
                </a>
              </li>
              <li>
                <a href="dc.php">
                      Deconnexion';
                    } else {
                      echo 'Compte TPR';
                    } ?>
                </a>
              </li>
            </ul>
          </ul>
        </div>
      </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
      <?php
        $sql = "SELECT id, title_navbar FROM pages ORDER BY title_navbar";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
          echo "<li><a href='projet.php?id=".$row['id']."'>".$row['title_navbar']."</a></li>"; 
        }
      ?>
      <a class='dropdown-trigger waves-effect waves-light purple btn' data-target='dropdown1'>Parametres</a>
      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <?php if (isset($_SESSION['user'])){echo '
          <li><a><form action="dc.php">
            <button type="submit" class="modal-close">
              Deconnexion
            </button>
          </form></a></li>'
        ;} ?>
        <li>
          <a class="modal-trigger" href="isadmin.php">
            <?php
              if (isset($_SESSION['user'])) {
                echo $_SESSION['user']['username'];
              } else {
                echo "Compte TPR";
              }
            ?>
          </a>
        </li>
      </ul>
    </ul>
