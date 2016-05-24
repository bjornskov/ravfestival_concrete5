<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-btm-30">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Om Ravfestival
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or grandomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
                    </p>
                </div><!--footer-col-->

                <div class="footer-col">
                    <ul class="list-inline social-1">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div><!--footer-col-->
            </div>

            <div class="col-sm-4 margin-btm-30">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Følg os på Facebook
                    </h3>
                </div>
                
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fravfestival%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=265529263514897" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                
            </div>

            <div class="col-sm-4">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Subscribe to Newsletter
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                    </p>
                    <form role="form" class="subscribe-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <a class="btn  btn-theme btn-lg" href="#">Ok</a>
                                        <!--<button class="btn  btn-theme btn-lg">Ok</button>-->
                                    </span>
                        </div>
                    </form>
                </div><!--footer-col-->
            </div>
        </div>
    </div>
</footer><!--footer-->

<div class="footer-btm">
    <div class="copyright text-center">
        Designet af Chris, Patricia, Martin & Sebastian (Erhvervsakademi Sydvest)<br><a href="https://github.com/bjornskov/ravfestival_concrete5">This project on Github</a>
    </div>
</div><!--footer-btm-->

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- Laver easing ved menu -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!-- Holder menuen i toppen -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.sticky.js" type="text/javascript"></script>
<!-- Tæller op i lagkagen -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.counterup.min.js" type="text/javascript"></script>
<!-- Får elementerne til at komme frem efterhånden -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/wow.min.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/waypoints.min.js" type="text/javascript"></script>
<!-- Paralax på billederne -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.stellar.min.js" type="text/javascript"></script>
<!-- Diverse scripts der aktiverer funktioner -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/custom.js" type="text/javascript"></script>
<!-- Video background script i header. -->
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.vide.js"></script>


 <div id="footer_line_top"></div>
 <div id="footer"></div>
 <div id="footer_line_bottom"></div>
 </div>
</div>
<?php Loader::element('footer_required'); ?>
</body>
</html>