<?php

require_once('_include.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Visualizers - New Look Now</title>
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
                            <a class="current-ele" href="visualizers.php">Visualizers</a>
                        </li>
                        <!--
                        <li>
                            <a href="#">Physician Page <i class="fa fa-angle-double-right"></i></a>
                        </li> -->
                    </ul>
                </nav>
                <!--End Navigation Menu -->


            </div>
        </header>
        <!-- END HEADER -->

        <!-- CONTENT -->

        <!-- Intro Section -->
        
        <!-- visualizers-portion1 Section -->
        <section id="visualizers-portion1" class="dark-color hero1 SectionGapWandS1">
            <div class="container text-center">
                <div class="row text-center" id="visualizers-blk1a">
                	<div class="col-md-12 col-sm-12 common-text-blk1">
                    	<h1 class="mb100">Visualizers</h1>
                        <h2 class="mb15">Feautured Treatments</h2>
                        <p>Upload your photo to “try on” one of the treatments by clicking on the treatment.</p>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
            </div><!-- / container -->
            
            <div class="container">
                <!-- work Filter -->
                <div class="row" id="visualizers-blk1b">
                    <ul class="container-filter categories-filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".surgical">Surgical</a></li>
                        <li><a class="categories" data-filter=".non-surgical">Non-Surgical</a></li>
                        <li><a class="categories" data-filter=".face">Face</a></li>
                        <li><a class="categories" data-filter=".body">Body</a></li>
                        <li><a class="categories" data-filter=".skin">Skin</a></li>
                        <li><a class="categories" data-filter=".teeth">Teeth</a></li>
                        <li><a class="categories" data-filter=".hair">Hair</a></li>
                        <li><a class="categories" data-filter=".brands">Brands</a></li>
                    </ul>
                </div>
                <!-- End work Filter -->
                
                <div class="row" id="visualizers-blk1c">
                	<div class="container-masonry nf-col-4">
                        <div class="nf-item face skin non-surgical brands">
                            <div class="item-box">
                                <a href="_action.php?concern_select=449&treatment=non_surgical&cost=0">
                                    <img alt="1" src="img/Edited-Portion/treatments/sagging-neck-1.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>sagging neck</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>Free</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="item-brand">
                                    	<img src="img/Edited-Portion/treatments/treatment-brand-1.png" alt="image">
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item body non-surgical brands">
                            <div class="item-box">
                                <a href="_action.php?concern_select=472&treatment=non_surgical&sponsor=3&cost=0">
                                    <img alt="1" src="img/Edited-Portion/treatments/muffin-top.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>muffin top</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>Free</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="item-brand">
                                    	<img src="img/Edited-Portion/treatments/treatment-brand-4.png" alt="image">
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face non-surgical brands">
                            <div class="item-box">
                                <a href="_action.php?concern_select=440&treatment=surgical&sponsor=3&cost=0">
                                    <img alt="1" src="img/Edited-Portion/treatments/thin-lips.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>thin lips</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>Free</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="item-brand">
                                    	<img src="img/Edited-Portion/treatments/treatment-brand-2.png" alt="image">
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=560&treatment=non_surgical&sponsor=3&cost=0">
                                    <img alt="1" src="img/Edited-Portion/treatments/nose-shape.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>nose shape</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>Free</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="item-brand">
                                    	<img src="img/Edited-Portion/treatments/treatment-brand-3.png" alt="image">
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item surgical body skin">
                            <div class="item-box">
                                <a href="_action.php?concern_select=458&treatment=surgical&cost=15">
                                    <img alt="1" src="img/Edited-Portion/treatments/abdoSurgery.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>sagging abdominal skin</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$15</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item body surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=470&treatment=surgical&cost=20">
                                    <img alt="1" src="img/Edited-Portion/treatments/small-boobs.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>small breasts</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$20</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=416&treatment=surgical&cost=20">
                                    <img alt="1" src="img/Edited-Portion/treatments/tired-eyes.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>tired eyes</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$20</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item hair surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=517&treatment=surgical&cost=20">
                                    <img alt="1" src="img/Edited-Portion/treatments/hair-loss.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>hair loss</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$20</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div><!-- / nf-item -->

                        <div class="nf-item face surgical skin">
                            <div class="item-box">
                                <a href="_action.php?concern_select=441&treatment=non_surgical&cost=10">
                                    <img alt="1" src="img/Edited-Portion/treatments/sagging-neck-2.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                        <p>sagging neck</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$10</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face surgical skin">
                            <div class="item-box">
                                <a href="_action.php?concern_select=559&treatment=surgical&cost=20">
                                    <img alt="1" src="img/Edited-Portion/treatments/aged-apperance-1.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>aged apperance</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$20</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->


                        <div class="nf-item face non-surgical skin">
                            <div class="item-box">
                                <a href="_action.php?concern_select=559&treatment=non_surgical&cost=15">
                                    <img alt="1" src="img/Edited-Portion/treatments/aged-apperance-2.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>aged apperance</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$15</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        
                        <div class="nf-item face non-surgical skin">
                            <div class="item-box">
                                <a href="_action.php?concern_select=557&treatment=non_surgical&cost=10">
                                    <img alt="1" src="img/Edited-Portion/treatments/skin-texture.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>skin texture</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$10</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face teeth">
                            <div class="item-box">
                                <a href="_action.php?concern_select=561&treatment=non_surgical&cost=20">
                                    <img alt="1" src="img/Edited-Portion/treatments/crooked-teeth.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>crooked teeth</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$20</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face non-surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=409&treatment=non_surgical&cost=15">
                                    <img alt="1" src="img/Edited-Portion/treatments/scarce-lashes.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>short, scarce lashes</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$15</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item face body non-surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=556&treatment=non_surgical&cost=20">
                                    <img alt="1" src="img/Edited-Portion/treatments/skinTome.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>skin tone</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">non-surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$20</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                        <div class="nf-item body surgical">
                            <div class="item-box">
                                <a href="_action.php?concern_select=455&treatment=non_surgical&cost=10">
                                    <img alt="1" src="img/Edited-Portion/treatments/stubborn-fat.jpg" class="item-container">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <p>skin tightening</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item-info1">
                                    	<p>stubborn fat</p>
                                    </div>
                                    
                                    <div class="item-info1a">
                                    	<ul class="list-unstyled">
                                            <li>
                                                <span class="item-type-icon1"><i class="fa fa-camera-retro"></i></span>
                                                <span class="item-type-text1">surgical</span>
                                                <span class="item-type-text2">Try on for <strong>$10</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </a>
                            </div>
                        </div><!-- / nf-item -->
                        
                    </div><!-- / container-grid nf-col-4 -->
                </div><!-- / row -->
                
            </div><!-- / container -->
        </section>
        <!-- End visualizers-portion1 Section -->
        
        
        <hr />
        
        
        <!-- Request Box Section -->
        <section class="hero1" id="requestbox1">
        	<div class="inner-intro bg-image2 light-color parallax parallax-background201">
            	<div class="container">
                	<div class="row title va-middle1">
                    	<div class="col-md-8 col-sm-8 va-middle1a">
                            <h4>Don't see what you're looking for? Upload your photo, tell us your symptoms &amp; we'll do the rest.</h4>
                        </div><!-- / col-md-8 -->
                        
                        <div class="col-md-4 col-sm-4 va-middle1a">
                            <a class="btn btn-default float-right float-none-xs" role="button" href="physician-one.php?start=1">upload photo</a>
                        </div><!-- / col-md-4 -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        <!-- End Request Box Section -->
        
        
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
