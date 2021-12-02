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
                echo '<li><a class="waves-effect waves-light purple btn dropdown-trigger" data-target="account">';
              } else {
                echo '<li><a class="waves-effect waves-light purple btn" href="account.php?mode=login">';
              } ?>
              Compte TPR - <?php echo isset($_SESSION['user']) ? $_SESSION['user']['username'] : "Se connecter"; ?>
            </a></li>
            <li>
              <a class="modal-trigger waves-effect waves-light purple btn" href="#contact">Nous contacter</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

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

    <!-- Modal formulaire contact -->
    <div id="contact" class="modal">
      <div class="modal-content">
        <div class="row">
          <form class="col s12" method="post" action="mail.php">
            <div class="row">
              <div class="input-field col s6">
                <input name="first_name" type="text" class="validate">
                <label for="first_name">Prénom</label>
              </div>
              <div class="input-field col s6">
                <input name="last_name" type="text" class="validate">
                <label for="last_name">Nom</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea name="msg" type="text"></textarea>
                <label for="msg">Votre message</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="mail" type="text" class="validate">
                <label for="mail">E-mail</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <ul id="mobile-nav" class="sidenav">
      <?php
        $sql = "SELECT id, title_navbar FROM pages ORDER BY title_navbar";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
          echo "<li><a href='projet.php?id=".$row['id']."'>".$row['title_navbar']."</a></li>"; 
        }
        if (isset($_SESSION['user'])) {
          echo '<li><a class="waves-effect waves-light purple btn dropdown-trigger" data-target="account">';
        } else {
          echo '<li><a class="waves-effect waves-light purple btn" href="account.php?mode=login">';
        } ?>
        Compte TPR - <?php echo isset($_SESSION['user']) ? $_SESSION['user']['username'] : "Se connecter"; ?>
      </a></li>
      <li>
        <a class="modal-trigger waves-effect waves-light purple btn" href="#contact">Nous contacter</a>
      </li>
    </ul>
