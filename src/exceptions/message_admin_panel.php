<!-- VERIFICA SE A VAGA FOI DELETADA COM SUCESSO -->
<?php 
if(isset($_SESSION['update_status_user_permission_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucesso!</strong> Informações do usuário atualizadas.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['update_status_user_permission_success']);
?>

<!-- ERRO AO DELETAR A VAGA -->
<?php
if(isset($_SESSION['update_status_user_permission_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro. </strong> Tivemos um problema atualizar as informações do usuário.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['update_status_user_permission_error']);
?>
