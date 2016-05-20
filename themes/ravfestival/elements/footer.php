<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-btm-30">
                <div class="footer-col">
                    <h3 class="widget-title">
                        About Quick Theme
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
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
                        Latest Tweets
                    </h3>
                </div>
                <div class="tweet"></div>

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
    <ul class="footer-nav list-inline text-center">
        <li><a href="#">Terms of use</a></li>
        <li><a href="#">Privacy and policy</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="typography.html">Typography</a></li>
        <li><a href="#">Sign In</a></li>
    </ul>
    <div class="copyright text-center">
        Copyright &copy; 2014. Quick Theme. Powered by <a href="#">bootstrap</a> and <a href="#">Design_mylife</a>
    </div>
</div><!--footer-btm-->

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>


<!-- Laver easing ved menu -->
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!-- Holder menuen i toppen -->
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.sticky.js" type="text/javascript"></script>
<!-- Tæller op i lagkagen -->
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.counterup.min.js" type="text/javascript"></script>
<!-- Får elementerne til at komme frem efterhånden -->
<script src="<?php echo $this->getThemePath(); ?>/js/wow.min.js" type="text/javascript"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/waypoints.min.js" type="text/javascript"></script>
<!-- Paralax på billederne -->
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.stellar.min.js" type="text/javascript"></script>
<!-- Countdown script -->
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.countdown.js" type="text/javascript"></script>
<!-- Diverse scripts der aktiverer funktioner -->
<script src="<?php echo $this->getThemePath(); ?>/js/custom.js" type="text/javascript"></script>
<!-- Video background script i header. -->
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.vide.js"></script>

</body>
</html>



 <div id="footer_line_top"></div>
 <div id="footer"></div>
 <div id="footer_line_bottom"></div>
 </div>
</div>
<?php Loader::element('footer_required'); ?>
</body>
</html>