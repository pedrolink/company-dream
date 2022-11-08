<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_user_skills.php") ?>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurações do Perfil /</span> Competências
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">

                    <li class="nav-item">
                        <a class="nav-link" href="?main_menu=user_profile"><i class="bx bx-user me-1"></i> Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bookmark-plus me-1"></i>
                            Competências</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Competências do Perfil</h5>
                    <hr class="my-0">
                    <div class="card-body">
                        <form action="data_user_skills.php" method="POST">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="carrer-focus">Foco na carreira</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-carrer-focus" class="input-group-text"><i
                                                class="bx bx-code-alt"></i></span>
                                        <select id="carrer_focus" name="carrer_focus" class="select2 form-select"
                                            aria-describedby="icon-carrer-focus">
                                            <?php include("./utils/sql_selects/user_skill_carrer_focus.php") ?>
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
                                            <?php include("./utils/sql_selects/user_skill_experience_level.php") ?>
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
                                            <?php include("./utils/sql_selects/user_skill_english_level.php") ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="salary">Média Salarial (mensal)</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-money"></i></span>
                                        <input type="text" class="form-control" id="salary" name="salary"
                                            placeholder="Exemplo: R$ 5.000,00"
                                            value="<?php echo number_format($row_user_experience['salary'], 2, ',', '.') ?>">
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                                </div>
                        </form>

                        <h6 class="mt-4">Habilidades</h6>
                        <hr class="my-0">

                        <div class="mb-3 col-md-12" style="margin-top: 15px">
                            <?php
                                    $sql_user_skills = 'SELECT * FROM user_skills 
                                    INNER JOIN skills ON user_skills.skill_id = skills.id
                                    WHERE user_id = ' . $_SESSION['user_id'];
                                    $result_user_skills = mysqli_query($conection, $sql_user_skills);
                                    ?>
                            <?php while($row_user_skills = mysqli_fetch_array($result_user_skills)): ?>
                            <a href="data_delete_skill_user.php?id_skill=<?php echo $row_user_skills['id'] ?>"><span
                                    class="badge bg-label-primary" style="margin-left: 10px"><i class='bx bx-x'
                                        style="margin-top: -3px"></i>
                                    <?php echo $row_user_skills['name'] . ' (' . $row_user_skills['skill_level'] . ')' ?></span></a>
                            <?php endwhile; ?>
                        </div>
                        <h6 class="mt-4">Adicionar Habilidade</h6>
                        <hr class="my-0">
                        <form action="data_add_skill_user.php" method="POST" id="form-skills">
                            <?php include("./utils/input_users_skills.php") ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("./partials/_footer_user_profile.php") ?>

<div class="content-backdrop fade"></div>
</div>

