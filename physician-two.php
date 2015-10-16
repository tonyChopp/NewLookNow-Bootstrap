<?php

require_once('_include.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Physician Two - New Look Now</title>
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
        
        <!-- physician-two-1 Section -->
        <section id="physician-two-1" class="dark-color hero1 SectionGapWandS1a">
            <div class="container">
                <div class="row text-center" id="physician-two-1-blk1a">
                	<div class="col-md-10 col-sm-10 col_centered">
                    	<div class="col-md-4 col-sm-4 mb-25" id="BandASingleBlk1">
                            <div class="BandASB1Node1 BandASB1Node1a">
                                &nbsp;
                            </div>
                            <div class="page-icon-top">
                                <div class="pit-img-width1">
                                    <i class="fa fa-camera-retro"></i>
                                </div>
                            </div>
                            <h4>1</h4>
                            <p>Upload your photo</p>
                        </div><!-- / col-md-4 -->
                        
                        <div class="col-md-4 col-sm-4 mb-25" id="BandASingleBlk1">
                            <div class="BandASB1Node1 BandASB1Node1a">
                                &nbsp;
                            </div>
                            <div class="page-icon-top">
                                <div class="pit-img-width1 pit-img-width1-active">
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                            </div>
                            <h4 class="pit-textcolor1-active">2</h4>
                            <p>Tell us your symptoms</p>
                        </div><!-- / col-md-4 -->
                        
                        <div class="col-md-4 col-sm-4 mb-25" id="BandASingleBlk1">
                            <div class="page-icon-top">
                                <div class="pit-img-width1">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                            </div>
                            <h4>3</h4>
                            <p>Check out</p>
                        </div><!-- / col-md-4 -->
                    </div><!-- / col-md-10 -->
                </div><!-- / row -->
                
                <div class="row" id="physician-two-1-blk2a">
                	<div class="col-md-12 col-sm-12">
                    	<h1 class="common-h1-1 mb75"><strong>Step 2:</strong> Tell us your symptoms</h1>
                        
                    	<p class="common-p-1-centered">In a few words, tell us what your aesthetic concerns are so we may help improve them.</p>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
                <div class="row" id="physician-two-1-blk3a">
                    <div class="col-md-8 col-sm-8 col_centered">
					<form method="post" class="form-bootstrap validate" enctype="multipart/form-data" action="_action.php" name="form_physician-one" id="form_physician-one">
                    	<textarea class="form-control required" placeholder="" rows="6" id="textarea-concerns" name="concerns"></textarea>
					</form>
                    </div><!-- / col-md-8 -->
                </div><!-- / row -->
                
                <div class="row" id="physician-two-1-blk4a">
                	<div class="col-md-12 col-sm-12">
                        <nav>
                            <ul class="pager pager-1">
                            <li class="previous disabled hide"><a href="#"><span aria-hidden="true"></span> Older</a></li>
                            <li class="next"><a href="#" class="next-button1">next <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span></a></li>
                        </ul>
                        </nav>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
        <!-- End physician-two-1 Section -->
        
        
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
