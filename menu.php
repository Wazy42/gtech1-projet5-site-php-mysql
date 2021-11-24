    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <div class="navbar-fixed">
      <nav> 
        <div class="nav-wrapper">
          <a href="#" class="sidenav-trigger" data-target="mobile-nav">
            <i class="material-icons">menu</i>
          </a>
          <a href="index.php" class="brand-logo margin10px-left">Turbo Portfolio Ratio</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="ef.php">EntityFall</a></li>
            <li><a href="laby.php" >Labyrinthe</a></li>
            <li><a href="p4.php">Puissance 4</a></li>
            <li><a class="waves-effect waves-light btn modal-trigger" href="#signinup">Compte TPR</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
      <li><a href="ef.php">EntityFall</a></li>
      <li><a href="laby.php">Labyrinthe</a></li>
      <li class="active"><a href="p4.php">Puissance 4</a></li>
      <li><a class="waves-effect waves-light btn modal-trigger" href="#signinup">Compte TPR</a></li>
    </ul>

    <!-- Modal formulaire connexion -->
    <div id="signinup" class="modal">
      <div class="modal-content">
        <div class="row">
          <form class="col s12" method="post" action="login.php">
            <div class="row">
              <div class="input-field col s12 l6">
                <input id="last_name" type="text" name="email" class="validate">
                <label for="last_name">E-mail</label>
              </div>
              <div class="input-field col s12 l6">
                <input id="first_name" type="password" name="password" class="validate">
                <label for="first_name">Mot de passe-passe</label>
              </div>
            </div>
            <div class="modal-footer">
                <a href="" class="modal-close waves-effect waves-green btn-flat left">Pas de compte ?</a>
                <button type="submit" class="modal-close waves-effect waves-green btn-flat">Se connecter</button>
            </div>
          </form>
        </div>
      </div>
    </div>