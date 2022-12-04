<?php
$condition = '';

if (isset($_GET['job_status'])){
    $condition .= ' WHERE active = "' . $_GET['job_status'] . '"';
}

if ($_GET['job_name']){
    $condition .= ' AND name LIKE "%' . $_GET['job_name'] . '%"';
}

if ($_GET['job_carrer']){
    $condition .= ' AND office LIKE "%' . $_GET['job_carrer'] . '%"';
}

if ($_GET['job_salary']){
    $condition .= ' AND salary >= "' . $_GET['job_salary'] . '"';
}

if ($_GET['experience_level']){
    $condition .= ' AND experience_level = "' . $_GET['experience_level'] . '"';
}

$sql_jobs = 'SELECT * FROM rh_jobs
INNER JOIN english_levels ON rh_jobs.english_level = english_levels.id_english 
INNER JOIN carrers_focus ON rh_jobs.carrer_focus = carrers_focus.id_carrer
INNER JOIN experience_levels ON rh_jobs.experience_level = experience_levels.id_experience' . $condition . ' ORDER BY id DESC';
$result_jobs = mysqli_query($conection, $sql_jobs);

?>

<!-- <input type="hidden" name="main_menu" value="analytic_jobs"> -->

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_analytic_jobs.php") ?>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Recursos Humanos /</span> Análise de Vagas</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="?main_menu=analytic_jobs"><i class="bx bx-briefcase me-1"></i>
                            Análise de Vagas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?main_menu=talent_jobs"><i class="bx bx-bookmark-plus me-1"></i>
                            Banco de Talentos</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <div class="col-md-6 col-xl-12 mb-5">
                                <div class="card accordion-item" style="box-shadow: 0 0.125rem 0.25rem #9d9d9d">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button type="button" class="accordion-button collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#accordionThree"
                                            aria-expanded="false" aria-controls="accordionThree">
                                            Clique aqui para obter filtros avançados...
                                        </button>
                                    </h2>
                                    <div id="accordionThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-2" style="height: 180px">
                                            <div class="col-md-6 col-xl-12 mb-5">
                                                <form method="GET">
                                                    <input type="hidden" name="main_menu" value="analytic_jobs">
                                                    <div class="row mb-5">

                                                        <div class="mb-3 col-md-3">
                                                            <label class="form-label" for="job_name">Nome da
                                                                Vaga</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="icon-job-name" class="input-group-text"><i
                                                                        class="bx bx-code-curly"></i></span>
                                                                <input type="text" class="form-control" id="job_name"
                                                                    name="job_name" placeholder="Digite um nome..."
                                                                    value="<?php echo $_GET['job_name'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 col-md-3">
                                                            <label class="form-label" for="job_carrer">Cargo</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="icon-level-experience"
                                                                    class="input-group-text"><i
                                                                        class="bx bx-user-pin"></i></span>
                                                                <input type="text" class="form-control" id="job_carrer"
                                                                    name="job_carrer" placeholder="Digite um cargo..."
                                                                    value="<?php echo $_GET['job_carrer'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 col-md-2">
                                                            <label class="form-label" for="job_salary">Salário</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="icon-level-experience"
                                                                    class="input-group-text"><i
                                                                        class="bx bx-money"></i></span>
                                                                <input type="text" class="form-control" id="job_salary"
                                                                    name="job_salary" placeholder="Digite um salário..."
                                                                    value="<?php echo $_GET['job_salary'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 col-md-2">
                                                            <label class="form-label"
                                                                for="job_experience">Experiência</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="icon-level-experience"
                                                                    class="input-group-text"><i
                                                                        class="bx bx-line-chart"></i></span>
                                                                <select id="experience_level" name="experience_level"
                                                                    class="select2 form-select"
                                                                    aria-describedby="icon-level-experience">
                                                                    <option value="">Selecione</option>
                                                                    <option value="1">Júnior</option>
                                                                    <option value="2">Pleno</option>
                                                                    <option value="3">Sênior</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 col-md-2">
                                                            <label class="form-label" for="job_status">Status</label>
                                                            <div class="input-group input-group-merge">
                                                                <span id="icon-level-experience"
                                                                    class="input-group-text"><i
                                                                        class='bx bx-stats'></i></span>
                                                                <select name="job_status" class="select2 form-select"
                                                                    aria-describedby="icon-level-experience">
                                                                    <option value="1">Ativa</option>
                                                                    <option value="0">Desativa</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="mt-4">
                                                            <button type="submit"
                                                                class="btn btn-primary me-2">Pesquisar</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Cargo</th>
                                        <th>Salário</th>
                                        <th>Experiência</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php if ($result_jobs->num_rows > 0): ?>
                                    <?php while($row_jobs = mysqli_fetch_array($result_jobs)): ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong><?php echo $row_jobs['name'] ?></strong></td>
                                        <td><?php echo $row_jobs['office'] ?></td>
                                        <td><?php echo 'R$ ' . number_format($row_jobs['salary'], 2, ',', '.') ?>
                                        </td>
                                        <td><?php echo $row_jobs['name_experience'] ?></td>

                                        <?php if ($row_jobs['active'] == 1): ?>
                                        <td><span class="badge bg-label-success me-1">Ativa</span></td>
                                        <?php else: ?>
                                        <td><span class="badge bg-label-danger me-1">Desativa</span></td>
                                        <?php endif; ?>

                                        <?php 
                                        $sql_users_in_job = 'SELECT * FROM candidates_vacancy 
                                        INNER JOIN users ON candidates_vacancy.id_user = users.id
                                        WHERE id_job = ' . $row_jobs['id'] . '
                                        ORDER BY candidates_vacancy.points
                                        LIMIT 3';
                                        $result_users_in_job = mysqli_query($conection, $sql_users_in_job);
                                        ?>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <?php while($row_users_in_job = mysqli_fetch_array($result_users_in_job)): ?>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up" title=""
                                                    data-bs-original-title="<?php echo $row_users_in_job['first_name'] . ' ' . $row_users_in_job['last_name'] ?>">
                                                    <?php if ($row_users_in_job['user_image']) : ?>
                                                    <img src="./images/user/<?php echo $row_users_in_job['user_image'] ?>"
                                                        alt="Avatar" class="rounded-circle">
                                                    <?php else: ?>
                                                    <img src="../assets/img/avatars/default-avatar-1.png" alt="Avatar"
                                                        class="rounded-circle">
                                                    <?php endif ?>
                                                </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item"
                                                        href="?main_menu=edit_job&id=<?php echo $row_jobs['id'] ?>"><i
                                                            class="bx bx-edit-alt me-1"></i> Editar</a>
                                                    <a class="dropdown-item"
                                                        href="?main_menu=analytic_user_jobs&id=<?php echo $row_jobs['id'] ?>"><i
                                                            class="bx bx-analyse me-1"></i> Análise</a>
                                                    <?php
                                                    $sql_select_users_exist = 'SELECT * FROM select_job_users WHERE job_id = ' . $row_jobs['id'];
                                                    $result_select_users_exist = mysqli_query($conection, $sql_select_users_exist);                                                    
                                                    ?>
                                                    <?php if($result_select_users_exist->num_rows > 0): ?>
                                                        <a class="dropdown-item"
                                                        href="?main_menu=selected_users&id=<?php echo $row_jobs['id'] ?>"><i
                                                            class="bx bxs-star me-1"></i> Selecionados</a>
                                                    <?php endif; ?>
                                                    <a class="dropdown-item"
                                                        href="data_delete_job.php?id=<?php echo $row_jobs['id'] ?>"><i
                                                            class="bx bx-trash me-1"></i> Deletar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>
                                            Nenhum registro encontrado...
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./partials/_footer_user_profile.php") ?>
</div>

<script>
    document.getElementById('menu-home').className = 'menu-item';
    document.getElementById('menu-tools').className = 'menu-item active open';
    document.getElementById('menu-create-job').className = 'menu-item';
    document.getElementById('menu-analytic-jobs').className = 'menu-item active';
    document.getElementById('menu-admin-panel').className = 'menu-item';
    document.getElementById('menu-my-candidancy').className = 'menu-item';
    document.getElementById('menu-gest').className = 'menu-item';
</script>
