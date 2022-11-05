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

$job_image = $_FILES['job_image'];
$file_temp = $job_image['tmp_name'];
$file_size = $job_image['size'];
$location = './images/jobs/';

if ($file_size <= 0){
    // TODO: Verificar
    $new_name_image = trim($_POST['input_job_image']);
} else {
    $new_name_image = date("dmy") . time() . $job_image["name"];
    if ($row_user['job_image']){
        $archive_image = './images/jobs/' . $row_user['job_image'];
        $delete_image = unlink($archive_image);
    }
}

$sql_insert_job = "INSERT INTO rh_jobs (name, office, description, salary, english_level, experience_level, carrer_focus, local, job_image) 
                               VALUES ('$job_name', '$office', '$job_description', '$salary', '$english_level', '$experience_level', '$carrer_focus', 'Remoto', $new_name_image)";

if($conection->query($sql_insert_job) === TRUE){
    $_SESSION['insert_job_success'] = true;
} else {
    $_SESSION['insert_job_error'] = true;
}

$conection->close();
header('Location: form_painel.php?main_menu=create_jobs');
exit;
?>