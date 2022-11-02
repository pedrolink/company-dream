<?php
$sql_jobs_talent_bank = 'SELECT * FROM rh_jobs';
$result_jobs_talent_bank = mysqli_query($conection, $sql_jobs_talent_bank);

?>

<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <?php include("./exceptions/message_analytic_jobs.php") ?>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Recursos Humanos /</span> Banco de Talentos</h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link" href="?main_menu=analytic_jobs"><i class="bx bx-briefcase me-1"></i>
              Análise de Vagas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="?main_menu=talent_jobs"><i class="bx bx-bookmark-plus me-1"></i>
              Banco de Talentos</a>
          </li>
        </ul>
        <?php while ($row_jobs_talent_bank = mysqli_fetch_array($result_jobs_talent_bank)): ?>
        <?php
        $sql_users_talent_bank = 'SELECT * FROM talent_bank WHERE job_id = ' . $row_jobs_talent_bank['id'];
        $result_users_talent_bank = mysqli_query($conection, $sql_users_talent_bank);
        ?>

        <div class="card mb-4">
          <div class="card accordion-item">
            <h2 class="accordion-header" id="headingThree<?php echo $row_jobs_talent_bank['id'] ?>">
              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#accordionThree<?php echo $row_jobs_talent_bank['id'] ?>" aria-expanded="false"
                aria-controls="accordionThree<?php echo $row_jobs_talent_bank['id'] ?>">
                <?php echo '<b>' . $row_jobs_talent_bank['name'] . '</b> (' . $row_jobs_talent_bank['office'] . ')' ?>
              </button>
            </h2>
            <div id="accordionThree<?php echo $row_jobs_talent_bank['id'] ?>" class="accordion-collapse collapse"
              aria-labelledby="headingThree<?php echo $row_jobs_talent_bank['id'] ?>"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Experiência</th>
                        <th>Inglês</th>
                        <th>Foco da Carreira</th>
                        <th>LinkedIn</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php if ($result_users_talent_bank->num_rows > 0): ?>  
                    <?php while ($row_users_talent_bank = mysqli_fetch_array($result_users_talent_bank)): ?>                      
                      <?php
                            $sql_user_talent_bank = 'SELECT * FROM users
                                                     INNER JOIN user_experience ON users.id = user_experience.user_id
                                                     INNER JOIN english_levels ON user_experience.english_level = english_levels.id_english
                                                     INNER JOIN carrers_focus ON user_experience.carrer_focus = carrers_focus.id_carrer
                                                     INNER JOIN experience_levels ON user_experience.experience_level = experience_levels.id_experience
                                                     WHERE users.id = ' . $row_users_talent_bank['user_id'];
                            $result_user_talent_bank = mysqli_query($conection, $sql_user_talent_bank);
                            $row_user_talent_bank = mysqli_fetch_array($result_user_talent_bank);
                          ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i>
                          <strong><?php echo $row_user_talent_bank['first_name'] . ' ' . $row_user_talent_bank['last_name'] ?></strong>
                        </td>
                        <td><?php echo $row_user_talent_bank['email'] ?></td>
                        <td><?php echo $row_user_talent_bank['phone_number'] ?></td>
                        <td><?php echo $row_user_talent_bank['name_experience'] ?></td>
                        <td><?php echo $row_user_talent_bank['name_english'] ?></td>
                        <td><?php echo $row_user_talent_bank['name_carrer'] ?></td>
                        <td><a href="<?php echo $row_user_talent_bank['url_linkedin'] ?>" target="_blank"><i
                              style="margin-top: -2px" class="bx bxl-linkedin-square me-1"></i> LinkedIn</a></td>
                      </tr>
                      <?php endwhile; ?>
                      <?php else: ?>
                        <td>Nenhum candidato</td>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php include("./partials/_footer_user_profile.php") ?>
</div>