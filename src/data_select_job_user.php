<?php
session_start();
include("conection.php");

$user_id = $_GET['user_id'];
$job_id = $_GET['job_id'];
$description = $_GET['job_id'];
$avaliation = $_GET['job_id'];

$sql_select_job_users = 'SELECT * FROM select_job_users WHERE user_id = "' . $user_id . '" and job_id = "' . $job_id . '"';
$result_select_job_users = mysqli_query($conection, $sql_select_job_users);

if ($result_select_job_users->num_rows > 0) {
    $_SESSION['select_job_user_exist'] = true;
} else {
    $sql_insert_select_job_users = "INSERT INTO select_job_users (user_id, job_id) 
                               VALUES ('$user_id', '$job_id')";
    echo $sql_insert_select_job_users;
    if($conection->query($sql_insert_select_job_users) === TRUE){
        $_SESSION['insert_select_job_user_success'] = true;
    } else {
        $_SESSION['insert_select_job_user_error'] = true;
    }
}

$conection->close();
header('Location: form_painel.php?main_menu=analytic_user_jobs&id=' . $job_id);
exit;

?>