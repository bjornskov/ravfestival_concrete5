<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>


<div class="footer-btm">
    <div class="copyright text-center">
        <p>I samarbejde med</p>
        <img style="max-width:200px; margin-left:15px; margin-right:15px;" src="//amberfestival.dk/application/files/3514/6453/3484/regionsyddanmark.png">
        <img style="max-width:200px; margin-left:15px; margin-right:15px;" src="//amberfestival.dk/application/files/9314/6453/4017/naturkulturvarde.png">
        <img style="max-width:200px; margin-left:15px; margin-right:15px;" src="//amberfestival.dk/application/files/8314/6453/4017/visitwestdanmark.png">
    </div>
</div><!--footer-btm-->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-btm-30">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Om Ravfestival
                    </h3>
                    <p>                
                             <?php
                             $a = new GlobalArea('AboutRav');
                             $a->display($c);
                             ?>
                    </p>
                </div><!--footer-col-->

                <div class="footer-col">
                    <ul class="list-inline social-1">
                        <li><a href="https://www.facebook.com/ravfestival/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCrqypLIr5KoqEC918rQKReA"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/explore/tags/ravfestival/"><i class="fa fa-instagram"></i></a></li>
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
                        #Ravfestival på Instagram
                    </h3>
<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/7c6485969a405558936edfb66cbc1a5a.html" id="lightwidget_7c6485969a" name="lightwidget_7c6485969a"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

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
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.sticky.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/waypoints.min.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/custom.js" type="text/javascript"></script>
<script src="//amberfestival.dk/application/themes/ravfestival2/js/jquery.vide.js"></script>


 <div id="footer_line_top"></div>
 <div id="footer"></div>
 <div id="footer_line_bottom"></div>
 </div>
</div>
<?php Loader::element('footer_required'); ?>
</body>
</html>