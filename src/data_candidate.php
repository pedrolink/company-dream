<?php
session_start();
include("conection.php");

$job_id = trim($_POST['job_id']);
$id_user = $_SESSION['user_id'];

$sql_user_candidate = 'SELECT * FROM candidates_vacancy WHERE id_user = "' . $id_user . '" AND id_job = "' . $job_id . '"';
$result_user_candidate = $conection->query($sql_user_candidate);

if ($result_user_candidate->num_rows > 0) {
    $_SESSION['insert_candidate_exists'] = true;
} else {
    $sql_insert_candidate = "INSERT INTO candidates_vacancy (id_job, id_user) 
                                VALUES ('$job_id', '$id_user')";

    if($conection->query($sql_insert_candidate) === TRUE){
        $_SESSION['insert_candidate_success'] = true;
    } else {
        $_SESSION['insert_candidate_error'] = true;
    }
}
$conection->close();
header('Location: form_painel.php?main_menu=view_job&job_id=' . $job_id);
exit;
?>