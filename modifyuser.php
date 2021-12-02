<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
  exit();
}

$sql = "UPDATE user SET 
username = :username, 
email = :email";
echo $_POST['password'];

$dataBinded=array(
  ':username' => $_POST['username'],
  ':email' => $_POST['email'],
  ':id' => $_POST['id']
);

if ($_POST['password'] != "") {
  $sql = $sql.", password = SHA1(:password)";
  $dataBinded[':password'] = $_POST['password'];
}
$sql = $sql." WHERE user.id = :id";

$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:adminpage.php');
?>