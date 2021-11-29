<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(email,username,password) VALUES(:email,:username,SHA1(:password))";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'=> $_POST['username'],
    ':password'=> $_POST['password']
);
if ($_POST["password2"] == $_POST["password"]) {
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
} else {
    echo "Les mots de passe ne correspondent pas !";
}
header('Location:account.php?mode=login');
?>