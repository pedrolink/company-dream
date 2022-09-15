<!-- VERIFICA USUÁRIO E SENHA -->
<?php
if(isset($_SESSION['not_authenticate'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Usuário ou senha inválidos!</strong> Preencha os campos novamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['not_authenticate']);
?>


<!-- VERIFICA CADASTRO EFETUADO -->
<?php 
if(isset($_SESSION['create_status_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuário cadastrado!</strong> Preencha os campos para realizar o login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['create_status_success']);
?>

<!-- USUÁRIO DELETADO COM SUCESSO -->
<?php 
if(isset($_SESSION['status_delete_user_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuário deletado com sucesso!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['status_delete_user_success']);
?>

<!-- USUÁRIO DELETADO COM SUCESSO -->
<?php 
if(isset($_SESSION['user_authenticate'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuário logado com sucesso!</strong> Aproveite nosso sistema!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['user_authenticate']);
?>
