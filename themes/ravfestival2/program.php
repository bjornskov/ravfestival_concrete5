<?php
defined('C5_EXECUTE') or die('Access Denied.');
$this->inc('elements/header.php');
?>


	<section id="videotop" data-stellar-background-ratio="0.5" data-vide-bg="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/video/amberfestival">
    <div class="parallax-overlay"></div>
    <a id="video" class="player"></a>
        <div class="home-content header-text text-center">
        <div class="container">
         <h1>Program</h1>
            <h2>Her finder du programmet for Ravfestivallen</h2>
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
        <div class="row">
        <div class="col-md-12">
            
            <div class="col-md-10 date-program"><h1>Fredag 23. september 2016</h1></div>
            <div class="col-md-10 program-info">
            
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