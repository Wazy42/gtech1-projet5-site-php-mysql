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
              $sql = "SELECT id, username, email FROM user WHERE id != 1 ORDER BY id";
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
                  <td colspan=3>
                    <h6>Modification des données de l\'utilisateur:</h6>
                    <form method="post" action="modifyuser.php" onsubmit="return confirm(\'Êtes vous sur de vouloir modifier les données de cet utilisateur ? \nCette action est irréversible.\');>
                      <input name="username" value='.$row['username'].'>
                      <input name="username" value='.$row['email'].'>
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
                echo "
                <tr>
                  <td>".$row['id']."</td><td>".$row['title_navbar'].'</td>
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
                  <td colspan=2>
                    <form class="hide" method="post" action="modifypage.php" id="form-project-'.$row['id'].'">
                      <div class="input-field">
                        <input name="title_navbar" value='.$row['title_navbar'].'>
                        <label class="active" for="title_navbar">title_navbar</label>
                      </div>
                      <div class="input-field">
                        <input name="h1" value='.$row['h1'].'>
                        <label class="active" for="h1">h1</label>
                      </div>
                      <div class="input-field">
                        <input name="img_header" value='.$row['img_header'].'>
                        <label class="active" for="img_header">img_header</label>
                      </div>
                      <div class="input-field">
                        <input name="description" value='.$row['description'].'>
                        <label class="active" for="description">description</label>
                      </div>
                      <div class="input-field">
                        <input name="title1" value='.$row['title1'].'>
                        <label class="active" for="title1">title1</label>
                      </div>
                      <div class="input-field">
                        <input name="img1" value='.$row['img1'].'>
                        <label class="active" for="img1">img1</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc1" value='.$row['title_desc1'].'>
                        <label class="active" for="title_desc1">title_desc1</label>
                      </div>
                      <div class="input-field">
                        <textarea name="desc1">'.$row['desc1'].'</textarea>
                        <label class="active" for="desc1">desc1</label>
                      </div>
                      <div class="input-field">
                        <input name="img2" value='.$row['img2'].'>
                        <label class="active" for="img2">img2</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc2" value='.$row['title_desc2'].'>
                        <label class="active" for="title_desc2">title_desc2</label>
                      </div>
                      <div class="input-field">
                      <textarea name="desc2">'.$row['desc2'].'</textarea>
                        <label class="active" for="desc2">desc2</label>
                      </div>
                      <div class="input-field">
                        <input name="img3" value='.$row['img3'].'>
                        <label class="active" for="img3">img3</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc3" value='.$row['title_desc3'].'>
                        <label class="active" for="title_desc3">title_desc3</label>
                      </div>
                      <div class="input-field">
                      <textarea name="desc3">'.$row['desc3'].'</textarea>
                        <label class="active" for="desc3">desc3</label>
                      </div>
                      <div class="input-field">
                        <input name="title_gallery" value='.$row['title_gallery'].'>
                        <label class="active" for="title_gallery">title_gallery</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_title1" value='.$row['gllry_title1'].'>
                        <label class="active" for="gllry_title1">gllry_title1</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img1" value='.$row['gllry_img1'].'>
                        <label class="active" for="gllry_img1">gllry_img1</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_title2" value='.$row['gllry_title2'].'>
                        <label class="active" for="gllry_title2">gllry_title2</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img2" value='.$row['gllry_img2'].'>
                        <label class="active" for="gllry_img2">gllry_img2</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_title3" value='.$row['gllry_title3'].'>
                        <label class="active" for="gllry_title3">gllry_title3</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img3" value='.$row['gllry_img3'].'>
                        <label class="active" for="gllry_img3">gllry_img3</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_title4" value='.$row['gllry_title4'].'>
                        <label class="active" for="gllry_title4">gllry_title4</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img4" value='.$row['gllry_img4'].'>
                        <label class="active" for="gllry_img4">gllry_img4</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_title5" value='.$row['gllry_title5'].'>
                        <label class="active" for="gllry_title5">gllry_title5</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img5" value='.$row['gllry_img5'].'>
                        <label class="active" for="gllry_img5">gllry_img5</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_title6" value='.$row['gllry_title6'].'>
                        <label class="active" for="gllry_title6">gllry_title6</label>
                      </div>
                      <div class="input-field">
                        <input name="gllry_img6" value='.$row['gllry_img6'].'>
                        <label class="active" for="gllry_img6">gllry_img6</label>
                      </div>
                      <div class="input-field">
                        <input name="title2" value='.$row['title2'].'>
                        <label class="active" for="title2">title2</label>
                      </div>
                      <div class="input-field">
                        <input name="img4" value='.$row['img4'].'>
                        <label class="active" for="img4">img4</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc4" value='.$row['title_desc4'].'>
                        <label class="active" for="title_desc4">title_desc4</label>
                      </div>
                      <div class="input-field">
                      <textarea name="desc4">'.$row['desc4'].'</textarea>
                        <label class="active" for="desc4">desc4</label>
                      </div>
                      <div class="input-field">
                        <input name="img5" value='.$row['img5'].'>
                        <label class="active" for="img5">img5</label>
                      </div>
                      <div class="input-field">
                        <input name="title_desc5" value='.$row['title_desc5'].'>
                        <label class="active" for="title_desc5">title_desc5</label>
                      </div>
                      <div class="input-field">
                      <textarea name="desc5">'.$row['desc5'].'</textarea>
                        <label class="active" for="desc5">desc5</label>
                      </div>
                      <input type="hidden" name="id" value='.$row['id'].'>
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