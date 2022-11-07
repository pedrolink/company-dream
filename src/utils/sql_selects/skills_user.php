<?php
$sql_user_skills = 'SELECT * FROM user_skills
INNER JOIN skills ON user_skills.skill_id = skills.id
WHERE user_id = ' . $_SESSION['user_id'];

if($row_user_experience['name_english']){
    $sql_select_english_level = 'SELECT * FROM english_levels WHERE id_english != "' . $row_user_experience['id_english'] . '"';
    $result_select_english_level = mysqli_query($conection, $sql_select_english_level);
    echo '<option value=' . $row_user_experience['id_english'] . '>' . $row_user_experience['name_english'] . '</option>';
    while($row_select_english_level = mysqli_fetch_array($result_select_english_level)){
        echo '<option value=' . $row_select_english_level['id_english'] . '>' . $row_select_english_level['name_english'] . '</option>';
    }
} else {
    include('./utils/skills.php');
}
?>