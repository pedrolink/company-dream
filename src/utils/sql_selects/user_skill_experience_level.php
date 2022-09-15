<?php 
if($row_user_experience['name_experience']){
    $sql_select_experience_level = 'SELECT * FROM experience_levels WHERE id_experience != "' . $row_user_experience['id_experience'] . '"';
    $result_select_experience_level = mysqli_query($conection, $sql_select_experience_level);
    echo '<option value=' . $row_user_experience['id_experience'] . '>' . $row_user_experience['name_experience'] . '</option>';
    while($row_select_experience_level = mysqli_fetch_array($result_select_experience_level)){
        echo '<option value=' . $row_select_experience_level['id_experience'] . '>' . $row_select_experience_level['name_experience'] . '</option>';
    }
} else {
    echo '<option value="">Selecione um item</option>
          <option value="1">Júnior</option>
          <option value="2">Pleno</option>
          <option value="3">Sênior</option>';
}
?>