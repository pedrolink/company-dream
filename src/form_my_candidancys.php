<?php
$condition = '';
if (isset($_GET['search'])){
    $condition .= ' AND name LIKE "%' . $_GET['search'] . '%"';
}
$sql_jobs_user = 'SELECT * FROM candidates_vacancy 
                  INNER JOIN rh_jobs ON candidates_vacancy.id_job = rh_jobs.id
                  WHERE id_user = ' . $_SESSION['user_id'];
$result_jobs_user = mysqli_query($conection, $sql_jobs_user);
?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Minhas Candidaturas</h4>
        <?php if ($result_jobs_user->num_rows > 0): ?>
        <?php while($row_jobs_user = mysqli_fetch_array($result_jobs_user)): ?>
        <div class="row mb-5">
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <?php if($row_jobs_user['job_image']): ?>
                            <img class="card-img card-img-left"
                                src="./images/jobs/<?php echo $row_jobs_user['job_image'] ?>" alt="Card image">
                            <?php else: ?>
                            <img class="card-img card-img-left" src="./assets/img/illustrations/not_found_job.jpg"
                                alt="Card image">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_jobs_user['name'] ?></h5>
                                <p class="card-text"><?php echo $row_jobs_user['description'] ?></p>
                                <a type="button" href="?main_menu=view_job&job_id=<?php echo $row_jobs_user['id'] ?>"
                                    class="btn rounded-pill btn-outline-secondary text-end">
                                    <span class="tf-icons bx bx-show"></span>&nbsp; Visualizar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <? else: ?>
        <?php include('./utils/not_found_message.php'); ?>
        <? endif; ?>
    </div>
</div>

<script>
    document.getElementById('menu-my-candidancy').className = 'menu-item active';
    document.getElementById('menu-home').className = 'menu-item';
    document.getElementById('menu-tools').className = 'menu-item';
    document.getElementById('menu-create-job').className = 'menu-item';
    document.getElementById('menu-analytic-jobs').className = 'menu-item';
    document.getElementById('menu-admin-panel').className = 'menu-item';    
    document.getElementById('menu-gest').className = 'menu-item';
</script>
