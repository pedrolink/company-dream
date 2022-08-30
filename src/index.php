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
    <link rel="stylesheet" type="text/css" href="./style/login.css">
    <?php include("./partials/_header.php") ?>

    <title>Company Dream - Entrar</title>
</head>

<body style='background-image: url("./style/images/fundo.jpg")'>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <?php include("./exceptions/error_message_login_user.php") ?>
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <img src="./style/images/necktie.png" class="login-image" alt="Necktie" />
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <p class="text-white-50 mb-5">Por favor entre com seu usuário e senha!</p>
                                <form action="data_login.php" method="POST">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label d-flex justify-content-left"
                                            for="username">Usuário</label>
                                        <input type="test" name="user" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label d-flex justify-content-left"
                                            for="password">Senha</label>
                                        <input type="password" name="password" class="form-control form-control-lg" />
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu sua
                                            senha?</a>
                                    </p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Entrar</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Não tem uma conta? <a href="form_create_user.php"
                                        class="text-white-50 fw-bold">Cadastrar-se</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include("./partials/_scripts.php") ?>
</html>
