<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();

?>

<body data-spy="scroll" data-offset="80">
<section id="navigation">
    <div class="navbar navbar-default navbar-static-top " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#"><img src="http://c5.amberfestival.dk/files/5214/6366/0394/header_logo.png" height="50"></a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right scrollto">
                    <li><a href="#home">Forside</a></li>
                    <li><a href="#about">Om os</a></li>
                    <li><a href="#services">Produkter</a></li>
                    <li><a href="#work">Portfolio</a></li>
                    <li><a href="#pricing">Priser</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--navbar-default-->
</section><!--navigation section end here-->
    
     <?php
 $a = new GlobalArea('Header Nav');
 $a->display($c);
 ?>
