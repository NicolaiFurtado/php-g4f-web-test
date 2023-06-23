<?php
/**
 * Created by PhpStorm.
 * Project: g4f-php
 * File: create.php
 * User: Nicolai
 * Date: 22/06/2023
 * Time: 20:19
 */

/**
 * @var $ARCHIVE_IN_USE
 */

$ARCHIVE_IN_USE = 'create.php';
?>
<form method="POST" action="<?=site_url('atvThree/sendCreate')?>" id="formCreateSerie">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
                <label for="title">Nome da Série <?=reqInput()?></label>
                <input type="text" name="serieName" id="serieName" class="form-control">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
                <label for="title">Canal <?=reqInput()?></label>
                <input type="number" name="channel" id="channel" class="form-control">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
                <label for="title">Gênero <?=reqInput()?></label>
                <input type="text" name="category" id="category" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="title">Data <?=reqInput()?></label>
                <input type="text" name="date" id="date" class="form-control date" onblur="validateDate(this.value)">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="title">Horário <?=reqInput()?></label>
                <input type="text" name="time" id="time" class="form-control time" onblur="validateTime(this.value)">
            </div>
        </div>
    </div>

    <div class="text-end" style="padding-top: 15px;">
        <button type="button" onclick="validateCreateForm()" class="btn btn-sm btn-outline-success">Salvar</button>
    </div>


</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= base_url() ?>public/system/js/plugins/jquery.maskedinput.js"></script>
<script src="<?= base_url() ?>public/system/js/validation.js"></script>


<script>
    jQuery(document).ready(function(){
        $(".date").mask("99/99/9999");
        $(".time").mask("99:99:99");
    });


</script>