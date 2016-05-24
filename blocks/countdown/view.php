<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
            <div class="row">
                <div style="margin-top:30px;" class="col-md-12 text-center">
                    <h2><?php echo h($tekst)?></h2>
                    <div id="defaultCountdown"></div><!--countdown-->
                </div>
            </div><!--countdown row-->
    <script type="text/javascript">
var newYear = new Date();
newYear = new Date(<?php echo h($year)?>, <?php echo h($month)?>-1, <?php echo h($day)?>, <?php echo h($hour)?>, <?php echo h($minute)?>, 00, 00);
$('#defaultCountdown').countdown({until: newYear});


</script>







