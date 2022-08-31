<?php

session_start();
include('conection.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: index.php');
	exit();
}

$user = mysqli_real_escape_string($conection, $_POST['user']);
$password = mysqli_real_escape_string($conection, $_POST['password']);

$query = "SELECT * FROM users WHERE user = '{$user}' AND password = md5('{$password}')";

$result = mysqli_query($conection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$user_db = mysqli_fetch_array($result);
	$_SESSION['name'] = $user_db['name'];
	$_SESSION['user'] = $user_db['user'];
	$_SESSION['email'] = $user_db['email'];
	$_SESSION['id'] = $user_db['id'];
	header('Location: form_jobs.php');
	exit();
} else {
	$_SESSION['not_authenticate'] = true;
	header('Location: index.php');
	exit();
}

?>