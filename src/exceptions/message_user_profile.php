<!-- VERIFICA USUÁRIO E SENHA -->
<?php
if(isset($_SESSION['user_profile_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Dados inválidos. </strong> Tivemos algum problema para atualizar as informações.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['user_profile_error']);
?>


<!-- VERIFICA CADASTRO EFETUADO -->
<?php 
if(isset($_SESSION['user_profile_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Informações atualizadas com sucesso!</strong> Seu perfil foi atualizado.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['user_profile_success']);
?>

<!-- ERRO AO DELETAR USUÁRIO -->
<?php
if(isset($_SESSION['status_delete_user_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para deletar o seu usuário.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['status_delete_user_error']);
?>

<!-- FALTA DE CONFIRMAÇÃO PARA DELETAR USUÁRIO -->
<?php
if(isset($_SESSION['status_confirm_delete_user_error'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Problemas ao deletar usuário. </strong> Por favor, confirme que você deseja deletar seu usuário.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['status_confirm_delete_user_error']);
?>
