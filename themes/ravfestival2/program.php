<?php
defined('C5_EXECUTE') or die('Access Denied.');
$this->inc('elements/header.php');
?>


	<section id="home" data-stellar-background-ratio="0.5" data-vide-bg="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/video/amberfestival">
    <div class="parallax-overlay"></div>
    <a id="video" class="player"></a>

</section><!--home section end-->


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
        <div class="col-md-12">
            <div class="text-center">
                        <?php
                            $a = new Area('Main');
                            $a->enableGridContainer();
                            $a->display($c);
                        ?>
                    
                    
            </div>
        </div>
        
    </div>
        </div>

</section><!--about section end-->
    
    
    
<?php $this->inc('elements/footer.php'); ?>

