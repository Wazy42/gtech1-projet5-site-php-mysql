<?php
$email = $_POST['mail'];
$objet = "Nous avons bien reçu votre message";
$content = "
<b>Merci de nous avoir envoyé un message !<b>
<br />Bonjour ".$_POST['fisrt_name'].$_POST['last_name']." nous vous remercions de nous partager votre avis, à très bientot sur TPR!
<br /> Votre message:
<br />".$_POST['msg'];
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');

header('Location:index.php');
?>