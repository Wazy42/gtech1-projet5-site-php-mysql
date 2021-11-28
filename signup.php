<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(email,username,password) VALUES(:email,:username,SHA1(:password))";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'=> $_POST['username'],
    ':password'=> $_POST['password'],
    ':password2'=> $_POST['password2']
);
if (":password2" == ":password") {
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
} else {
    echo "Les mots de passe ne correspondent pas !";
}
header('Location:account.php?mode=login');
?>