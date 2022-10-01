<?php
session_start();
include("conection.php");

$job_name = trim($_POST['job_name']);
$office = trim($_POST['office']);
$carrer_focus = trim($_POST['carrer_focus']);
$experience_level = trim($_POST['experience_level']);
$english_level = trim($_POST['english_level']);
$salary = trim(str_replace(',', '.', str_replace('.', '', $_POST['salary'])));
$job_description = trim($_POST['job_description']);
$job_id = trim($_POST['job_id']);

$sql_update_job = 'UPDATE rh_jobs SET name = "' . $job_name . '", office = "' . $office .
        '", description = "' . $job_description . '", salary = "' . $salary . '", english_level = "' . $english_level .
        '", experience_level = "' . $experience_level . '", carrer_focus = "' . $carrer_focus . '", local = "Remoto" WHERE id = "' . $job_id . '"';                               

if($conection->query($sql_update_job) === TRUE){
    $_SESSION['update_job_success'] = true;
} else {
    $_SESSION['update_job_error'] = true;
}

$conection->close();
header('Location: form_painel.php?main_menu=edit_job&id=' . $job_id);
exit;
?>