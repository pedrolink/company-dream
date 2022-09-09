<?php 
if($row_user_experience['name_carrer']){
    $sql_select_carrers_focus = 'SELECT * FROM carrers_focus WHERE id_carrer != "' . $row_user_experience['id_carrer'] . '"';
    $result_select_carrers_focus = mysqli_query($conection, $sql_select_carrers_focus);
    echo '<option value=' . $row_user_experience['id_carrer'] . '>' . $row_user_experience['name_carrer'] . '</option>';
    while($row_select_carrers_focus = mysqli_fetch_array($result_select_carrers_focus)){
        echo '<option value=' . $row_select_carrers_focus['id_carrer'] . '>' . $row_select_carrers_focus['name_carrer'] . '</option>';
    }
} else {
    echo '<option value="">Selecione um item</option>          
          <option value="1">Back-End</option>
          <option value="2">Front-End</option>
          <option value="3">Full Stack</option>
          <option value="4">Mobile</option>';
}
?>