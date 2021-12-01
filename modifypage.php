<?php
require_once "config.php";
if (!(isset($_SESSION['user']) && $_SESSION['user']['id'] == 1)) {
  header('Location:account.php');
  exit();
}

$sql = "UPDATE pages SET
title_navbar = :title_navbar, 
h1 = :h1, 
img_header = :img_header, 
description = :description, 
title1 = :title1, 
img1 = :img1, 
title_desc1 = :title_desc1, 
desc1 = :desc1, 
img2 = :img2, 
title_desc2 = :title_desc2, 
desc2 = :desc2, 
img3 = :img3, 
title_desc3 = :title_desc3, 
desc3 = :desc3, 
title_gallery = :title_gallery, 
gllry_title1 = :gllry_title1, 
gllry_img1 = :gllry_img1, 
gllry_title2 = :gllry_title2, 
gllry_img2 = :gllry_img2, 
gllry_title3 = :gllry_title3, 
gllry_img3 = :gllry_img3, 
gllry_title4 = :gllry_title4, 
gllry_img4 = :gllry_img4, 
gllry_title5 = :gllry_title5, 
gllry_img5 = :gllry_img5, 
gllry_title6 = :gllry_title6, 
gllry_img6 = :gllry_img6, 
title2 = :title2, 
img4 = :img4, 
title_desc4 = :title_desc4, 
desc4 = :desc4, 
img5 = :img5, 
title_desc5 = :title_desc5, 
desc5 = :des5
WHERE pages.id = :id";
$dataBinded=array(
    ':title_navbar'=> $_POST['title_navbar'],
    ':h1'=> $_POST['h1'],
    ':img_header'=> $_POST['img_header'],
    ':description'=> $_POST['description'],
    ':title1'=> $_POST['title1'],
    ':img1'=> $_POST['img1'],
    ':title_desc1'=> $_POST['title_desc1'],
    ':desc1'=> $_POST['desc1'],
    ':img2'=> $_POST['img2'],
    ':title_desc2'=> $_POST['title_desc2'],
    ':desc2'=> $_POST['desc2'],
    ':img3'=> $_POST['img3'],
    ':title_desc3'=> $_POST['title_desc3'],
    ':desc3'=> $_POST['desc3'],
    ':title_gallery'=> $_POST['title_gallery'],
    ':gllry_title1'=> $_POST['gllry_title1'],
    ':gllry_img1'=> $_POST['gllry_img1'],
    ':gllry_title2'=> $_POST['gllry_title2'],
    ':gllry_img2'=> $_POST['gllry_img2'],
    ':gllry_title3'=> $_POST['gllry_title3'],
    ':gllry_img3'=> $_POST['gllry_img3'],
    ':gllry_title4'=> $_POST['gllry_title4'],
    ':gllry_img4'=> $_POST['gllry_img4'],
    ':gllry_title5'=> $_POST['gllry_title5'],
    ':gllry_img5'=> $_POST['gllry_img5'],
    ':gllry_title6'=> $_POST['gllry_title6'],
    ':gllry_img6'=> $_POST['gllry_img6'],
    ':title2'=> $_POST['title2'],
    ':img4'=> $_POST['img4'],
    ':title_desc4'=> $_POST['title_desc4'],
    ':desc4'=> $_POST['desc4'],
    ':img5'=> $_POST['img5'],
    ':title_desc5'=> $_POST['title_desc5'],
    ':desc5'=> $_POST['desc5'],
);
$pre = $pdo->prepare($sql); 
$pre->execute();

//header('Location:adminpage.php');
?>