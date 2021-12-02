<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
  exit();
}

$sql = "UPDATE pages SET
".$_POST['name_col']." = :img, 
WHERE pages.id = :id";

$dataBinded=array(
':img' => $_FILES['image']['name'];
);

$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$destination = "img/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$destination);
?>