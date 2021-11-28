<!DOCTYPE html>
<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
}
?>
<html>
<?php require "menu.php" ?>
    <h1> PAGE ADMIN </h1>
    <form class="col s12" action="dc.php">
      <button type="submit" class="modal-close waves-effect btn-flat">
        Se déconnecter
      </button>
    </form>
  </body>
</html>