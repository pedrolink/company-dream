<!-- VERIFICA SE EXISTE USUÁRIO NO BANCO DE TALENTOS -->
<?php 
if(isset($_SESSION['user_talent_bank_exists'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Atenção!</strong> Este usuário já está no banco de talentos para esta vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['user_talent_bank_exists']);
?>

<!-- VERIFICA CADASTRO EFETUADO -->
<?php 
if(isset($_SESSION['insert_user_talent_bank_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucesso!</strong> Usuário adicionado no banco de talentos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['insert_user_talent_bank_success']);
?>

<!-- ERRO AO CADASTRAR USUÁRIO NO BANCO DE TALENTOS -->
<?php
if(isset($_SESSION['insert_user_talent_bank_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para inserir o usuário no banco de talentos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['insert_user_talent_bank_error']);
?>