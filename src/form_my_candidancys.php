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
        <?php while($row_jobs_user = mysqli_fetch_array($result_jobs_user)): ?>
        <div class="row mb-5">
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img class="card-img card-img-left" src="../assets/img/elements/12.jpg" alt="Card image">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_jobs_user['name'] ?></h5>
                                <p class="card-text"><?php echo $row_jobs_user['description'] ?></p>
                                <a type="button" href="?main_menu=view_job&job_id=<?php echo $row_jobs_user['id'] ?>"
                                    class="btn rounded-pill btn-outline-secondary text-end">
                                    <span class="tf-icons bx bx-show"></span>&nbsp; Visualizar
                                </a>
                                <p class="card-text" style="margin-top: 45px"><small class="text-muted">Last updated 3
                                        mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>