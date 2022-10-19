<?php 
if($row_edit_job['name_english']){
    $sql_select_english_level = 'SELECT * FROM english_levels WHERE id_english != "' . $row_edit_job['id_english'] . '"';
    $result_select_english_level = mysqli_query($conection, $sql_select_english_level);
    echo '<option value=' . $row_edit_job['id_english'] . '>' . $row_edit_job['name_english'] . '</option>';
    while($row_select_english_level = mysqli_fetch_array($result_select_english_level)){
        echo '<option value=' . $row_select_english_level['id_english'] . '>' . $row_select_english_level['name_english'] . '</option>';
    }
} else {
    echo '<option value="">Selecione um item</option>
        <option value="1">Básico</option>
        <option value="2">Intermediário</option>
        <option value="3">Avançado</option>
        <option value="4">Fluente</option>';
}
?>