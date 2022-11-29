<?php
session_start();
include("conection.php");

$job_id = trim($_GET['job_id']);

// SQL's PARA SCRIPT POINTS

$sql_job = 'SELECT * FROM rh_jobs WHERE id = ' . $job_id;
$result_job = mysqli_query($conection, $sql_job);
$row_job = mysqli_fetch_array($result_job);

$sql_candidates_vacancy = 'SELECT * FROM candidates_vacancy WHERE id_job = ' . $job_id;
$result_candidates_vacancy = mysqli_query($conection, $sql_candidates_vacancy);

while ($row_candidates_vacancy = $result_candidates_vacancy->fetch_assoc()) {
    $points = 0;

    $sql_rh_jobs_skills = 'SELECT * FROM rh_jobs_skills WHERE id_job = ' . $job_id;
    $result_rh_jobs_skills = mysqli_query($conection, $sql_rh_jobs_skills);

    foreach($result_rh_jobs_skills as $row_job_skill) {
        // SQL COMPARA HABILIDADE USUÁRIO
        $sql_compare_skills = 'SELECT * FROM user_skills WHERE user_id = "' . $row_candidates_vacancy['id_user'] . '" AND skill_id = "' . $row_job_skill['skill_id'] . '" AND skill_level >= "' . $row_job_skill['skill_level'] . '"';
        $result_compare_skills = $conection->query($sql_compare_skills);

        if ($result_compare_skills->num_rows > 0) {
            $points += 1;
        }
    }
      
    
    // EXPERIÊNCIAS USUÁRIO
      
    $sql_user_experience = 'SELECT * FROM user_experience WHERE user_id = ' . $row_candidates_vacancy['id_user'];
    $result_user_experience = mysqli_query($conection, $sql_user_experience);
    $row_user_experience = mysqli_fetch_array($result_user_experience);

    // COMPARAÇÕES //

    // FOCO DE CARREIRA
    $sql_carrer_focus = 'SELECT * FROM user_experience WHERE user_id = "' . $row_candidates_vacancy['id_user'] . '" AND carrer_focus = ' . $row_job['carrer_focus'];
    $result_carrer_focus = $conection->query($sql_carrer_focus);
    if ($result_carrer_focus->num_rows > 0) {
        $points += 1;
    }


    // NÍVEL DE EXPERIÊNCIA
    $sql_experience_level = 'SELECT * FROM user_experience WHERE user_id = "' . $row_candidates_vacancy['id_user'] . '" AND experience_level >= ' . $row_job['experience_level'];
    $result_experience_level = $conection->query($sql_experience_level);
    if ($result_experience_level->num_rows > 0) {
        $points += 1;
    }


    // NÍVEL DE INGLÊS
    $sql_english_level = 'SELECT * FROM user_experience WHERE user_id = "' . $row_candidates_vacancy['id_user'] . '" AND english_level >= ' . $row_job['english_level'];
    $result_english_level = $conection->query($sql_english_level);
    if ($result_english_level->num_rows > 0) {
        $points += 1;
    }


    // SALÁRIO
    $sql_salary = 'SELECT * FROM user_experience WHERE user_id = "' . $row_candidates_vacancy['id_user'] . '" AND salary <= ' . $row_job['salary'];
    $result_salary = $conection->query($sql_salary);
    if ($result_salary->num_rows > 0) {
        $points += 1;
    }

    $sql_update_points = 'UPDATE candidates_vacancy SET points = "' . $points . '" WHERE id_user = "' . $row_candidates_vacancy['id_user'] . '"';
    $result_update_points = $conection->query($sql_update_points);
}

$conection->close();
?>