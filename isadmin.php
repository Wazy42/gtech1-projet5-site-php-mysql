<?php
require_once "config.php";
if (isset($_SESSION['user']) && $_SESSION['user']['id'] == 1) {
  header('Location:adminpage.php');
} else {
  header('Location:account.php');
}
?>