<?php
$job_id = $_GET['id'];
$sql_analytic_users_job = 'SELECT * FROM rh_jobs
INNER JOIN english_levels ON rh_jobs.english_level = english_levels.id_english 
INNER JOIN carrers_focus ON rh_jobs.carrer_focus = carrers_focus.id_carrer
INNER JOIN experience_levels ON rh_jobs.experience_level = experience_levels.id_experience
WHERE id = ' . $job_id;
$result_analytic_users_job = mysqli_query($conection, $sql_analytic_users_job);
$row_analytic_users_job = mysqli_fetch_array($result_analytic_users_job);

$sql_candidates = 'SELECT * FROM candidates_vacancy WHERE id_job = "' . $job_id . '" ORDER BY points';
$result_candidates = mysqli_query($conection, $sql_candidates);
?>

<!-- <input type="hidden" name="main_menu" value="analytic_jobs"> -->

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_talent_bank.php") ?>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Recursos Humanos /</span>
            <?php echo $row_analytic_users_job['name'] ?></h4>

        <div class="row">
            <div class="col-md-12">
                <?php while($row_candidates = mysqli_fetch_array($result_candidates)): ?>
                <?php
                    $sql_user = 'SELECT * FROM users
                                 INNER JOIN user_experience ON users.id = user_experience.user_id
                                 INNER JOIN english_levels ON user_experience.english_level = english_levels.id_english
                                 INNER JOIN carrers_focus ON user_experience.carrer_focus = carrers_focus.id_carrer
                                 INNER JOIN experience_levels ON user_experience.experience_level = experience_levels.id_experience
                                 WHERE users.id = ' . $row_candidates['id_user'];
                    $result_user = mysqli_query($conection, $sql_user);
                    $row_user = mysqli_fetch_array($result_user);
                ?>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row_user['first_name'] . ' ' . $row_user['last_name'] ?></h5>
                                    <h6 class="card-subtitle text-muted"><?php echo $row_user['email'] ?></h6>

                                    <?php if ($row_user['user_image']) : ?>
                                        <!-- IMAGEM DO USUÁRIO -->
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img
                                                class="img-fluid d-flex mx-auto my-4"
                                                src="./images/user/<?php echo $row_user['user_image'] ?>"
                                                alt="Card image cap"></a>
                                    <?php else: ?>
                                        <!-- IMAGEM DO USUÁRIO -->
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img
                                                class="img-fluid d-flex mx-auto my-4"
                                                src="../assets/img/avatars/default-avatar-1.png" alt="Card image cap"></a>
                                    <?php endif ?>
                                    
                                    <!-- <p class="card-text">Telefone <?php echo $row_user['phone_number'] ?></p> -->
                                    <a class="card-link" href="<?php echo $row_user['url_linkedin'] ?>"
                                        target="_blank"><i style="margin-top: -2px"
                                            class="bx bxl-linkedin-square me-1"></i> LinkedIn</a>
                                    <!-- <a href="javascript:void(0);" class="card-link">Perfil Usuário</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('./popups/popup_user_analytic.php') ?>
                <?php endwhile ?>
            </div>
        </div>
    </div>
    <?php include("./partials/_footer_user_profile.php") ?>
</div>