<?php
defined('C5_EXECUTE') or die('Access Denied.');
$this->inc('elements/header.php');
?>
<div id="content">
 <div id="left-sidebar">
 <?php
 $as = new Area('Sidebar');
 $as->display($c);
 ?>
 </div>
 <div id="main">
 <?php
 $b = new Area('Main');
 $b->display($c);
 ?>
 </div>
 <div class="clear"></div>
</div>
<?php $this->inc('elements/footer.php'); ?>