<?php
session_start();
include("conection.php");

$id_user = $_SESSION['user_id'];
$skill = $_POST['skill1'];
$default_radio_skill = $_POST['default-radio-1'];

$sql_insert_skills_user = "INSERT INTO user_skills (user_id, skill_id, skill_level) 
                            VALUES ('$id_user', '$skill', '$default_radio_skill')";

$conection->query($sql_insert_skills_user);
$conection->close();
header('Location: form_painel.php?main_menu=user_skills');
exit;

?>