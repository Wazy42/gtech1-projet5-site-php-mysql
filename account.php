<!DOCTYPE html>
<html>
<?php require "menu.php" ?>
    <div class="row">
      <!-- Modal formulaire connexion -->
      <div id="signinup" class="col s12 l8 offset-l2 <?php if (isset($_SESSION['user'])) {echo "hide";}?>">
        <div class="modal-content">
          <div class="row">
            <h3>Connexion à votre compte TPR:</h3>
            <div class="divider"></div>
            <form class="col s12" method="post" action=<?php
              if (isset($_GET['mode']) && $_GET['mode'] == 'signup') {
                echo "'signup.php'";
              } else {
                echo "'login.php'";
              }
            ?>>
              <div class="row">
                <div class="input-field col s12 l6">
                  <input placeholder="yuumi@gmail.com" id="email" type="email" name="email" class="validate" />
                  <label class="active" for="email">E-mail</label>
                </div>
                <div class="input-field col s12 l6">
                  <input placeholder="Mot de passe" id="password" type="password" name="password" class="validate" />
                  <label class="active" for="password">Mot de passe-passe</label>
                </div>
                <div class="input-field col s12 l6 <?php if ((isset($_GET['mode']) && $_GET['mode'] != 'signup') || !isset($_GET['mode'])) {echo "hide";}?>">
                  <input placeholder="Yuumi pro-player" id="username" type="text" name="username" class="validate" />
                  <label class="active" for="last_name">Nom d'utilisateur</label>
                </div>
                <div class="input-field col s12 l6 <?php if ((isset($_GET['mode']) && $_GET['mode'] != 'signup') || !isset($_GET['mode'])) {echo "hide";}?>">
                  <input placeholder="Confirmation du mot de passe" id="password2" type="password" name="password2" class="validate" />
                  <label class="active" for="password2">Confirmation mot de passe-passe</label>
                </div>
              </div>
              <a href="account.php?mode=<?php
                  if (isset($_GET['mode']) && $_GET['mode'] == 'signup') {
                    echo "login";
                  } else {
                    echo "signup";
                  }
                ?>" class="modal-close waves-effect waves-green btn-flat left"> <?php
                if (isset($_GET['mode']) && $_GET['mode'] == 'signup') {
                  echo "J'ai déja un compte TPR";
                } else {
                  echo "Je n'ai pas de compte TPR";
                }
              ?></a>
              <button type="submit" class="modal-close waves-effect waves-green btn-flat right">
                <?php
                  if (isset($_GET['mode']) && $_GET['mode'] == 'signup') {
                    echo "S'inscire";
                  } else {
                    echo "Se connecter";
                  }
                ?>
              </button>
            </form>
          </div> 
        </div>
      </div>
      <!-- Connecté -->
    <div class="col s12 l10 offset-l1 <?php if (!isset($_SESSION['user'])) {echo "hide";}?>">
      <div class="row">
        <h2 class="col s10 offset-s1 center">Bonjour <?php echo $_SESSION['user']['username']?> !</h2>
        <form class="col s12" action="dc.php">
          <button type="submit" class="modal-close waves-effect waves-green btn-flat">
            Se déconnecter
          </button>
        </form>
      </div>
    </div>
  </body>
</html>