<?php
$sql_job = 'SELECT * FROM rh_jobs
INNER JOIN english_levels ON rh_jobs.english_level = english_levels.id_english 
INNER JOIN carrers_focus ON rh_jobs.carrer_focus = carrers_focus.id_carrer
INNER JOIN experience_levels ON rh_jobs.experience_level = experience_levels.id_experience
WHERE id = ' . $_GET['job_id'];
$result_job = mysqli_query($conection, $sql_job);
$row_job = mysqli_fetch_array($result_job);
?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_view_jobs.php") ?>
        <h4 class="fw-bold py-3 mb-4"><?php echo $row_job['name'] ?></h4>
        <form action="data_candidate.php" method="POST">
            <input type="hidden" name="job_id" value="<?php echo $_GET['job_id'] ?>">
            <div class="row mb-5">
                <div class="col-md-6 col-xl-12">
                    <div class="card shadow-none bg-transparent border border-secondary mb-3" style="height: 90%">
                        <div class="row mb-5" style="margin-top: 30px; margin-left: 20px">
                            <div class="col-md-6 col-xl-1">
                                <?php if($row_job['job_image']): ?>
                                    <img src="../images/jobs/<?php echo $row_job['job_image'] ?>" alt="user-avatar"
                                        class="d-block rounded" id="uploadedAvatar" width="100" height="100">
                                <?php else: ?>
                                    <img src="./assets/img/illustrations/not_found_job.jpg" alt="user-avatar"
                                    class="d-block rounded" id="uploadedAvatar" width="100" height="100">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 col-xl-2" style="margin-left: 30px">
                                <p class="card-text">
                                    <i class="bx bx-user-pin"></i> <?php echo $row_job['office'] ?>
                                </p>
                                <p class="card-text">
                                    <i class="bx bx-line-chart" style="margin-top: -5px"></i>
                                    <?php echo $row_job['name_experience'] ?>
                                </p>
                                <p class="card-text">
                                    <i class="bx bx-code-alt"></i> <?php echo $row_job['name_carrer'] ?>
                                </p>
                            </div>
                            <div class="col-md-6 col-xl-2" style="margin-left: 10px">
                                <p class="card-text">
                                    <i class="bx bx-comment-dots"></i> <?php echo $row_job['name_english'] ?>
                                </p>
                                <p class="card-text">
                                    <i class="bx bx-money"></i>
                                    <?php echo 'R$ ' . number_format($row_job['salary'], 2, ',', '.') ?>
                                </p>
                                <p class="card-text">
                                    <i class='bx bx-map' ></i>
                                    <?php echo $row_job['local'] ?>
                                </p>
                            </div>

                            <div class="col-md-6 col-xl-6" style="margin-left: 10px">
                                <h5 class="card-title">Descrição da vaga</h5>
                                <p class="card-text"><?php echo $row_job['description'] ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mb-5" style="margin-top: -35px">
                <div class="col-md-6 col-xl-12">
                    <p class="demo-inline-spacing">
                        <button class="btn btn-secondary me-1 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2">
                            <span class="tf-icons bx bx-right-down-arrow-circle"
                                style="margin-left: -3px"></span>&nbsp;Requisitos da vaga
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <span class="tf-icons bx bx-check-square" style="margin-left: -3px"></span>&nbsp; Quero me
                            inscrever
                        </button>
                    </p>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2 mb-md-0">
                            <div class="multi-collapse collapse" id="multiCollapseExample1" style="">
                                <div class="d-grid d-sm-flex p-3 border">
                                    <img src="../assets/img/illustrations/brain_choice.png" alt="collapse-image"
                                        class="me-4 mb-sm-0 mb-2" height="125">
                                    <span>
                                        <h5 class="card-title">Habilidades</h5>
                                        <?php
                                    $sql_skills_job = 'SELECT * FROM rh_jobs_skills 
                                    INNER JOIN skills ON rh_jobs_skills.skill_id = skills.id
                                    WHERE id_job = ' . $row_job['id'];
                                    $result_skills_job = mysqli_query($conection, $sql_skills_job);                         
                                    ?>
                                        <?php while($row_skills_job = mysqli_fetch_array($result_skills_job)): ?>
                                        <span class="badge bg-label-primary"
                                            style="margin-top: 10px;"><?php echo $row_skills_job['name'] ?></span>
                                        <?php endwhile; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="multi-collapse collapse" id="multiCollapseExample2" style="">
                                <div class="d-grid d-sm-flex p-3 border">
                                    <img src="../assets/img/illustrations/info.png" alt="collapse-image"
                                        class="me-4 mb-sm-0 mb-2" height="125">
                                    <span>
                                    <h5 class="card-title">Benefícios</h5>
                                        Vale alimentação: R$ 1.500,00 | Plano de Saúde</br>
                                        Auxílio Creche: R$ 1.000,00 </br>
                                        Auxílio Educação: R$ 600,00</br>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php include("./partials/_footer_user_profile.php") ?>

    <div class="content-backdrop fade"></div>
</div>