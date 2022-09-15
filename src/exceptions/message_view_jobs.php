<!-- CANDIDATURA REALIZADA COM SUCESSO -->
<?php 
if(isset($_SESSION['insert_candidate_success'])):
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Você candidatou-se para a vaga!</strong> Agora é só aguardar o retorno dos recrutadores...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
endif;
unset($_SESSION['insert_candidate_success']);
?>

<!-- ERRO AO FAZER CANDIDATURA -->
<?php
if(isset($_SESSION['insert_candidate_error'])):
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro </strong> Tivemos um problema para candidatar-se na vaga.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['insert_candidate_error']);
?>

<!-- CANDIDATURA EXISTENTE -->
<?php
if(isset($_SESSION['insert_candidate_exists'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Ops! </strong> Parece que você já está participando deste processo seletivo.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['insert_candidate_exists']);
?>
