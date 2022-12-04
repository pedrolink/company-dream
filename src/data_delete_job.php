<?php
session_start();
include("conection.php");

$job_id = trim($_GET['id']);

$sql_user_permission = 'SELECT * FROM users WHERE user = "' . $_SESSION['user'] . '" AND type_permission = 1 OR type_permission = 2';
$result_user_permisson = mysqli_query($conection, $sql_user_permission);

if ($result_user_permisson->num_rows > 0) {
    $sql_delete_job = 'DELETE FROM rh_jobs WHERE id = "'. $job_id . '"';
    if($conection->query($sql_delete_job) === TRUE){
        $_SESSION['status_delete_job_success'] = true;
    } else {
        $_SESSION['status_delete_job_error'] = true;
    }
} else {
    $_SESSION['status_not_permission_delete_job'] = true;
}

$conection->close();
header('Location: form_painel.php?main_menu=analytic_jobs');
exit;

?>