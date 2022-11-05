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

$job_image = $_FILES['job_image'];
$file_temp = $job_image['tmp_name'];
$file_size = $job_image['size'];
$location = './images/jobs/';

$sql_job = 'SELECT * FROM rh_jobs WHERE id = "' . $job_id . '"';
$result_job = mysqli_query($conection, $sql_job);
$row_job = mysqli_fetch_array($result_job);

if ($file_size <= 0){
    // TODO: Verificar
    $new_name_image = trim($_POST['input_job_image']);
} else {
    $new_name_image = date("dmy") . time() . $job_image["name"];
    if ($row_job['job_image']){
        $archive_image = './images/jobs/' . $row_job['job_image'];
        $delete_image = unlink($archive_image);
    }
}

$cont_skill_job = 1;

$sql_delete_skills_job = 'DELETE FROM rh_jobs_skills WHERE id_job = "'. $job_id . '"';
$conection->query($sql_delete_skills_job);

while(true){
    $skill = $_POST['skill' . strval($cont_skill_job)];
    $default_radio_skill = $_POST['default-radio-' . strval($cont_skill_job)];
    
    if(!$skill and !$default_radio_skill){
        break;
    }

    $sql_insert_skills_job = "INSERT INTO rh_jobs_skills (id_job, skill_id, skill_level) 
                               VALUES ('$job_id', '$skill', '$default_radio_skill')";
    
    if($conection->query($sql_insert_skills_job) === TRUE){
        $_SESSION['update_job_success'] = true;
    } else {
        $_SESSION['update_job_error'] = true;
    }                           
    $cont_skill_job = $cont_skill_job + 1;
}

$sql_update_job = 'UPDATE rh_jobs SET name = "' . $job_name . '", office = "' . $office .
        '", description = "' . $job_description . '", salary = "' . $salary . '", english_level = "' . $english_level .
        '", experience_level = "' . $experience_level . '", carrer_focus = "' . $carrer_focus . 
        '", local = "Remoto", job_image = "' . $new_name_image . '" WHERE id = "' . $job_id . '"';                               

if($conection->query($sql_update_job) === TRUE){
    $_SESSION['update_job_success'] = true;
} else {
    $_SESSION['update_job_error'] = true;
}

$conection->close();
header('Location: form_painel.php?main_menu=edit_job&id=' . $job_id);
exit;
?>