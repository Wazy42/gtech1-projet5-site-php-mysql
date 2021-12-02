<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
  exit();
}

$sql = "UPDATE pages SET
title_navbar = :title_navbar, 
h1 = :h1, 
description = :description, 
title1 = :title1, 
title_desc1 = :title_desc1, 
desc1 = :desc1, 
title_desc2 = :title_desc2, 
desc2 = :desc2, 
title_desc3 = :title_desc3, 
desc3 = :desc3, 
title_gallery = :title_gallery, 
gllry_title1 = :gllry_title1, 
gllry_title2 = :gllry_title2, 
gllry_title3 = :gllry_title3, 
gllry_title4 = :gllry_title4, 
gllry_title5 = :gllry_title5, 
gllry_title6 = :gllry_title6, 
title2 = :title2, 
title_desc4 = :title_desc4, 
desc4 = :desc4, 
title_desc5 = :title_desc5, 
desc5 = :desc5
WHERE pages.id = :id";
$dataBinded=array(
  ':title_navbar' => $_POST['title_navbar'],
  ':h1' => $_POST['h1'],
  ':description' => $_POST['description'],
  ':title1' => $_POST['title1'],
  ':title_desc1' => $_POST['title_desc1'],
  ':desc1' => $_POST['desc1'],
  ':title_desc2' => $_POST['title_desc2'],
  ':desc2' => $_POST['desc2'],
  ':title_desc3' => $_POST['title_desc3'],
  ':desc3' => $_POST['desc3'],
  ':title_gallery' => $_POST['title_gallery'],
  ':gllry_title1' => $_POST['gllry_title1'],
  ':gllry_title2' => $_POST['gllry_title2'],
  ':gllry_title3' => $_POST['gllry_title3'],
  ':gllry_title4' => $_POST['gllry_title4'],
  ':gllry_title5' => $_POST['gllry_title5'],
  ':gllry_title6' => $_POST['gllry_title6'],
  ':title2' => $_POST['title2'],
  ':title_desc4' => $_POST['title_desc4'],
  ':desc4' => $_POST['desc4'],
  ':title_desc5' => $_POST['title_desc5'],
  ':desc5' => $_POST['desc5'],
  ':id' => $_POST['id']
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:adminpage.php');
?>