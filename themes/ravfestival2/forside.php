<?php
defined('C5_EXECUTE') or die('Access Denied.');
$this->inc('elements/header.php');
?>

	<section id="home" data-stellar-background-ratio="0.5" data-vide-bg="//amberfestival.dk/application/themes/ravfestival2/video/amberfestival">
    <div class="parallax-overlay"></div>
    <a id="video" class="player"></a>

    <div class="home-content text-center">
        <div class="container">
         <?php
         $b = new Area('Countdown');
         $b->display($c);
         ?>
        
        </div>
    </div>
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

<section id="dates" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin-btm-30">
                <div class="fact-inner">
                    <div class="text-center">
                    <h1><?php
                            $b = new Area('dato1');
                            $b->display($c);
                        ?></h1>
                    <h3><?php
                            $b = new Area('september');
                            $b->display($c);
                        ?></h3>
                        </div>
                    
                    <p class="text-justify"><?php
                            $b = new Area('tekst1');
                            $b->display($c);
                        ?></p>
                </div>
            </div><!--facts col-->
            <div class="col-md-4 margin-btm-30">
                <div class="fact-inner">
                    <div class="text-center">
                    <h1><?php
                            $b = new Area('dato2');
                            $b->display($c);
                        ?></h1>
                    <h3><?php
                            $b = new Area('september');
                            $b->display($c);
                        ?></h3>                    </div>

                        <p class="text-justify"><?php
                            $b = new Area('tekst2');
                            $b->display($c);
                        ?></p>
                </div>
            </div><!--facts col-->
            <div class="col-md-4 margin-btm-30">
                <div class="fact-inner">
                    <div class="text-center">
                    <h1><?php
                            $b = new Area('dato3');
                            $b->display($c);
                        ?></h1>
                    <h3><?php
                            $b = new Area('september');
                            $b->display($c);
                        ?></h3></div>
                        <p class="text-justify"><?php
                            $b = new Area('tekst3');
                            $b->display($c);
                        ?></p>
                    
                </div>
            </div><!--facts col-->
        </div>
    </div>
    </section> 
    
    
    
    <section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            
                            <div class="text-center">
                    <h2>
                        <?php
                            $b = new Area('title22');
                            $b->display($c);
                        ?>
                    
                    </h2>
                                
                                
                                <div class="lead margin-btm-30">
                        <?php
                            $b = new Area('subtekst');
                            $b->display($c);
                        ?>
                    
                    
                </div>
                </div><!--center heading-->
            
            <?php
                            $b = new Area('youtube');
                            $b->display($c);
                        ?>
            
        </div>
    </div>
    </section>    
    
 <?php
 $b = new Area('Main');
 $b->display($c);
 ?>
</div>
<?php $this->inc('elements/footer.php'); ?>

