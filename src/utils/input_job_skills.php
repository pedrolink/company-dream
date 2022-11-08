<!-- FIRST SKILL -->
<div class="row">
    <div class="mb-3 col-md-6" style="margin-top: 10px">
        <label class="form-label" for="skill1">Nome da habilidade</label>
        <div class="input-group input-group-merge">
            <span id="icon-level-experience" class="input-group-text"><i class="bx bx-directions"></i></span>
            <select id="skill1" name="skill1" class="select2 form-select" aria-describedby="icon-level-experience"
                required>
                <option value="">Selecione uma habilidade</option>
                <?php include('./utils/skills.php') ?>
            </select>
        </div>
    </div>
    <div class="mb-3 col-md-6" style="margin-top: 10px">
        <div class="input-group input-group-merge" style="margin-top: 20px">
            <div class="form-check mt-3">
                <input name="default-radio-1" class="form-check-input" type="radio" value="1">
                <label class="form-check-label" for="defaultRadio1">
                    0-1 anos
                </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 10px">
                <input name="default-radio-1" class="form-check-input" type="radio" value="2">
                <label class="form-check-label" for="defaultRadio1">
                    2 anos
                </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 10px">
                <input name="default-radio-1" class="form-check-input" type="radio" value="3">
                <label class="form-check-label" for="defaultRadio1">
                    3 anos
                </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 10px">
                <input name="default-radio-1" class="form-check-input" type="radio" value="4">
                <label class="form-check-label" for="defaultRadio1">
                    4 anos
                </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 10px">
                <input name="default-radio-1" class="form-check-input" type="radio" value="5">
                <label class="form-check-label" for="defaultRadio1">
                    5 anos
                </label>
            </div>
        </div>
    </div>
    <div class="mb-3 col-md-6">
        <button type="submit" class="btn btn-info col-md-12">Adicionar
            uma habilidade</button>
    </div>
</div>