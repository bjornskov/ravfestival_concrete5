<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<a class="collapsed" data-toggle="collapse" href="#<?php echo $bID?>" aria-expanded="false" aria-controls="<?php echo $bID?>">
    <h3 style="display:inline; margin-right:30px;"><?php echo h($position)?></h3>
    <h3 style="display:inline"><?php echo h($name)?></h3>
    <h3 style="display:inline; margin-left:10px; margin-right:10px; opacity:0.5;">@</h3>
    <h3 style="display:inline; opacity:0.5;"><?php echo h($company)?></h3>
</a>
<div class="collapse col-sm-12" id="<?php echo $bID?>" aria-expanded="false" style="height: 0px; padding-left:0px;">
    <div class="well col-md-12">
        <div class="col-md-4">
    <?php echo $image?>
            </div>
        
        <div class="col-md-8">
        <h3 style="display:inline"><?php echo h($name)?></h3><br>
        <h4><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo h($company)?></h4>    
        <h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo h($position)?></h4>
        <p><?php echo h($paragraph)?></p></div></div>
</div>
