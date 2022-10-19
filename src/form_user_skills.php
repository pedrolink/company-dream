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
                                        <select id="experience_level" name="experience_level" class="select2 form-select"
                                            aria-describedby="icon-level-experience">
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
                                            placeholder="Exemplo: R$ 5.000,00" value="<?php echo number_format($row_user_experience['salary'], 2, ',', '.') ?>">
                                    </div>
                                </div>

                                <h6 class="mt-4">Informe suas habilidades</h6>
                                <hr class="my-0">

                                <?php //include("./utils/initial_skills.php") ?>

                                <!-- <div class="col-md-12">
                                    <div class="row" id="container1">

                                    </div>
                                </div> -->

                                <!-- <div class="mb-3 col-md-6">
                                    <button id="add_form_field" class="btn btn-dark col-md-12">Adicionar
                                        uma habilidade</button>
                                </div> -->

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <?php include("./partials/_footer_user_profile.php") ?>

    <div class="content-backdrop fade"></div>
</div>

<?php // include ("./utils/scripts/add_skill.php") ?>
<?php // include("./utils/scripts/masks.php") ?>