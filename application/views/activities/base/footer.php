<?php
/**
 * Created by PhpStorm.
 * Project: g4f-php
 * File: footer.php
 * User: Nicolai
 * Date: 21/06/2023
 * Time: 22:10
 */

/**
 * @var $ARCHIVE_IN_USE
 */

$ARCHIVE_IN_USE = 'footer.php';
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>

<script src="<?= base_url() ?>public/system/js/activities.js"></script>
<script src="<?= base_url() ?>public/system/js/validation.js"></script>
<script src="<?= base_url() ?>public/system/js/plugins/jquery.maskedinput.js"></script>
<script src="<?= base_url() ?>public/system/js/plugins/jquery.maskMoney.js"></script>

<script>
    jQuery(document).ready(function(){
        $(".dateAndTime").mask("99/99/99 99:99:99");
    });
</script>

</body>
</html>

