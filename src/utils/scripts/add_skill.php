<script>
    $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $("#container1");
    var add_button = $("#add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append(
                '<div class="mb-3 mt-3 col-md-6"><label class="form-label" for="country">Informe suas habilidades (mínimo 3) eindique quantos anos de experiência</label><div class="input-group input-group-merge"><span id="icon-level-experience" class="input-group-text"><i class="bx bx-book"></i></span><select class="select2 form-select" name="select_skills_1" aria-describedby="icon-level-experience"><option value=""></option><option value="1">JavaScript</option><option value="2">Python</option><option value="3">Docker</option><option value="4">Bootstrap</option><option value="5">PHP</option><option value="6">ReactJS</option></select><button type="button" id="delete" class="btn btn-icon btn-outline-danger"><i class="bx bx-trash-alt"></i></button></div></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio1" value="option1"><label class="form-check-label" for="inlineRadio1">0-1</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2"><label class="form-check-label" for="inlineRadio2">1-2</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2"><label class="form-check-label" for="inlineRadio2">2-3</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2"><label class="form-check-label" for="inlineRadio2">3-4</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2"><label class="form-check-label" for="inlineRadio2">4-5</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2"><label class="form-check-label" for="inlineRadio2">5+</label></div>'
            ); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", "#delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>


