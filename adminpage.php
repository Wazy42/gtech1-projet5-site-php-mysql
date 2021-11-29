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
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT id, username, email FROM user WHERE id != 1 ORDER BY id";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);
              foreach ($data as $row) {
                echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['email']."</td></tr>"; 
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>