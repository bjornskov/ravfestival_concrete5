<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
    <?php Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : '', 'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''));?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>
    
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
</head>


