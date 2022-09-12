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
$user_id = $_SESSION['user_id'];

$sql_insert_job = "INSERT INTO rh_jobs (name, description, salary, english_level, experience_level, carrer_focus, local) 
                               VALUES ('$job_name', '$job_description', '$salary', '$english_level', '$experience_level', '$carrer_focus', 'Remoto')";                        

if($conection->query($sql_insert_job) === TRUE){
    $_SESSION['insert_job_success'] = true;
} else {
    $_SESSION['insert_job_error'] = true;
}

$conection->close();
header('Location: form_painel.php?main_menu=create_jobs');
exit;
?>