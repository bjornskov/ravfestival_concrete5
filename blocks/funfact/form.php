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
    <?php echo $form->label('antal1', t('Antal 1'));?>
    <?php print $form->text('antal1', $antal1)?>
</div>


<div class="form-group">
    <?php echo $form->label('subtekst1', t('Tekst 1'));?>
    <?php print $form->text('subtekst1', $subtekst1)?>
</div>


<div class="form-group">
    <?php echo $form->label('antal2', t('Antal 2'));?>
    <?php print $form->text('antal2', $antal2)?>
</div>



<div class="form-group">
    <?php echo $form->label('subtekst2', t('Tekst 2'));?>
    <?php print $form->text('subtekst2', $subtekst2)?>
</div>

<div class="form-group">
    <?php echo $form->label('antal3', t('Antal 3'));?>
    <?php print $form->text('antal3', $antal3)?>
</div>


<div class="form-group">
    <?php echo $form->label('subtekst3', t('Tekst 3'));?>
    <?php print $form->text('subtekst3', $subtekst3)?>
</div>


