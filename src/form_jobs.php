<?php

$sql_jobs = 'SELECT * FROM rh_jobs
INNER JOIN english_levels ON rh_jobs.english_level = english_levels.id_english 
INNER JOIN carrers_focus ON rh_jobs.carrer_focus = carrers_focus.id_carrer
INNER JOIN experience_levels ON rh_jobs.experience_level = experience_levels.id_experience';
$result_jobs = mysqli_query($conection, $sql_jobs);
?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/error_message_login_user.php") ?>
        <div class="row mb-5">
            <?php
            $cont_job = 0;
            while($row_jobs = mysqli_fetch_array($result_jobs)):    
            ?>
            <?php if($cont_job == 0): $cont_job = 1;?>
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="card-img card-img-left" src="../assets/img/elements/12.jpg" alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_jobs['name'] ?></h5>
                                <p class="card-text"><?php echo $row_jobs['description'] ?></p>
                                <a type="button" href="?main_menu=view_job&job_id=<?php echo $row_jobs['id'] ?>" class="btn rounded-pill btn-outline-secondary">
                                    <span class="tf-icons bx bx-show"></span>&nbsp; Visualizar
                                </a>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: $cont_job = 0; ?>
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_jobs['name'] ?></h5>
                                <p class="card-text"><?php echo $row_jobs['description'] ?></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="card-img card-img-right" src="../assets/img/elements/17.jpg" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <?php endwhile; ?>
    </div>
</div>