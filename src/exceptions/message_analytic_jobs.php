<!-- VERIFICA SE A VAGA FOI DELETADA COM SUCESSO -->
<?php 
if(isset($_SESSION['status_delete_job_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Informações deletadas com sucesso!</strong> Vaga deletada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['status_delete_job_success']);
?>

<!-- ERRO AO DELETAR A VAGA -->
<?php
if(isset($_SESSION['status_delete_job_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para deletar a vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['status_delete_job_error']);
?>

<!-- SEM PERMISSÃO PARA DELETAR A VAGA -->
<?php
if(isset($_SESSION['status_not_permission_delete_job'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Aviso! </strong> Você não tem permissão para deletar este item.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['status_not_permission_delete_job']);
?>