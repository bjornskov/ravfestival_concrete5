<?php
defined('C5_EXECUTE') or die('Access Denied.');
$this->inc('elements/header.php');
?>


	<section id="videotop" data-stellar-background-ratio="0.5" data-vide-bg="//amberfestival.dk/application/themes/ravfestival2/video/amberfestival">
    <div class="parallax-overlay"></div>
    <a id="video" class="player"></a>
        <div class="home-content header-text text-center">
        <div class="container">
            <?php
$a = new Area('H1');
$a->enableGridContainer();
$a->display($c);
?> 
            <?php
$a = new Area('H2');
$a->enableGridContainer();
$a->display($c);
?> 
        </div>
    </div>

</section><!--home section end-->


<div id="content">
    
    <section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div><!--center heading-->
        
                <div class="col-md-12">
            
            
            <?php
$a = new Area('Over program');
$a->display($c);
?> 
                    
                    <div class="col-md-8 col-md-offset-2 text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="lead margin-btm-30">
                        <?php
                            $b = new Area('description1');
                            $b->display($c);
                        ?>
                </div>
            </div>
                
            
            

            
            </div>
        
        
        <div class="col-md-8">
            
            <div class="col-md-12 program-info">
            
            <?php
$a = new Area('Main');
$a->display($c);
?> 
                
            </div>
            
            

            
            </div>
        
        <div class="col-md-4 sidebilleder">
                        <?php
$a = new Area('Sidebilleder');
$a->display($c);
?> 
        
        </div>

            

            
            
            
        </div>
        

</section><!--about section end-->
    
            </div>

    
<?php $this->inc('elements/footer.php'); ?>