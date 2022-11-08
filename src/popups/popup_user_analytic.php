<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_user['users_id'] ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 130px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informações -
                    <?php echo $row_user['first_name'] . ' ' . $row_user['last_name'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="data_talent_or_select_user.php" method="POST">
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
                    <p style="margin-top: 10px">Descrição</p>
                    <textarea class="form-control" name="description" cols="30" rows="5" required></textarea>
                    <p style="margin-top: 15px">Avaliação</p>
                    <a href="javascript:void(0)" onclick="functionStar('one', <?php echo $row_user['users_id'] ?>)"><i id="start1_<?php echo $row_user['users_id'] ?>"
                            class='bx bx-star'></i></a>
                    <a href="javascript:void(0)" onclick="functionStar('two', <?php echo $row_user['users_id'] ?>)"><i id="start2_<?php echo $row_user['users_id'] ?>"
                            class='bx bx-star'></i></a>
                    <a href="javascript:void(0)" onclick="functionStar('three', <?php echo $row_user['users_id'] ?>)"><i id="start3_<?php echo $row_user['users_id'] ?>"
                            class='bx bx-star'></i></a>
                    <a href="javascript:void(0)" onclick="functionStar('for', <?php echo $row_user['users_id'] ?>)"><i id="start4_<?php echo $row_user['users_id'] ?>"
                            class='bx bx-star'></i></a>
                    <a href="javascript:void(0)" onclick="functionStar('five', <?php echo $row_user['users_id'] ?>)"><i id="start5_<?php echo $row_user['users_id'] ?>"
                            class='bx bx-star'></i></a>
                    <input type="hidden" name="avaliation" id="avaliation_<?php echo $row_user['users_id'] ?>" value="">                    
                    <input type="hidden" name="users_id" id="user-id" value="<?php echo $row_user['users_id'] ?>">
                    <input type="hidden" name="job_id" value="<?php echo $job_id ?>">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="form_select" value="talent_bank" class="btn btn-primary">Banco de
                        talentos</button>
                    <button type="submit" name="form_select" value="select_user" class="btn btn-success">Selecionar
                        candidato</button>
                </div>
            </form>
        </div>
    </div>
</div>
