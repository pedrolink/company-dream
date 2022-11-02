<?php 
if ($row_select_total_users['status'] == 1){
    echo '<option value="1">Ativado</option>
        <option value="0">Desativado</option>';
} else {
    echo '<option value="0">Desativado</option>
        <option value="1">Ativado</option>';
}
?>