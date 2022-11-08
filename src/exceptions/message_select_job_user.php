<!-- VERIFICA SE EXISTE USUÁRIO NAS SELEÇÕES DA VAGA -->
<?php 
if(isset($_SESSION['select_job_user_exist'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Atenção!</strong> Este usuário já está selecionado para esta vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['select_job_user_exist']);
?>

<!-- USUÁRIO SELECIONADO PARA A VAGA -->
<?php 
if(isset($_SESSION['insert_select_job_user_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucesso!</strong> Usuário selecionado para a vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['insert_select_job_user_success']);
?>

<!-- ERRO AO SELECIONAR USUÁRIO PARA A VAGA -->
<?php
if(isset($_SESSION['insert_select_job_user_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para selecionar o usuário para a vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['insert_select_job_user_error']);
?>