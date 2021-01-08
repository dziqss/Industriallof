<?php
include_once("configs.php");
include_once("functions/email.php");


(empty($_GET['page'])) ? $url = HOME : $url =$_GET['page'];
$file = "pages/".$url.".php";
//echo $file;
$title = $page_name[$url];
include_once("modules/header.php");

if (file_exists($file)) {
    include_once($file);
} else {
    include_once("pages/error.php");
}



include_once("modules/footer.php");


?>











