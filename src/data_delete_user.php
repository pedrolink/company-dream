<?php
session_start();
include("conection.php");

$confirm_delete_user = trim($_POST['confirm_delete_user']);
$delete_user_id = trim($_POST['delete_user_id']);

$sql_user_image = 'SELECT user_image FROM users WHERE id = "' . $delete_user_id . '"';
$result_user_image = mysqli_query($conection, $sql_user_image);
$row_user_image = mysqli_fetch_array($result_user_image);

if ($confirm_delete_user == 'value_confirm_delete'){
    $sql_delete_user = 'DELETE FROM users WHERE id = "'. $delete_user_id . '"';
    if ($row_user_image['user_image']){
        $archive_image = 'images/user/' . $row_user_image['user_image'];
        $delete_user_image = unlink($archive_image);
    }
    
    if($conection->query($sql_delete_user) === TRUE){
        $_SESSION['status_delete_user_success'] = true;
        $conection->close();
        session_destroy();
        header('Location: index.php');
    } else {
        $_SESSION['status_delete_user_error'] = true;
        $conection->close();
        header('Location: form_painel.php?main_menu=user_profile');
    }    
} else {
    $_SESSION['status_confirm_delete_user_error'] = true;
    $conection->close();
    header('Location: form_painel.php?main_menu=user_profile');
}
exit();
?>
