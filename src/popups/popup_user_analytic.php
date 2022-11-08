<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_user['users_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="margin-top: 150px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informações -
                    <?php echo $row_user['first_name'] . ' ' . $row_user['last_name'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Telefone: <?php echo $row_user['phone_number'] ?> </p>
                <p>Data de Nascimento: <?php echo date('d/m/Y', strtotime(trim($row_user['birth_date']))); ?></p>
                <p>Habilidades do usuário: </p>
                <?php
                $sql_skills_user = 'SELECT * FROM user_skills 
                INNER JOIN skills ON user_skills.skill_id = skills.id
                WHERE user_id = ' . $row_user['users_id'];
                $result_skills_user = mysqli_query($conection, $sql_skills_user);
                ?>
                <?php while($row_skills_user = mysqli_fetch_array($result_skills_user)): ?>
                    <span class="badge bg-label-primary"><?php echo $row_skills_user['name'] ?></span>
                <?php endwhile; ?>
            </div>
            <div class="modal-footer">
                <a href="data_talent_bank.php?user_id=<?php echo $row_user['users_id'] ?>&job_id=<?php echo $job_id ?>" type="button"
                    class="btn btn-primary">Banco de talentos</a>
                <a href="" type="button" class="btn btn-success">Selecionar candidato</a>
            </div>
        </div>
    </div>
</div>