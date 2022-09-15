<!-- VERIFICA SE AS SKILLS DO USUÁRIO FORAM ATUALIZADAS -->
<?php 
if(isset($_SESSION['user_experience_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Informações atualizadas com sucesso!</strong> Suas habilidades foram atualizadas.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['user_experience_success']);
?>

<!-- ERRO AO ATUALIZAR SKILLS DO USUÁRIO -->
<?php
if(isset($_SESSION['user_experience_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para atualizar suas informações.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['user_experience_error']);
?>
