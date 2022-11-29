<?php

$server = "db";
$user = "root";
$password = "example";
$data_base = "company_db";

$conection = new mysqli($server, $user, $password, $data_base);

if ($conection -> connect_errno) {
  echo "Falha ao conectar no banco de dados MySQL: " . $conection -> connect_error;
  exit();
}

?>