<?php
session_start();
include("conection.php");

$user_id = $_GET['user_id'];
$job_id = $_GET['job_id'];

$sql_user_talent_bank = 'SELECT * FROM talent_bank WHERE user_id = "' . $user_id . '" and job_id = "' . $job_id . '"';
$result_user_talent_bank = mysqli_query($conection, $sql_user_talent_bank);

if ($result_user_talent_bank->num_rows > 0) {
    $_SESSION['user_talent_bank_exists'] = true;
} else {
    $sql_insert_user_talent_bank = "INSERT INTO talent_bank (user_id, job_id) 
                               VALUES ('$user_id', '$job_id')";
    if($conection->query($sql_insert_user_talent_bank) === TRUE){
        $_SESSION['insert_user_talent_bank_success'] = true;
    } else {
        $_SESSION['insert_user_talent_bank_error'] = true;
    }
}

$conection->close();
header('Location: form_painel.php?main_menu=analytic_user_jobs&id=' . $job_id);
exit;

?>