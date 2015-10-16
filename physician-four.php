<?php

require_once('_include.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Physician Four - New Look Now</title>
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
        
        <!-- physician-four-1 Section -->
		<form method="post" class="form-bootstrap validate" enctype="multipart/form-data" action="_action.php" name="form_physician-four" id="form_physician-four">
        <section id="physician-four-1" class="dark-color hero1 SectionGapWandS1a">
            <div class="container">
                <div class="row text-center" id="physician-four-1-blk1a">
                	<div class="col-md-7 col-sm-7 col_centered">
                    	<div class="col-md-6 col-sm-6 mb-25" id="BandASingleBlk1">
                            <div class="BandASB1Node1 BandASB1Node1b">
                                &nbsp;
                            </div>
                            <div class="page-icon-top">
                                <div class="pit-img-width1">
                                    <i class="fa fa-camera-retro"></i>
                                </div>
                            </div>
                            <h4>1</h4>
                            <p>Upload your photo</p>
                        </div><!-- / col-md-6 -->
                        
                        <div class="col-md-6 col-sm-6 mb-25" id="BandASingleBlk1">
                            <div class="page-icon-top">
                                <div class="pit-img-width1 pit-img-width1-active">
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                            </div>
                            <h4 class="pit-textcolor1-active">2</h4>
                            <p>Enter Contact Information</p>
                        </div><!-- / col-md-6 -->
                    </div><!-- / col-md-7 -->
                </div><!-- / row -->
                
                <div class="row" id="physician-four-1-blk2a">
                	<div class="col-md-12 col-sm-12">
                    	<h1 class="common-h1-1"><strong>Step 2:</strong> Enter Contact Information</h1>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
                <div class="row" id="physician-four-1-blk3a">
                    <div class="col-md-9 col-sm-9 col_centered">
                    	<div class="col-md-6 col-sm-6 LeftGap1" id="enter-contact-info-fields">
                        	<div class="col-md-10 col-sm-10 col_zero col-md-offset-right-2 col-sm-offset-right-2">
                                <div class="form-group">
                                    <label class="label-1" for="ci-fname">first name*</label>
                                    <input type="text" placeholder="" id="ci-fname" name="first_name" class="form-control form-control-1 required">
                                </div><!-- / form-group -->
                                
                                <div class="form-group">
                                    <label class="label-1" for="ci-lname">last name*</label>
                                    <input type="text" placeholder="" id="ci-lname" name="last_name" class="form-control form-control-1 required">
                                </div><!-- / form-group -->
                                
                                <div class="form-group">
                                    <label class="label-1" for="ci-email">email*</label>
                                    <input type="email" placeholder="" id="ci-email" name="email" class="form-control form-control-1 required">
                                </div><!-- / form-group -->
                                
                                <div class="form-group">
                                    <label class="label-1" for="ci-zcode">zip code*</label>
                                    <input type="text" placeholder="" id="ci-zcode" name="zip" class="form-control form-control-1 required">
                                </div><!-- / form-group -->
                                
                                <div class="form-group">
                                    <label class="label-1" for="ci-cphone">cell phone<span>**</span></label>
                                    <input type="text" placeholder="" id="ci-cphone" name="phone" class="form-control form-control-1 required">
                                </div><!-- / form-group -->
                            </div><!-- / col-md-10 -->
                        </div><!-- / col-md-6 -->
                        
                        <div class="col-md-6 col-sm-6 RightGap1" id="read-contact-info-policy">
                        	<div class="col-md-10 col-sm-10 col_zero col-md-offset-2 col-sm-offset-2">
                                <div class="features-box-left">
                                    <div class="features-icon-left">
                                        <div class="checkbox">
                                            <input id="rcb1" type="checkbox" class="image-checkbox required checkbox-required" />
                                            <label for="rcb1" class="image-checkbox-label"></label>    
                                        </div>
                                    </div>
                                    
                                    <p class="fbleft-p1">By checking the box, you are in agreement to the following:</p>
                                    <p class="fbleft-p1">I am at least 18 years of age.</p>
                                    <p class="fbleft-p1">I understand that my simulated results and contact information will be sent to the practice that I have an appointment with.</p>
                                    <p class="fbleft-p1">I understand that I will receive confirmation emails to the email address disclosed. I allow New Look Now to send emails to this address.</p>
                                    <p class="fbleft-p1">I am in agreement with the Terms and Conditions as well as the Privacy Policy and Terms of Use outlined on <a href="#">NewLookNow.com</a>.</p>
                                </div><!-- / features-box-left -->
                                
                                <div class="features-box-left">
                                    <div class="features-icon-left">
                                        <img src="img/Edited-Portion/icons/feature-icon-left-1.png" alt="image" class="mb15">
                                    </div>
                                    
                                    <p class="fbleft-p2">** For your security, a text message will be sent to your phone to verify your order.</p>
                                </div><!-- / features-box-left -->
                            </div><!-- / col-md-10 -->
                        </div><!-- / col-md-6 -->
                    </div><!-- / col-md-9 -->
                </div><!-- / row -->
                
                <div class="row" id="physician-four-1-blk4a">
                	<div class="col-md-12 col-sm-12 text-center">
                        <a href="#" role="button" class="btn btn-default btn-default-cbg1 submit-button">Submit Contact Info</a>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
		</form>
        <!-- End physician-four-1 Section -->
        
        
        <hr />
        
        
        
        
        <!-- END CONTENT ---------------------------------------------------------------------------->

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
