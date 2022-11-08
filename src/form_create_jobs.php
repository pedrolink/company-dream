<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_create_job.php") ?>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Recursos Humanos /</span> Cadastro de Vagas
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-briefcase me-1"></i>
                            Vagas</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Informações da Vaga</h5>
                    <hr class="my-0">
                    <div class="card-body">
                        <form action="data_create_job.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="job_name">Nome da Vaga</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-code-curly"></i></span>
                                        <input type="text" class="form-control" id="job_name" name="job_name">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="office">Cargo</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-user-pin"></i></span>
                                        <input type="text" class="form-control" id="office" name="office">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="carrer-focus">Foco da Vaga</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-carrer-focus" class="input-group-text"><i
                                                class="bx bx-code-alt"></i></span>
                                        <select id="carrer_focus" name="carrer_focus" class="select2 form-select"
                                            aria-describedby="icon-carrer-focus">
                                            <option value="">Selecione um item</option>
                                            <option value="1">Back-End</option>
                                            <option value="2">Front-End</option>
                                            <option value="3">Full Stack</option>
                                            <option value="4">Mobile</option>
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
                                            <option value="">Selecione um item</option>
                                            <option value="1">Júnior</option>
                                            <option value="2">Pleno</option>
                                            <option value="3">Sênior</option>
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
                                            <option value="">Selecione um item</option>
                                            <option value="1">Básico</option>
                                            <option value="2">Intermediário</option>
                                            <option value="3">Avançado</option>
                                            <option value="4">Fluente</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="salary">Média Salarial (mensal)</label>
                                    <div class="input-group input-group-merge">
                                        <span id="icon-level-experience" class="input-group-text"><i
                                                class="bx bx-money"></i></span>
                                        <input type="text" class="form-control" id="salary" name="salary"
                                            placeholder="Exemplo: R$ 5.000,00">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="descriptionUser" class="form-label">Descrição da Vaga</label>
                                    <textarea class="form-control" id="job_description" name="job_description"
                                        rows="3"></textarea>
                                </div>

                                <label for="descriptionUser" class="form-label">Selecione uma imagem para a vaga</label>
                                <div class="mb-3 col-md-12">
                                    <input type="file" id="job_image" name="job_image" class="account-file-input"
                                        accept="image/png, image/jpeg">
                                </div>

                                <h6 class="mt-4">Habilidades da Vaga</h6>
                                <hr class="my-0">

                                <?php include('./utils/input_jobs_skills.php') ?>

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

<script>
    document.getElementById('menu-home').className = 'menu-item';
    document.getElementById('menu-tools').className = 'menu-item active open';
    document.getElementById('menu-create-job').className = 'menu-item active';
    document.getElementById('menu-analytic-jobs').className = 'menu-item';
    document.getElementById('menu-admin-panel').className = 'menu-item';
    document.getElementById('menu-my-candidancy').className = 'menu-item';
    document.getElementById('menu-gest').className = 'menu-item';
</script>