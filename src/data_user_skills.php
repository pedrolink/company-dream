<?php
session_start();
include("conection.php");

$carrer_focus = trim($_POST['carrer_focus']);
$experience_level = trim($_POST['experience_level']);
$english_level = trim($_POST['english_level']);
$salary = trim(str_replace(',', '.', str_replace('.', '', $_POST['salary'])));
$user_id = $_SESSION['user_id'];

$sql_user_experience = 'SELECT * FROM user_experience WHERE user_id = "' . $user_id . '"';
$result_user_experience = $conection->query($sql_user_experience);
$row_user_experience = mysqli_fetch_array($result_user_experience);

$cont_skill_job = 1;

$sql_delete_skills_user = 'DELETE FROM user_skills WHERE user_id = "'. $user_id . '"';
$conection->query($sql_delete_skills_user);

while(true){
    $skill = $_POST['skill' . strval($cont_skill_job)];
    $default_radio_skill = $_POST['default-radio-' . strval($cont_skill_job)];
    
    if(!$skill and !$default_radio_skill){
        break;
    }

    $sql_insert_skills_user = "INSERT INTO user_skills (user_id, skill_id, skill_level) 
                               VALUES ('$user_id', '$skill', '$default_radio_skill')";
    
    if($conection->query($sql_insert_skills_user) === TRUE){
        $_SESSION['user_experience_success'] = true;
    } else {
        $_SESSION['user_experience_error'] = true;
    }                           
    $cont_skill_job = $cont_skill_job + 1;
}

if ($result_user_experience->num_rows > 0) {
    $sql_update_user_experience = 'UPDATE user_experience SET carrer_focus = "' . $carrer_focus . '", experience_level = "' . $experience_level .
        '", english_level = "' . $english_level . '", salary = "' . $salary .
        '" WHERE user_id = "' . $user_id . '"';

    if ($conection->query($sql_update_user_experience) === TRUE) {
        move_uploaded_file($file_temp, $location . $new_name_image);
        $_SESSION['user_experience_success'] = true;
    } else {
        $_SESSION['user_experience_error'] = true;
    }
} else {
    $sql_insert_user_experience = "INSERT INTO user_experience (user_id, carrer_focus, experience_level, english_level, salary) 
    VALUES ('$user_id', '$carrer_focus', '$experience_level', '$english_level', '$salary')";

    if($conection->query($sql_insert_user_experience) === TRUE){
        move_uploaded_file($file_temp, $location . $new_name_image);
        $_SESSION['user_experience_success'] = true;
    } else {
        $_SESSION['user_experience_error'] = true;
    }
}

$conection->close();

header('Location: form_painel.php?main_menu=user_skills');
exit;
?>