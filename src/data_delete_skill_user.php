<?php
session_start();
include("conection.php");

$id_skill = trim($_GET['id_skill']);
$id_user = $_SESSION['user_id'];

$sql_delete_skill_user = 'DELETE FROM user_skills WHERE skill_id = '. $id_skill . ' AND user_id = ' . $id_user;
$conection->query($sql_delete_skill_user);
$conection->close();
header('Location: form_painel.php?main_menu=user_skills');
exit;

?>