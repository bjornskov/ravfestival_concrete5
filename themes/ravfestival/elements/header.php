<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>

     
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
    <meta charset="<?php echo APP_CHARSET ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ravfestival 2016</title>

    <!-- Bootstrap -->
    <link href="<?php echo $this->getThemePath(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="<?php echo $this->getThemePath(); ?>/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <!-- font awesome for icons -->
    <link href="<?php echo $this->getThemePath(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--flex slider-->
    <link href="<?php echo $this->getThemePath(); ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="<?php echo $this->getThemePath(); ?>/css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!--web fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <!--owl carousel css-->
    <link href="<?php echo $this->getThemePath(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo $this->getThemePath(); ?>/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--popups css-->
    <link href="<?php echo $this->getThemePath(); ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <?php Loader::element('header_required'); ?>

</head>
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
