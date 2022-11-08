<!-- Modal -->
<div class="modal fade" id="talentModal<?php echo $row_users_talent_bank['user_id'] ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 150px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descrição -
                    <?php echo $row_user_talent_bank['first_name'] . ' ' . $row_user_talent_bank['last_name'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if($row_users_talent_bank['description']):?>
                    <p><?php echo $row_users_talent_bank['description'] ?></p>
                <?php else: ?>
                    <p>Este usuário não possuí descrição...</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>