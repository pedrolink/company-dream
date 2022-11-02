<?php
include("conection.php");
session_start();

$sql_user = 'SELECT * FROM users WHERE user = "' . $_SESSION['user'] . '"';
$result_user = mysqli_query($conection, $sql_user);
$row_user = mysqli_fetch_array($result_user);

$sql_user_address = 'SELECT * FROM user_address WHERE user_id = "' . $row_user['id'] . '"';
$result_user_address = mysqli_query($conection, $sql_user_address);
$row_user_address = mysqli_fetch_array($result_user_address);

$sql_user_experience = 'SELECT * FROM user_experience 
                        INNER JOIN english_levels ON user_experience.english_level = english_levels.id_english 
                        INNER JOIN carrers_focus ON user_experience.carrer_focus = carrers_focus.id_carrer
                        INNER JOIN experience_levels ON user_experience.experience_level = experience_levels.id_experience
                        WHERE user_id = "' . $row_user['id'] . '"';                     
$result_user_experience = mysqli_query($conection, $sql_user_experience);
$row_user_experience = mysqli_fetch_array($result_user_experience);

?>

<!DOCTYPE html>
<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
    <?php include("./partials/_header_assets.php") ?>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
                <div class="app-brand demo">
                    <a href="form_painel.php" class="app-brand-link">
                        <img width="60" src="./style/images/necktie.png" style="margin-left: -25px" />
                        <span class="app-brand-text menu-text fw-bolder ms-2">Company Dream</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1 ps ps--active-y">

                    <li class="menu-item active">
                        <a href="form_painel.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Home</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="?main_menu=my_candidancy" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-plus"></i>
                            <div data-i18n="Analytics">Minhas Candidaturas</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Recursos Humanos</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Ferramentas</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item" id="cadastro_vaga">
                                <a href="?main_menu=create_jobs" class="menu-link">
                                    <div data-i18n="Without menu">Cadastrar Vagas</div>
                                </a>
                            </li>
                        </ul>

                        <ul class="menu-sub">
                            <li class="menu-item" id="cadastro_vaga">
                                <a href="?main_menu=analytic_jobs" class="menu-link">
                                    <div data-i18n="Without menu">Análise Vagas</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Administrador</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Layouts">Gestão</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item" id="cadastro_vaga">
                                <a href="?main_menu=admin_panel" class="menu-link">
                                    <div data-i18n="Without menu">Painel Administrativo</div>
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <form method="GET" id="search_form">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input type="text" class="form-control border-0 shadow-none" name="search"
                                        id="search" placeholder="Procurar..." aria-label="Procurar...">
                                </div>
                            </form>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <span></span>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt=""
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt=""
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="form_painel.php?main_menu=user_profile">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Meu Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Configurações</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="data_logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Sair</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <?php
        // TODO: Include Forms
        if (empty($_GET['main_menu']) or $_GET['main_menu'] == 'jobs') {
            include './form_jobs.php';
        }

        if (isset($_GET['main_menu'])) {
            if ($_GET['main_menu'] == 'user_profile') {
                include './form_user_profile.php';
            }

            if ($_GET['main_menu'] == 'user_skills') {
                include './form_user_skills.php';
            }

            if ($_GET['main_menu'] == 'create_jobs') {
                include './form_create_jobs.php';
            }

            if ($_GET['main_menu'] == 'view_job') {
                include './form_view_job.php';
            }

            if ($_GET['main_menu'] == 'analytic_jobs') {
                include 'form_analytic_jobs.php';
            }

            if ($_GET['main_menu'] == 'edit_job') {
                include 'form_edit_job.php';
            }

            if ($_GET['main_menu'] == 'talent_jobs') {
                include 'form_talent_jobs.php';
            }

            if ($_GET['main_menu'] == 'analytic_user_jobs') {
                include 'form_analytic_users_jobs.php';
            }

            if ($_GET['main_menu'] == 'my_candidancy') {
                include 'form_my_candidancys.php';
            }

            if ($_GET['main_menu'] == 'admin_panel') {
                include 'form_admin_panel.php';
            }
        }
        ?>
            </div>
        </div>
    </div>

    <?php include("./partials/_footer_assets.php") ?>
    <script>
        function open_view(id, menu_id) {
            document.getElementById(id).className = 'menu-item active';

        }

        // SEARCH INPUT
        var input = document.getElementById("search");
        input.addEventListener("keypress", function (event) {

            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("search_form").submit();
            }
        });
    </script>
</body>

</html>