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
                <a href="/"><img src="//amberfestival.dk/application/files/7014/6400/0038/logo-ravfestival.png

" height="50"></a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right scrollto">
                    <li><a href="/">Forside</a></li>
                    <li><a href="/nyheder">Nyheder</a></li>
                    <li><a href="/program">Program</a></li>
                    <li><a href="/om-ravfestival">Om Ravfestival</a></li>
                    <li><a href="/kontakt">Kontakt</a></li>
                    <li><a href="/partnere">Partnere</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--navbar-default-->
</section><!--navigation section end here-->
    
     <?php
 $a = new GlobalArea('Header Nav');
 $a->display($c);
 ?>
