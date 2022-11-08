<?php
session_start();
include("conection.php");

$job_id_skill = $_POST['job_id_skill'];
$skill = $_POST['skill1'];
$default_radio_skill = $_POST['default-radio-1'];

$sql_insert_skills_job = "INSERT INTO rh_jobs_skills (id_job, skill_id, skill_level) 
                            VALUES ('$job_id_skill', '$skill', '$default_radio_skill')";

$conection->query($sql_insert_skills_job);
$conection->close();
header('Location: form_painel.php?main_menu=edit_job&id=' . $job_id_skill);
exit;

?>