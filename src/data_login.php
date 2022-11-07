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
$user_db = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if($row == 1 and $user_db['status'] == 1) {	
	$_SESSION['name'] = $user_db['name'];
	$_SESSION['user'] = $user_db['user'];
	$_SESSION['email'] = $user_db['email'];
	$_SESSION['user_id'] = $user_db['id'];
	//TODO: Lembrar de fazer autenticação do usuário quando logar
	$_SESSION['user_authenticate'] = true;
	header('Location: form_painel.php');
	exit();
} else {
	$_SESSION['not_authenticate'] = true;
	header('Location: index.php');
	exit();
}
?>