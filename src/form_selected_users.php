<?php
$job_id = $_GET['id'];
$sql_selected_users = 'SELECT * FROM select_job_users 
INNER JOIN users ON select_job_users.user_id = users.id
INNER JOIN user_experience ON select_job_users.user_id = user_experience.user_id
INNER JOIN user_address ON select_job_users.user_id = user_address.user_id
INNER JOIN rh_jobs ON select_job_users.job_id = rh_jobs.id
WHERE job_id = ' . $job_id;
$result_selected_users = mysqli_query($conection, $sql_selected_users);
?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Recursos Humanos /</span> Candidatos
            Selecionados</h4>

        <div class="row" style="margin-top: -20px">
            <div class="col-md-12">
                <div class="row mb-5">
                    <?php while($row_selected_users = mysqli_fetch_array($result_selected_users)): ?>
                    <?php
                            // $sql_user_skills = 'SELECT * FROM'    
                        ?>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $row_selected_users['first_name'] . ' ' . $row_selected_users['last_name'] ?>
                                    <i class='bx bxs-check-circle' style="color: green"></i></h5>
                                <h6 class="card-subtitle text-muted"><?php echo $row_selected_users['email'] ?></h6>

                                <?php if ($row_selected_users['user_image']) : ?>
                                <!-- IMAGEM DO USUÁRIO -->
                                <img class="img-fluid d-flex mx-auto my-4"
                                    src="./images/user/<?php echo $row_selected_users['user_image'] ?>"
                                    alt="Card image cap">
                                <?php else: ?>
                                <!-- IMAGEM DO USUÁRIO -->
                                <img class="img-fluid d-flex mx-auto my-4"
                                    src="../assets/img/avatars/default-avatar-1.png" alt="Card image cap">
                                <?php endif ?>

                                <p class="card-text">Telefone: <?php echo $row_selected_users['phone_number'] ?></p>
                                <p class="card-text">Vaga: <?php echo $row_selected_users['name'] ?></p>
                                <a class="card-link" href="<?php echo $row_selected_users['url_linkedin'] ?>"
                                    target="_blank"><i style="margin-top: -2px" class="bx bxl-linkedin-square me-1"></i>
                                    LinkedIn</a>                                    
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-success">Candidato selecionado</span>
                                <?php 
                                    if($row_selected_users['avaliation'] == 1){
                                        echo "<i style='margin-top: -5px; margin-left: 10px' class='bx bxs-star'></i>";
                                    } 
                                    if($row_selected_users['avaliation'] == 2){
                                        echo "<i style='margin-top: -5px; margin-left: 10px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                    }
                                    if($row_selected_users['avaliation'] == 3){
                                        echo "<i style='margin-top: -5px; margin-left: 10px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                    }
                                    if($row_selected_users['avaliation'] == 4){
                                        echo "<i style='margin-top: -5px; margin-left: 10px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                    }
                                    if($row_selected_users['avaliation'] == 5){
                                        echo "<i style='margin-top: -5px; margin-left: 10px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                        echo "<i style='margin-top: -5px' class='bx bxs-star'></i>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </div>
    <?php include("./partials/_footer_user_profile.php") ?>
</div>