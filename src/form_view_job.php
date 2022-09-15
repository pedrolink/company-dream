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
        <form action="data_candidate.php" method="POST">
            <input type="hidden" name="job_id" value="<?php echo $_GET['job_id'] ?>">
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4">
                    <div class="card bg-dark border-0 text-white">
                        <img class="card-img" src="../assets/img/elements/11.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?php echo $row_job['name'] ?></h5>
                            <p class="card-text">
                                <?php echo $row_job['description'] ?>
                            </p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-8">
                    <!-- <small class="text-light fw-semibold">Informações da vaga</small> -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item card active">
                            <h2 class="accordion-header text-body d-flex justify-content-between"
                                id="accordionIconThree">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionIcon-3" aria-controls="accordionIcon-3"
                                    aria-expanded="true">
                                    <?php echo $row_job['office'] ?>
                                </button>
                            </h2>
                            <div id="accordionIcon-3" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionIcon" style="">
                                <div class="accordion-body">
                                    <p>teste</p>
                                    <p>teste</p>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-outline-primary">Candidatar-se</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 col-xl-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item card active">
                            <h2 class="accordion-header text-body d-flex justify-content-between" id="skillIconThree">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#skillIcon" aria-controls="skillIcon" aria-expanded="true">
                                    Habilidades
                                </button>
                            </h2>
                            <div id="skillIcon" class="accordion-collapse collapse show" data-bs-parent="#skillIcon"
                                style="">
                                <div class="accordion-body">
                                    <span class="badge rounded-pill bg-label-primary">Python</span>
                                    <span class="badge rounded-pill bg-label-primary">JavaScript</span>
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