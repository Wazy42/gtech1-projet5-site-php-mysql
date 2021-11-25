<!DOCTYPE html>
<html>
<?php require "menu.php" ?>
<!-- Modal formulaire connexion -->
    <div class="row">
      <div id="signinup" class="col s12 l8 offset-l2">
        <div class="modal-content">
          <div class="row">
            <h3>Connexion à votre compte TPR:</h3>
            <div class="divider"></div>
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
                <div id="signup" class="input-field col s12 l6 hide">
                  <input id="username" type="text" name="email" class="validate">
                  <label for="last_name">Nom d'utilisateur</label>
                </div>
                <button type="submit" class="modal-close waves-effect waves-green btn-flat">Se connecter</button>
                <button id="switch" onclick="on_off(signup)" class="modal-close waves-effect waves-green btn-flat">Quoi ? Tu n'a pas de compte TPR ??!</button>
              </form>
            </div>
          </div> 
        </div>
      </div>
    </div>  
  </body>
</html>