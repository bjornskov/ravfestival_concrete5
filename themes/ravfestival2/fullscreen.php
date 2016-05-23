<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>

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
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <!-- font awesome for icons -->
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--flex slider-->
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!--web fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <!--owl carousel css-->
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--popups css-->
    <link href="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    
        #home {
    height: 100% !important;
}
    
    </style>
    
</head>

<body data-spy="scroll" data-offset="80">
	<section id="home" data-stellar-background-ratio="0.5" data-vide-bg="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/video/amberfestival">
    <div class="parallax-overlay"></div>
    <a id="video" class="player"></a>

    <div class="home-content text-center">
        <div class="container">
            <div class="row">
                <div style="margin-top:30px;" class="col-md-12 text-center">
                    <h2>Projektet skal afleveres om</h2>
                    <div id="defaultCountdown"></div><!--countdown-->
                </div>
            </div><!--countdown row-->
        
        </div>
    </div>
</section><!--home section end-->



<!-- Countdown script -->
<script src="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/js/jquery.countdown.js" type="text/javascript"></script>
<!-- Diverse scripts der aktiverer funktioner -->
<!-- Video background script i header. -->
<script src="https://cdn.hiberniacdn.com/filer.amberfestival.dk/application/themes/ravfestival2/js/jquery.vide.js"></script>

    <script type="text/javascript">
        
        // Countdown for the header

var newYear = new Date();
newYear = new Date(2016, 4, 31, 10, 00, 00, 00);
$('#defaultCountdown').countdown({until: newYear});


</script>

 </div>
</div>