<?php
session_start();
include("conection.php");

$teste = trim($_POST['file_teste']);
$user_image = $_FILES['file_teste']['name'];
// $file_temp = $user_image['tmp_name'];
// $file_size = $user_image['size'];
// $location = 'images/user/';

echo $user_image;
?>