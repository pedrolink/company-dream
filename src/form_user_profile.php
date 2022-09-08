<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurações do Perfil /</span> Perfil</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
                            Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?main_menu=user_skills"><i class="bx bx-bookmark-plus me-1"></i>
                            Competências</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Detalhes do Perfil</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded"
                                id="uploadedAvatar" width="100" height="100">
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Atualizar foto</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input"
                                        accept="image/png, image/jpeg" hidden="">
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Resetar</span>
                                </button>

                                <p class="text-muted mb-0">Permitido JPG, GIF ou PNG.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Nome</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName" value=""
                                        autofocus="">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Sobrenome</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName" value="">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email" value=""
                                        placeholder="example@gmail.com">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Telefone</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">BR (+55)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="54 9 9999-9999">
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">Cidade</label>
                                    <input class="form-control" type="text" id="state" name="state">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zipCode" class="form-label">CEP</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode" maxlength="8">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Estado</label>
                                    <select id="country" class="select2 form-select">
                                        <?php include("./utils/states.php") ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="linkedin" class="form-label">Perfil LinkedIn</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                                        placeholder="https://www.linkedin.com/in/usuario/">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="urlCloud" class="form-label">GitHub / GitLab / Stack url</label>
                                    <input type="text" class="form-control" id="urlCloud" name="urlCloud"
                                        placeholder="Ex: https://www.github.com/my-repo">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="descriptionUser" class="form-label">Descrição do Perfil</label>
                                    <textarea class="form-control" id="descriptionUser" name="descriptionUser"
                                        rows="5"></textarea>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                                </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card">
                <h5 class="card-header">Deletar Conta</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Você tem certeza que deseja deletar sua
                                conta?
                            </h6>
                            <p class="mb-0">Se você deletar sua conta, você não poderá acessar mais o site,
                                marque a
                                opção abaixo se deseja deletar.
                            </p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                id="accountActivation">
                            <label class="form-check-label" for="accountActivation">Eu confirmo que quero
                                deletar
                                minha conta</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deletar
                            conta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <?php include("./partials/_footer_user_profile.php") ?>

    <div class="content-backdrop fade"></div>
</div>