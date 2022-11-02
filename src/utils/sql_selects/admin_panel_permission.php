<?php 
if($row_select_total_users['name_permission']){
    $sql_select_permission_user = 'SELECT * FROM user_permissons WHERE id_permission != "' . $row_select_total_users['id_permission'] . '"';
    $result_select_permission_user = mysqli_query($conection, $sql_select_permission_user);
    echo '<option value=' . $row_select_total_users['id_permission'] . '>' . $row_select_total_users['name_permission'] . '</option>';
    while($row_select_permission_user = mysqli_fetch_array($result_select_permission_user)){
        echo '<option value=' . $row_select_permission_user['id_permission'] . '>' . $row_select_permission_user['name_permission'] . '</option>';
    }
} else {
    echo '<option value="">Selecione um item</option>          
          <option value="1">Admin</option>
          <option value="2">Funcionário</option>
          <option value="3">Usuário</option>';
}
?>