<?php
$sql_select_total_users = 'SELECT *, users.id as id_user FROM users
                           INNER JOIN user_permissons ON users.type_permission = user_permissons.id_permission';
$result_select_total_users = mysqli_query($conection, $sql_select_total_users)

?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?php include("./exceptions/message_admin_panel.php") ?>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Administrador /</span> Painel Administrativo
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="?main_menu=analytic_jobs"><i class="bx bx-briefcase me-1"></i>
                            Gestão de Usuários</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Usuário</th>
                                        <th>E-mail</th>
                                        <th>Permissão</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php while($row_select_total_users = mysqli_fetch_array($result_select_total_users)): ?>
                                    <form action="data_edit_permission_user.php" method="POST">
                                        <input type="hidden" name="id_user" value="<?php echo $row_select_total_users['id_user'] ?>">
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo $row_select_total_users['first_name'] . ' ' . $row_select_total_users['last_name'] ?></strong>
                                            </td>
                                            <td><?php echo $row_select_total_users['user'] ?></td>
                                            <td><?php echo $row_select_total_users['email'] ?></td>
                                            <td>
                                                <select id="type_permission" name="type_permission"
                                                    class="select2 form-select"
                                                    aria-describedby="icon-level-experience">
                                                    <?php include("./utils/sql_selects/admin_panel_permission.php") ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="status" name="status" class="select2 form-select"
                                                    aria-describedby="icon-level-experience">
                                                    <?php include("./utils/sql_selects/admin_panel_status.php") ?>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-success">Salvar</button>
                                            </td>
                                        </tr>
                                    </form>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./partials/_footer_user_profile.php") ?>
</div>

<script>
    document.getElementById('menu-home').className = 'menu-item';
    document.getElementById('menu-tools').className = 'menu-item';
    document.getElementById('menu-create-job').className = 'menu-item';
    document.getElementById('menu-analytic-jobs').className = 'menu-item';
    document.getElementById('menu-admin-panel').className = 'menu-item active';
    document.getElementById('menu-my-candidancy').className = 'menu-item';
    document.getElementById('menu-gest').className = 'menu-item active open';
</script>
