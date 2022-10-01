<?php
$condition = '';
if (isset($_GET['search'])){
    $condition .= ' WHERE name LIKE "%' . $_GET['search'] . '%"';
}
$sql_jobs = 'SELECT * FROM rh_jobs
INNER JOIN english_levels ON rh_jobs.english_level = english_levels.id_english 
INNER JOIN carrers_focus ON rh_jobs.carrer_focus = carrers_focus.id_carrer
INNER JOIN experience_levels ON rh_jobs.experience_level = experience_levels.id_experience' . $condition;
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
                                    <div class="card accordion-item">
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
                                                <div class="col-md-6 col-xl-4 mb-5">
                                                    <form action="data_create_job.php" method="GET">
                                                        <div class="row">

                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="job_name">Nome da
                                                                    Vaga</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span id="icon-level-experience"
                                                                        class="input-group-text"><i
                                                                            class="bx bx-money"></i></span>
                                                                    <input type="text" class="form-control"
                                                                        id="job_name" name="job_name">
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
                                        <?php while($row_jobs = mysqli_fetch_array($result_jobs)): ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo $row_jobs['name'] ?></strong></td>
                                            <td><?php echo $row_jobs['office'] ?></td>
                                            <td><?php echo 'R$ ' . number_format($row_jobs['salary'], 2, ',', '.') ?>
                                            </td>
                                            <td><?php echo $row_jobs['name_experience'] ?></td>

                                            <?php if ($row_jobs['active'] == 0): ?>
                                            <td><span class="badge bg-label-success me-1">Ativa</span></td>
                                            <?php else: ?>
                                            <td><span class="badge bg-label-danger me-1">Desativa</span></td>
                                            <?php endif; ?>

                                            <td>
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="" data-bs-original-title="Lilian Fuller">
                                                        <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="" data-bs-original-title="Sophia Wilkerson">
                                                        <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="" data-bs-original-title="Christina Parker">
                                                        <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu" style="">
                                                        <a class="dropdown-item" href="?main_menu=edit_job&id=<?php echo $row_jobs['id'] ?>"><i
                                                                class="bx bx-edit-alt me-1"></i> Editar</a>
                                                        <a class="dropdown-item" href="data_delete_job.php?id=<?php echo $row_jobs['id'] ?>"><i
                                                                class="bx bx-trash me-1"></i> Deletar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>