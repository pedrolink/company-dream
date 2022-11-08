<?php
session_start();
include("conection.php");

$id_skill = trim($_GET['id_skill']);
$id_job = trim($_GET['id_job']);

$sql_delete_skill_job = 'DELETE FROM rh_jobs_skills WHERE skill_id = '. $id_skill . ' AND id_job = ' . $id_job;
$conection->query($sql_delete_skill_job);
$conection->close();
header('Location: form_painel.php?main_menu=edit_job&id=' . $id_job);
exit;

?>