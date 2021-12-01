<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
  exit();
}

$sql = "INSERT INTO `pages` (`title_navbar`, `h1`, `img_header`, `description`, `title1`, `img1`, `title_desc1`, `desc1`, `img2`, `title_desc2`, `desc2`, `img3`, `title_desc3`, `desc3`, `title_gallery`, `gllry_title1`, `gllry_img1`, `gllry_title2`, `gllry_img2`, `gllry_title3`, `gllry_img3`, `gllry_title4`, `gllry_img4`, `gllry_title5`, `gllry_img5`, `gllry_title6`, `gllry_img6`, `title2`, `img4`, `title_desc4`, `desc4`, `img5`, `title_desc5`, `desc5`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')"; 
$pre = $pdo->prepare($sql); 
$pre->execute();

header('Location:adminpage.php');
?>