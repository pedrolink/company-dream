<?php
session_start();
include("conection.php");

$user_id = $_POST['users_id'];
$job_id = $_POST['job_id'];
$description = $_POST['description'];
$avaliation = $_POST['avaliation'];
$form_select = $_POST['form_select'];

if($form_select == 'talent_bank'){
    $sql_user_talent_bank = 'SELECT * FROM talent_bank WHERE user_id = "' . $user_id . '" and job_id = "' . $job_id . '"';
    $result_user_talent_bank = mysqli_query($conection, $sql_user_talent_bank);

    if ($result_user_talent_bank->num_rows > 0) {
        $_SESSION['user_talent_bank_exists'] = true;
    } else {
        $sql_insert_user_talent_bank = "INSERT INTO talent_bank (user_id, job_id, description, avaliation) 
                                VALUES ('$user_id', '$job_id', '$description', '$avaliation')";
        if($conection->query($sql_insert_user_talent_bank) === TRUE){
            $_SESSION['insert_user_talent_bank_success'] = true;
        } else {
            $_SESSION['insert_user_talent_bank_error'] = true;
        }
    }

    $conection->close();
    header('Location: form_painel.php?main_menu=analytic_user_jobs&id=' . $job_id);
    exit;
}

if($form_select == 'select_user'){
    $sql_select_job_users = 'SELECT * FROM select_job_users WHERE user_id = "' . $user_id . '" and job_id = "' . $job_id . '"';
    $result_select_job_users = mysqli_query($conection, $sql_select_job_users);

    if ($result_select_job_users->num_rows > 0) {
        $_SESSION['select_job_user_exist'] = true;
    } else {
        $sql_insert_select_job_users = "INSERT INTO select_job_users (user_id, job_id, description, avaliation) 
                                VALUES ('$user_id', '$job_id', '$description', '$avaliation')";
        if($conection->query($sql_insert_select_job_users) === TRUE){
            $_SESSION['insert_select_job_user_success'] = true;
        } else {
            $_SESSION['insert_select_job_user_error'] = true;
        }
    }

    $conection->close();
    header('Location: form_painel.php?main_menu=analytic_user_jobs&id=' . $job_id);
    exit;
}
?>