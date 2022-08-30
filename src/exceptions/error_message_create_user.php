<!-- VERIFICA SE INSERIU USUÁRIO NO BANCO DE DADOS -->
<?php 
if(isset($_SESSION['create_status_error'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Tivemos um problema!</strong> Entre em contato com o administrador do site.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
endif;
unset($_SESSION['create_status_error']);
?>
