<?php defined('C5_EXECUTE') or die("Access Denied."); ?>


<?php
if ($fID > 0) {
    $fo = File::getByID($fID);
   if (!is_object($fo)) {
        unset($fo);
    }
}
?>

<div class="form-group">
    <?php echo $form->label('tekst', t('Hvad tæller vi ned til?'));?>
    <?php print $form->text('tekst', $tekst)?>
</div>

<div class="form-group">
    <?php echo $form->label('year', t('År'));?>
    <?php print $form->text('year', $year)?>
</div>

<div class="form-group">
    <?php echo $form->label('month', t('Måned'));?>
    <?php print $form->text('month', $month)?>
</div>

<div class="form-group">
    <?php echo $form->label('day', t('Dag'));?>
    <?php print $form->text('day', $day)?>
</div>

<div class="form-group">
    <?php echo $form->label('hour', t('Time'));?>
    <?php print $form->text('hour', $hour)?>
</div>

<div class="form-group">
    <?php echo $form->label('minute', t('Minut'));?>
    <?php print $form->text('minute', $minute)?>
</div>


