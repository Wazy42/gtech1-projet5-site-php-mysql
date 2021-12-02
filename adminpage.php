<!DOCTYPE html>
<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
  exit();
}
?>
<html>
<?php require "menu.php" ?>
    <h1 class="center"> PAGE ADMIN </h1>
    <div class="divider"></div>
    <div class="row">
      <div class="col s12 l10 offset-l1">
        <h2>Modifications BDD:</h2>
        <table>
          <thead>
            <tr>
                <th>Identifiant (id)</th>
                <th>Nom d'utilisateur (username)</th>
                <th>Adresse mail (email)</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT id, username, email, password FROM user WHERE id != 1 ORDER BY id";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);
              foreach ($data as $row) {
                echo '
                <tr>
                  <td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['email'].'</td>
                  <td>
                  <form method="post" action="delete.php" onsubmit="return confirm(\'Êtes vous sur de vouloir supprimer cet utilisateur ? \nCette action est irréversible.\');">
                    <input type="hidden" name="table" value="user">
                    <input type="hidden" name="id" value="'.$row['id'].'">
                    <button type="submit" class="modal-close waves-effect waves-light btn purple">
                      Supprimer
                    </button>
                    <button type="button" class="modal-close waves-effect waves-light btn purple" onclick="HideSwitch(\'form-user-'.$row['id'].'\')">
                      Modifier
                    </button>
                  </form>
                  </td>
                </tr>
                <tr class="hide" id="form-user-'.$row['id'].'">
                  <td colspan=4>
                    <h6>Modification des données de l\'utilisateur:</h6>
                    <form method="post" action="modifyuser.php" onsubmit="return confirm(\'Êtes vous sur de vouloir modifier les données de cet utilisateur ? \nCette action est irréversible.\');>
                      <div class="input-field">
                        <input name="username" value="'.$row['username'].'">
                        <label class="active" for="username">Nom d\'utilisateur</label>
                      </div>
                      <div class="input-field">
                        <input name="email" value="'.$row['email'].'">
                        <label class="active" for="email">E-mail</label>
                      </div>
                      <div class="input-field">
                        <input type="password" name="password">
                        <label for="password"Mmot de passe passe</label>
                      </div>
                      <input type="hidden" name="id" value="'.$row['id'].'">
                      <button type="submit" class="modal-close waves-effect waves-light btn purple">
                        Appliquer
                      </button>
                      <button type="reset" class="modal-close waves-effect waves-light btn purple" onclick="HideSwitch(\'form-user-'.$row['id'].'\')">
                        Annuler et fermer
                      </button>
                    </form>
                  </td>
                </tr>';
              }
            ?>
          </tbody>
        </table>
        <h2>Modifications Projets:</h2>
        <table>
          <thead>
            <tr>
                <th>Identifiant (id)</th>
                <th>Nom du projet</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM pages ORDER BY title_navbar";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);
              foreach ($data as $row) {
                echo '
                <tr>
                  <td>'.$row['id'].'</td><td>'.$row['title_navbar'].'</td>
                  <td>
                    <form method="post" action="delete.php" onsubmit="return confirm(\'Etes vous sûr de vouloir supprimer cet utilisateur?(action irreversible)\');">
                      <input type="hidden" name="table" value="pages">
                      <input type="hidden" name="id" value="'.$row['id'].'">
                      <button type="submit" class="modal-close waves-effect waves-light btn purple">
                        Supprimer
                      </button>
                      <button type="button" class="waves-effect waves-light btn purple" onclick="HideSwitch(\'form-project-'.$row['id'].'\')">
                        Modifier
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td colspan=3>
                    <form class="hide" method="post" action="modifypage.php" id="form-project-'.$row['id'].'">
                      <div class="input-field">
                        <input name="title_navbar" value="'.$row['title_navbar'].'">
                        <label class="active" for="title_navbar">Nom de l\'onglet</label>
                      </div>
                      <div class="input-field">
                        <input name="h1" value="'.$row['h1'].'">
                        <label class="active" for="h1">Titre</label>
                      </div>
                      <div class="input-field">
                        <input name="img_header" value="'.$row['img_header'].'">
                        <label class="active" for="img_header">Image-titre</label>
                      </div>
                      <div class="input-field">
                        <textarea name="description">'.$row['description'].'</textarea>
                        <label class="active" for="description">Description du projet</label>
                      </div>
                      <div class="input-field">
                        <input name="title1" value="'.$row['title1'].'">
                        <label class="active" for="title1">Titre prtie 1</label>
                      '; for ($i=1; $i<4; $i++) { echo '
                      </div>
                      <div class="input-field">
                        <input name="img'.$i.'" value="'.$row['img'.$i].'">
                        <label class="active" for="img'.$i.'">Image '.$i.'</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc'.$i.'" value="'.$row['title_desc'.$i].'">
                        <label class="active" for="title_desc'.$i.'">Titre description '.$i.'</label>
                      </div>
                      <div class="input-field">
                        <textarea name="desc'.$i.'">'.$row['desc'.$i].'</textarea>
                        <label class="active" for="desc'.$i.'">Description '.$i.'</label>
                      </div>
                      ';} echo '
                      <div class="input-field">
                        <input name="title_gallery" value="'.$row['title_gallery'].'">
                        <label class="active" for="title_gallery">Titre gallerie</label>
                      </div>
                      '; for ($i=1; $i<7; $i++) { echo '
                      <div class="input-field">
                        <input name="gllry_title'.$i.'" value="'.$row['gllry_title'.$i].'">
                        <label class="active" for="gllry_title'.$i.'">Titre image '.$i.'</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img'.$i.'" value="'.$row['gllry_img'.$i].'">
                        <label class="active" for="gllry_img'.$i.'">Image '.$i.'</label>
                      </div>
                      ';} echo '
                      <div class="input-field">
                        <input name="title2" value="'.$row['title2'].'">
                        <label class="active" for="title2">Titre partie 2</label>
                      </div>
                      '; for ($i=4; $i<6; $i++) { echo '
                        </div>
                      <div class="input-field">
                        <input name="img'.$i.'" value="'.$row['img'.$i].'">
                        <label class="active" for="img'.$i.'">Image '.$i.'</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc'.$i.'" value="'.$row['title_desc'.$i].'">
                        <label class="active" for="title_desc'.$i.'">Titre description '.$i.'</label>
                      </div>
                      <div class="input-field">
                        <textarea name="desc'.$i.'">'.$row['desc'.$i].'</textarea>
                        <label class="active" for="desc'.$i.'">Description '.$i.'</label>
                      </div>
                      ';} echo '
                      </div>
                      <input type="hidden" name="id" value="'.$row['id'].'">
                      <button type="submit" class="modal-close waves-effect waves-light btn purple">
                        Confirmer
                      </button>
                      <button type="reset" class="modal-close waves-effect waves-light btn purple" onclick="HideSwitch(\'form-user-'.$row['id'].'\')">
                        Annuler et fermer
                      </button> 
                    </form>
                  </td>
                </tr>'; 
              }
            ?>
          </tbody>
        </table>
        <form action="createpage.php" methood="post">
          <button type="submit" class="waves-effect waves-light btn purple">
            Ajouter une page projet
          </button>
        </form>
      </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>