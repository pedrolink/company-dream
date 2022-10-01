<!-- VERIFICA CADASTRO DA VAGA EFETUADO COM SUCESSO -->
<?php 
if(isset($_SESSION['insert_job_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Informações cadastrada com sucesso!</strong> Vaga cadastrada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['insert_job_success']);
?>

<!-- ERRO AO CADASTRAR VAGA -->
<?php
if(isset($_SESSION['insert_job_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para cadastrar a vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['insert_job_error']);
?>

<!-- VERIFICA SE A VAGA FOI ATUALIZADA COM SUCESSO -->
<?php 
if(isset($_SESSION['update_job_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Informações atualizadas com sucesso!</strong> Vaga atualizada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['update_job_success']);
?>

<!-- ERRO AO ATUALIZAR A VAGA -->
<?php
if(isset($_SESSION['update_job_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para atualizar a vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['update_job_error']);
?>
