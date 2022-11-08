<?php
session_start();
include("conection.php");


// POST ITENS
$name = mysqli_real_escape_string($conection, trim($_POST['name']));
$user = mysqli_real_escape_string($conection, trim($_POST['user']));
$password = mysqli_real_escape_string($conection, trim(md5($_POST['password'])));
$confirm_password = mysqli_real_escape_string($conection, trim(md5($_POST['confirm_password'])));
$email = mysqli_real_escape_string($conection, trim($_POST['email']));
$accept_terms = mysqli_real_escape_string($conection, trim($_POST['accept_terms']));


// QUERY SELECTORS
$query_search_user = "SELECT COUNT(*) AS search_user FROM users WHERE user = '$user'";
$result_user = mysqli_query($conection, $query_search_user);
$row_user = mysqli_fetch_assoc($result_user);

$query_search_email = "SELECT COUNT(*) AS search_email FROM users WHERE email = '$email'";
$result_email = mysqli_query($conection, $query_search_email);
$row_email = mysqli_fetch_assoc($result_email);


// INSPECT FORM EXIST
$message_errors = 0;

if($row_user['search_user'] >= 1){
    $_SESSION['user_exist'] = true;
    $message_errors += 1;
} else {
    $_SESSION['user_accept'] = true;
}

if ($row_email['search_email'] >= 1){
    $_SESSION['email_exist'] = true;
    $message_errors += 1;
} else {
    $_SESSION['email_accept'] = true;
}

if ($password != $confirm_password){
    $_SESSION['password_not_equal'] = true;
    $message_errors += 1;
    
}

if ($accept_terms == 'is_checked'){
    $accept_terms = 1;
}


// VERIFICA MENSAGENS DE ERRO
if ($message_errors >= 1){
    include("./utils/scripts/window_script.php");
    exit;
}

$query_insert_user = "INSERT INTO users (first_name, user, password, create_date, email, accept_terms) 
                      VALUES ('$name', '$user', '$password', NOW(), '$email', $accept_terms)";

if($conection->query($query_insert_user) === TRUE){
    $_SESSION['create_status_success'] = true;
} else {
    $_SESSION['create_status_error'] = true;
    header('Location: form_create_user.php');
    exit;
}

$conection->close();
header('Location: index.php');
exit;
?>
