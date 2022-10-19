<?php
$sql_edit_job = 'SELECT * FROM rh_jobs
INNER JOIN english_levels ON rh_jobs.english_level = english_levels.id_english 
INNER JOIN carrers_focus ON rh_jobs.carrer_focus = carrers_focus.id_carrer
INNER JOIN experience_levels ON rh_jobs.experience_level = experience_levels.id_experience
WHERE id = ' . $_GET['id'];
$result_edit_job = mysqli_query($conection, $sql_edit_job);
$row_edit_job = mysqli_fetch_array($result_edit_job);
?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_create_job.php") ?>
        <h4 class="fw-bold py-3 mb-4">Edição de vagas</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="data_edit_job.php" method="POST">
                            <input type="hidden" value="<?php echo $_GET['id'] ?>" name="job_id">
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="job_name">Nome da Vaga</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-code-curly"></i></span>
                                        <input type="text" class="form-control" id="job_name" name="job_name" value="<?php echo $row_edit_job['name'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="office">Cargo</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-user-pin"></i></span>
                                        <input type="text" class="form-control" id="office" name="office" value="<?php echo $row_edit_job['office'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="carrer-focus">Foco da Vaga</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-carrer-focus" class="input-group-text"><i
                                                class="bx bx-code-alt"></i></span>
                                        <select id="carrer_focus" name="carrer_focus" class="select2 form-select"
                                            aria-describedby="icon-carrer-focus">
                                            <?php include("./utils/sql_selects/job_skill_focus.php") ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="experience_level">Nível de Experiência</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-line-chart"></i></span>
                                        <select id="experience_level" name="experience_level"
                                            class="select2 form-select" aria-describedby="icon-level-experience">
                                            <?php include("./utils/sql_selects/job_experience_level.php") ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="english_level">Nível de Inglês</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-comment-dots"></i></span>
                                        <select id="english_level" name="english_level" class="select2 form-select"
                                            aria-describedby="icon-level-experience">
                                            <?php include("./utils/sql_selects/job_english_level.php") ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="salary">Média Salarial (mensal)</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-money"></i></span>
                                        <input type="text" class="form-control" id="salary" name="salary"
                                            placeholder="Exemplo: R$ 5.000,00" value="<?php echo number_format($row_edit_job['salary'], 2, ',', '.') ?>">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="descriptionUser" class="form-label">Descrição da Vaga</label>
                                    <textarea class="form-control" id="job_description" name="job_description"
                                        rows="3"><?php echo $row_edit_job['description'] ?></textarea>
                                </div>

                                <h6 class="mt-4">Habilidades da Vaga</h6>
                                <hr class="my-0">

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./partials/_footer_user_profile.php") ?>
</div>