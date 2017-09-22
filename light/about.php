<?php
$page_title="About Us"; 
include("includes/header.php");
?>

<body>
	
    
    <div id="screen-cover"></div>
    
    <header class="page-header">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 text-right">
                        Welcome Guest, <a href="#" class="text-uppercase">Sign in</a> | <a href="#" class="text-uppercase">Create new account</a>
                    </div>
                </div>
            </div>
        </div><!-- .page-top -->
<?php 
	include("includes/nav.php");
?>

    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="assets/images/about/old.jpg">
    </div>
    
    <section>
        <div class="container">
            <h1 class="bottom-line">About us</h1>
            <p class="text-center"><em>When gliding by the Bashee isles we emerged at last upon the great South Sea.</em></p>
            <div class="row">
                <div class="col-md-6">
                    <h2>Our History</h2>
                    <p>It may be that the primal source of all those pictorial delusions will be found among the oldest Hindoo, Egyptian, and Grecian sculptures. For ever since those inventive but unscrupulous times when on the marble panellings of temples, the pedestals of statues, and on shields, medallions, cups, and coins, the dolphin was drawn in scales of chain-armor like Saladin's, and a helmeted head like St. George's; ever since then has something of the same sort of license prevailed, not only in most popular pictures of the whale, but in many scientific presentations of him.</p>
                </div>
                <div class="col-md-6">
                	<div class="margin-20"></div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="assets/images/about/steak.png"></img>
                    </div>
                </div>
            </div><!-- .row -->

    
    <footer class="page-footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 responsive-column">
                    <h2 class="footer-heading text-uppercase">Subscribe now</h2>
                    <div class="margin-10"></div>
                    <p>
                    	<em>Subscribe now for our new updates<br>
                        and get regular offers and stuff</em>
                    </p>
                    <form id="form-newsletter" class="form-subscribe" action="assets/php/save_rss.php" method="post" data-email-not-set-msg="Email must be set." data-success-msg="Email added.">
                    	<input type="email" name="email" placeholder="Enter your Email">
                        <div class="return-msg"></div>
                        <div class="text-right">
                        	<input class="button-yellow button-heavy" type="submit" value="Submit">
                        </div>
                    </form>
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
        <div class="site-info">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-8">
                    	2015 All rights reserved. By IgnitionThemes Made with love.
                    </div>
                </div>
            </div><!-- .container -->
        	<div id="scroll-top"><i class="fa fa-angle-double-up"></i></div>
        </div><!-- .site-info -->
    </footer>
    
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/owl-carousel2/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/retina/retina.min.js"></script>
    <script type="text/javascript" src="assets/lightbox/js/lightbox.min.js"></script>
    <script type="text/javascript" src="assets/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.min.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>
