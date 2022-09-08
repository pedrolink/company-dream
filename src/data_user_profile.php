<?php
session_start();
include("conection.php");

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone_number = trim($_POST['phone_number']);
$address = trim($_POST['address']);
$city = trim($_POST['city']);
$cep = trim($_POST['cep']);
$state = trim($_POST['state']);
$district = trim($_POST['district']);
$birth_date = date('Y-m-d', strtotime(trim($_POST['birth_date'])));
$url_linkedin = trim($_POST['url_linkedin']);
$url_cloud = trim($_POST['url_cloud']);
$user_description = trim($_POST['user_description']);

$user_image = $_FILES['file'];
$file_temp = $user_image['tmp_name'];
$file_size = $user_image['size'];
$location = 'images/user/';
echo $user_image;

// $user_image = trim($_POST['user_image']);


// $email = trim($_POST['email']);
// $data_nascimento = date('Y-m-d', strtotime(trim($_POST['data_nascimento'])));
// $pretencao_salarial = trim(str_replace(',', '.', str_replace('.', '', $_POST['pretencao_salarial'])));

$sql_user = 'SELECT * FROM users WHERE user = "' . $_SESSION['user'] . '"';
$result_user = mysqli_query($conection, $sql_user);
$row_user = mysqli_fetch_array($result_user);

$user_id = $row_user['id'];

$sql_user_address = 'SELECT * FROM user_address WHERE user_id = "' . $user_id . '"';
$result_user_address = $conection->query($sql_user_address);
$row_user_address = mysqli_fetch_array($result_user_address);

if ($file_size <= 0){
    // TODO: Verificar
    $new_name_image = trim($_POST['input_user_image']);
} else {
    $new_name_image = date("dmy") . time() . $user_image["name"];
    $archive_image = 'images/profile_images/' . $row_user['user_image'];
    $delete_image = unlink($archive_image);
}


//TODO: Atualiza informações do perfil do usuário
$sql_update_user = 'UPDATE users SET first_name = "' . $first_name . '", last_name = "' . $last_name .
        '", email = "' . $email . '", birth_date = "' . $birth_date . '", phone_number = "' . $phone_number .
        '", url_linkedin = "' . $url_linkedin . '", url_cloud = "' . $url_cloud . '", user_image = "' . $new_name_image .
        '", user_description = "' . $user_description . '" WHERE id = "' . $user_id . '"';


// TODO: Insere ou atualiza informações de endereço do usuário
if ($result_user_address->num_rows > 0) {
    $sql_update_user_address = 'UPDATE user_address SET address = "' . $address . '", city = "' . $city .
        '", cep = "' . $cep . '", state = "' . $state . '", district = "' . $district .
        '" WHERE user_id = "' . $user_id . '"';

    if ($conection->query($sql_update_user) === TRUE and $conection->query($sql_update_user_address) === TRUE) {
        move_uploaded_file($file_temp, $location . $new_name_image);
        $_SESSION['user_profile_success'] = true;
    } else {
        $_SESSION['user_profile_error'] = true;
    }
} else {
    $sql_update_user_address = "INSERT INTO user_address (user_id, address, city, cep, state, district) 
    VALUES ('$user_id', '$address', '$city', '$cep', '$state', '$district')";

    if($conection->query($sql_update_user_address) === TRUE and $conection->query($sql_update_user) === TRUE){
        move_uploaded_file($file_temp, $location . $new_name_image);
        $_SESSION['user_profile_success'] = true;
    } else {
        $_SESSION['user_profile_error'] = true;
    }
}

$conection->close();

header('Location: form_painel.php?main_menu=user_profile');
exit;

?>