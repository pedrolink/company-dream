<?php
session_start();
include("conection.php");

$job_name = trim($_POST['job_name']);
$office = trim($_POST['office']);
$carrer_focus = trim($_POST['carrer_focus']);
$experience_level = trim($_POST['experience_level']);
$english_level = trim($_POST['english_level']);
$salary = trim(str_replace(',', '.', str_replace('.', '', $_POST['salary'])));
$job_description = trim(str_replace("'", "", $_POST['job_description']));
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
                               VALUES ('$job_name', '$office', '$job_description', '$salary', '$english_level', '$experience_level', '$carrer_focus', 'Remoto', '$new_name_image')";                           

if($conection->query($sql_insert_job) === TRUE){
    move_uploaded_file($file_temp, $location . $new_name_image);
    $_SESSION['insert_job_success'] = true;
} else {
    $_SESSION['insert_job_error'] = true;
}

$sql_job = 'SELECT * FROM rh_jobs ORDER BY id DESC limit 1';
$result_job = mysqli_query($conection, $sql_job);
$row_job = mysqli_fetch_array($result_job);
$job_id = $row_job['id'];

$cont_skill_job = 1;

while(true){
    $skill = $_POST['skill' . strval($cont_skill_job)];
    $default_radio_skill = $_POST['default-radio-' . strval($cont_skill_job)];
    
    if(!$skill and !$default_radio_skill){
        break;
    }

    $sql_insert_skills_job = "INSERT INTO rh_jobs_skills (id_job, skill_id, skill_level) 
                               VALUES ('$job_id', '$skill', '$default_radio_skill')";
    
    if($conection->query($sql_insert_skills_job) === TRUE){
        $_SESSION['insert_job_success'] = true;
    } else {
        $_SESSION['insert_job_error'] = true;
    }                           
    $cont_skill_job = $cont_skill_job + 1;
}

$conection->close();
header('Location: form_painel.php?main_menu=create_jobs');
exit;
?>