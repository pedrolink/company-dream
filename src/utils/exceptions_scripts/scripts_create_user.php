<!-- VERIFICA SE USUÁRIO EXISTE -->
<script>
    const user = document.getElementById('user').className = "form-control";
    const email = document.getElementById('email').className = "form-control";
</script>
<?php 

if(isset($_SESSION['user_exist'])):
?>
    <script>
        const user = document.getElementById('user').className = "form-control is-invalid";
    </script>
<?php
elseif (isset($_SESSION['user_accept'])):
?>
    <script>
        const user = document.getElementById('user').className = "form-control is-valid";
    </script>
<?php
endif;
unset($_SESSION['user_accept']);
unset($_SESSION['user_exist']);
?>

<!-- VERIFICA SE E-MAIL EXISTE -->
<?php 
if(isset($_SESSION['email_exist'])):
?>
    <script>
        const email = document.getElementById('email').className = "form-control is-invalid";
    </script>
<?php
elseif (isset($_SESSION['email_accept'])):
?>
    <script>
        const email = document.getElementById('email').className = "form-control is-valid";
    </script>
<?php
endif;
unset($_SESSION['email_accept']);
unset($_SESSION['email_exist']);
?>


<!-- VERIFICA SE AS SENHAS SÃO IGUAIS -->
<?php 
if(isset($_SESSION['password_not_equal'])):
?>
    <script>
        const password = document.getElementById('password').className = "form-control is-invalid";
        const confirm_password = document.getElementById('confirm_password').className = "form-control is-invalid";
    </script>
<?php
endif;
unset($_SESSION['password_not_equal']);
?>
