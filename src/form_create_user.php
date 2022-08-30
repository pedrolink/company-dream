<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link's -->
    <?php include("./partials/_header.php") ?>
    <link rel="stylesheet" type="text/css" href="./style/login.css">
    <title>Company Dream - Cadastro</title>
</head>

<body style='background-image: url("./style/images/fundo.jpg")'>
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    
                    <!-- EXCESSÕES DO FORMULÁRIO -->
                    <?php include ("./exceptions/error_message_create_user.php")?>

                    <div class="card bg-dark text-light" style="border-radius: 25px;">

                        <div class="card-body p-md-5">
                        <?php include("./style/images/arrow.svg") ?>

                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cadastro</p>

                                    <form action="data_create_user.php" method="POST" class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">Nome</label>
                                                <input type="text" name="name" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="user">Usuário</label>
                                                <input type="text" name="user" id="user" class="form-control" required/>
                                                <div class="valid-feedback">
                                                    Parece bom!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Por favor, informe outro usuário.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">E-mail</label>
                                                <input type="email" id="email" name="email" class="form-control" required/>
                                                <div class="valid-feedback">
                                                    Parece bom!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Por favor, informe outro e-mail.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Senha</label>
                                                <input type="password" id="password" name="password" class="form-control" required/>
                                                <div class="invalid-feedback">
                                                    Verifique se as senhas foram preenchidas corretamente.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="confirm_password">Confirme sua
                                                    senha</label>
                                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="is_checked"
                                                name="accept_terms" required/>
                                            <label class="form-check-label" for="accept_terms">
                                                Eu li e aceito os <a href="#!">Termos de Serviço</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button class="btn btn-outline-light btn-lg px-5"
                                                type="submit">Registrar</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">                                    
                                    <img src="./style/images/create.png" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php 
include("./partials/_scripts.php");
include("./utils/exceptions_scripts/scripts_create_user.php")
?>
</html>
