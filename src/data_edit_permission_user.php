<?php
session_start();
include("conection.php");

$id_user = trim($_POST['id_user']);
$type_permission = trim($_POST['type_permission']);
$status = trim($_POST['status']);

$sql_update_status_permission_user = 'UPDATE users SET type_permission = ' . $type_permission . ', status = ' . $status . ' WHERE id = "' . $id_user . '"';

if($conection->query($sql_update_status_permission_user) === TRUE){
    $_SESSION['update_status_user_permission_success'] = true;
} else {
    $_SESSION['sql_update_status_permission_error'] = true;
}

$conection->close();
header('Location: form_painel.php?main_menu=admin_panel');
exit;

?>