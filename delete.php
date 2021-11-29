<?php 
require_once "config.php"; 
$sql = "DELETE FROM ".$_POST['table']." WHERE id = ".$_POST['id'].";"; 
$pre = $pdo->prepare($sql); 
$pre->execute();

header('Location:adminpage.php');
?>