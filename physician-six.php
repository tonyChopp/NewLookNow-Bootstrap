<?php

require_once('_include.php');


	require_once('/var/www/vhosts/newlooknow/sites/all/modules/nln_sms/nln_sms.module');
	$sms_response = nln_sms_send_verification($_SESSION['nln_workflow']['nid'], _numbers_only($_SESSION['nln_workflow']['contact']['phone']));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Physician Six - New Look Now</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <!--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">-->
    
    <link rel="shortcut icon" href="img/Edited-Portion/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/Edited-Portion/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    
    <link href="css/style-edited.css" rel="stylesheet" type="text/css" />

    <!-- Js -->
	
	
    <!-- For fonts -->
    <script src="https://use.typekit.net/gjl3cga.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body class="full-intro">
	
    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header">
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a href="index.php">
                        <img src="img/Edited-Portion/logo-1.png" class="l-black">
                        <!--<img src="img/Edited Portion/logo-1.png" class="l-white">
                        <img src="img/Edited Portion/logo-1.png" class="l-color">-->
                    </a>
                </div>
                <!--End logo-->

                <!-- Navigation Menu -->
                <nav class="navigation">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="visualizers.php">Visualizers</a>
                        </li>
                        <!--
                        <li>
                            <a class="current-ele" href="#">Physician Page <i class="fa fa-angle-double-right"></i></a>
                        </li> -->
                    </ul>
                </nav>
                <!--End Navigation Menu -->


            </div>
        </header>
        <!-- END HEADER -->

        <!-- CONTENT -->

        <!-- Intro Section -->
        
        <!-- physician-six-1 Section -->
        <section id="physician-six-1" class="dark-color hero1 SectionGapWandS1a">
            <div class="container">
                <div class="row text-center" id="physician-six-1-blk1a">
                	<div class="col-md-12 col-sm-12">
                    	<h1 class="common-h1-1 mb75">Thank You for Using New Look Now!</h1>
                    </div><!-- / col-md-12 -->
                    
                    <div class="col-md-8 col-sm-8 col_centered overflow mb15">
                        <p class="common-p-1">Your before &amp; after visualizer will be completed within 24 business hours and sent to this email address:</p>
                    </div><!-- / col-md-8 -->
                    
                    <div class="col-md-5 col-sm-5 col_centered overflow mb75">
                    	<input type="text" class="form-control form-control-1 text-center" id="fb-user1" placeholder="<?php print $_SESSION['nln_workflow']['contact']['email']; ?>">
                        <!--<label for="fb-user1" class="label-1a">Type in the box to change the email address.</label>-->
                    </div><!-- / col-md-5 -->
                    
                    <div class="col-md-8 col-sm-8 col_centered overflow mb15">
                        <p class="common-p-1">For your security, a confirmation code will be sent to this number to view your visualizer:</p>
                    </div><!-- / col-md-8 -->
                    
                    <div class="col-md-5 col-sm-5 col_centered overflow">
                    	<input type="text" class="form-control form-control-1 text-center" id="fb-user1" placeholder="<?php print $_SESSION['nln_workflow']['contact']['phone']; ?>">
                        <!--<label for="fb-user1" class="label-1a">Type in the box to change your cell phone number.</label> -->
                    </div><!-- / col-md-5 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
        <!-- End physician-six-1 Section -->
        
        
        <hr />
        
        
        <section id="requestbox1" class="hero1">
        	<div class="inner-intro bg-image2 light-color parallax parallax-background201">
            	<div class="container">
                	<div class="row title va-middle1">
                    	<div class="col-md-8 col-sm-8 va-middle1a">
                            <h4>Time until your visualizer is ready to view</h4>
                        </div><!-- / col-md-8 -->
                        
                        <div class="col-md-4 col-sm-4 va-middle1a">
                            <h4><strong>23</strong> hours <strong>33</strong> minuites <strong>21</strong> seconds</h4>
                        </div><!-- / col-md-4 -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        
        
        <hr />
        
        
        <!-- physician-six-2 Section -->
        <section id="physician-six-1" class="dark-color hero1 SectionGapWandS2">
            <div class="container">
                <div class="row" id="physician-six-2-blk1a">
                	<div class="col-md-10 col-sm-10 col_centered common-text-blk1 overflow">
                    	<h1 class="mb50 text-center">What Others Are Saying About New Look Now</h1>
                        
                        <p class="mb40">“I was so nervous to see my visualizer, but when I opened it I couldn’t have been more pleasantly surprised. I absolutely loved it!!! I requested an appointment with a recommended doctor and they called me that same day and I had my appointment later that week. The process was so easy and I love my results.” - <strong>Karen G</strong>.</p>
                        <p class="mb40">“I took my visualizer to my appointment and the doctor was able to know exactly what I wanted. Thanks New Look Now.” - <strong>Zack S</strong>.</p>
                        <p class="mb40">“I love love love my visualizer! When I opened it and saw what my body could look like, I jumped up and down and called my husband over to take a look. We booked an appointment that week and we’re both very happy with my new look.” - <strong>Mikayla J</strong>.</p>
                        <p class="mb40">“I am crazy about my picture. I can’t wait for this to come true in real life. Wish I found this sooner!” - <strong>Stephanie S</strong>.</p>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
        <!-- End physician-six-2 Section -->
        
        
        <hr />
        
        
        <section id="requestbox1" class="hero1">
        	<div class="inner-intro bg-image4 light-color parallax parallax-background201">
            	<div class="container">
                	<div class="row title va-middle1">
                    	<div class="col-md-8 col-sm-8 va-middle1a">
                            <h4>You can trust new look now to get you into the right hands.</h4>
                        </div><!-- / col-md-8 -->
                        
                        <div class="col-md-4 col-sm-4 va-middle1a">
                            <a href="#" role="button" class="btn btn-default float-right float-none-xs">get free consultation</a>
                        </div><!-- / col-md-4 -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        
        
        <hr />
        
        
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <footer class="footer SectionGapWandS2 dark-color" id="footer">

            <!-- Copyright Bar -->
            <section id="FooterPortion1">
            	<div class="container text-center" id="FP1Blk1">
                    <ul class="list-inline">
                    	<li>
                        	<span><a href="#">contact</a></span>
                        </li>
                        <li>
                        	<a href="#">general inquiries</a>
                        </li>
                        <li>
                        	<a href="#">&bull; interested physician</a>
                        </li>
                        <li>
                        	<span><a href="#">info</a></span>
                        </li>
                        <li>
                        	<a href="#">terms & conditions</a>
                        </li>
                        <li>
                        	<a href="#">&bull; ca privacy rights</a>
                        </li>
                        <li>
                        	<a href="#">&bull; disclaimer</a>
                        </li>
                    </ul>
                </div>
                
                <div class="container text-center" id="FP1Blk2">
                    <p>&copy; 2015 <a href="#">New Look Now</a>. All rights reserved.</p>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/background-check.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.singlePageNav.js" type="text/javascript"></script>
    <script src="js/contact-form.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
	<script src="js/dropzone.js"></script>
	<script src="https://checkout.stripe.com/checkout.js?nw4ts1"></script>
	
    <script src="js/custom.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        //  Onepage Nav Elements
        $('.singlepage-nav').singlePageNav({
            offset: 0,
            filter: ':not(.nav-external)',
            updateHash: true,
            currentClass: 'current-ele',
            easing: 'swing',
            speed: 750,
            beforeStart: function () {
                console.log('begin scrolling');
            },
            onComplete: function () {
                console.log('done scrolling');
            }
        });
    </script>

</body>
</html>
