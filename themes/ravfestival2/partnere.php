<?php
defined('C5_EXECUTE') or die('Access Denied.');
$this->inc('elements/header.php');
?>


<div id="content">
    
    <section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-heading text-center">
                    <h2>
                        <?php
                            $b = new Area('title1');
                            $b->display($c);
                        ?>
                    
                    </h2>
                </div><!--center heading-->
            </div>
        </div><!--center heading-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="lead margin-btm-30">
                        <?php
                            $b = new Area('description1');
                            $b->display($c);
                        ?>
                </div>
            </div>
        </div>
        
    </div>
</section><!--about section end-->
    
    
 <?php
 $b = new Area('Main');
 $b->display($c);
 ?>
</div>
<?php $this->inc('elements/footer.php'); ?>

