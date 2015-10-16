<?php

// load drupal and local include files
require_once('_include.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home - New Look Now</title>
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
	
    <!-- font-awesome CSS -->
	<!--<link href="fonts/custom_fonts/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">-->
    
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
                        <img src="img/Edited-Portion/logo-1a.svg" class="l-black">
                        <!--<img src="img/Edited Portion/logo-1.png" class="l-white">
                        <img src="img/Edited Portion/logo-1.png" class="l-color">-->
                    </a>
                </div>
                <!--End logo-->

                <!-- Navigation Menu -->
                <nav class="navigation">
                    <ul>
                        <li>
                            <a class="current-ele" href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="visualizers.php">Visualizers</a>
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

        <!-- CONTENT ->

        <!- Intro Section -->
        <section class="hero1-visible" id="home">
            <!-- Intro Scroll Down -->
            <div class="intro-scroll-down">
                <a class="scroll-down" href="#beforeandafter">
                    <span class="mouse">
                        <span class="mouse-dot"></span>
                    </span>
                </a>
            </div>
            <!-- End Intro Scroll Down -->
			
            <!-- Contant Slider Section -->
            <section class="wow fadeIn hero1-visible inner-intro dark-color parallax parallax-background101 bottom-box-shadow1">
                <div class="owl-carousel content-carousel content-slider">
                    <div class="item bg-image1">
                        <div class="container">
                            <div class="row title">
                            	
                                <div class="col-md-12 col-sm-12 NewHomeBlk1">
                                    <div class="col-md-4 col-sm-4 LeftGap1 NHManageBlk101">
                                        <div class="NHMessageBlk1">
                                            <p>New Look Now matched me with an amazing provider and I even got to see what I could look like before getting treatment!</p>
                                            <span class="NHMText1">Diana C.</span>
                                        </div><!-- / NHMessageBlk1 -->
                                        
                                        <div class="NHProfileBlk1a">
                                            &nbsp;
                                        </div><!-- / NHProfileBlk1 -->
                                        
                                        <div class="NHBlk1Featured1">
                                            <h5>Featured on:</h5>
                                            
                                            <ul class="list-inline">
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-1.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-2.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-3.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-4.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-5.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-6.png"></a></li>
                                            </ul>
                                        </div><!-- / NHBlk1Featured1 -->
                                    </div><!-- / col-md-4 -->
                                    
                                    <div class="col-md-4 col-sm-4 MidGap1 NHManageBlk102">
                                        <div class="NHProfileBlk1">
                                            &nbsp;
                                        </div><!-- / NHProfileBlk1 -->
                                    </div><!-- / col-md-4 -->
                                    
                                    <div class="col-md-4 col-sm-4 RightGap1 NHManageBlk103">
                                        <div class="NHBlk1Consulting1">
                                            <h1>Free Consultation</h1>
                                            <p>Fill out the form for more info or to schedule a free consultation with an aesthetic expert near you!</p>
                                        </div><!-- / NHBlk1Consulting1 -->
                                        
                                        <div class="NHBlk1ConsultingForm1 NHFloting101">
                                            <form action="/bootstrap/bootstrap_form_process.php" role="form" method="POST" accept-charset="UTF-8"enctype="application/x-www-form-urlencoded" >
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFname1" name="firstname" class="form-control input-firstname" placeholder="First Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFLname1" name="lastname" class="form-control input-lastname" placeholder="Last Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFNumber1" name="phone" class="form-control input-"phonel" placeholder="Phone Number *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFZCode1" name="zip" class="form-control input-zip" placeholder="Zip Code">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="form-group">
                                                <input type="email" id="CFEMail1" name="email" class="form-control input-email" placeholder="Email Address *">
                                            </div>
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<input class="btn btn-default btn-block" type="submit"  name="submit" value="request free consultation">
                                        </div><!-- / col-md-12 -->
                                    </form>
                                        </div><!-- / NHBlk1ConsultingForm1 -->
                                    </div><!-- / col-md-4 -->
                                </div><!-- / col-md-12 // NewHomeBlk1 -->
                                
                            </div><!-- / row -->
                        </div><!-- / container -->
                    </div><!-- / item -->
                    
                    <div class="item bg-image1a">
                        <div class="container">
                            <div class="row title">
                            	
                                <div class="col-md-12 col-sm-12 NewHomeBlk1">
                                    <div class="col-md-8 col-sm-8 LeftGap1b NHManageBlk101 NHManageBlk101a">
                                        <div class="NHMessageBlk1a">
                                            <p><span class="QuoteColor1"><i class="fa fa-quote-left"></i></span> I love the visualizer tool. I tried on 4 different treatments and loved them all. They look so realistic! <span class="QuoteColor1"><i class="fa fa-quote-right"></i></span></p>
                                            <span class="NHMText1a">Lydia K.</span>
                                        </div><!-- / NHMessageBlk1a -->
                                        
                                        <div class="NHBlk1Featured1 NHBlk1Featured1a">
                                            <h5>Featured on:</h5>
                                            
                                            <ul class="list-inline">
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-1.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-2.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-3.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-4.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-5.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-6.png"></a></li>
                                            </ul>
                                        </div><!-- / NHBlk1Featured1 -->
                                    </div><!-- / col-md-8 -->
                                    
                                    <div class="col-md-4 col-sm-4 NHManageBlk103 NHManageBlk103WBg">
                                        <div class="NHBlk1Consulting1">
                                            <h1>Free Consultation</h1>
                                            <p>Fill out the form for more info or to schedule a free consultation with an aesthetic expert near you!</p>
                                        </div><!-- / NHBlk1Consulting1 -->
                                        
                                        <div class="NHBlk1ConsultingForm1 NHFloting101">
                                            <form action="/bootstrap/bootstrap_form_process.php" role="form" method="POST" accept-charset="UTF-8"enctype="application/x-www-form-urlencoded" >
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFname1" name="firstname" class="form-control input-firstname" placeholder="First Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFLname1" name="lastname" class="form-control input-lastname" placeholder="Last Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFNumber1" name="phone" class="form-control input-"phonel" placeholder="Phone Number *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFZCode1" name="zip" class="form-control input-zip" placeholder="Zip Code">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="form-group">
                                                <input type="email" id="CFEMail1" name="email" class="form-control input-email" placeholder="Email Address *">
                                            </div>
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<input class="btn btn-default btn-block" type="submit"  name="submit" value="request free consultation">
                                        </div><!-- / col-md-12 -->
                                    </form>
                                        </div><!-- / NHBlk1ConsultingForm1 -->
                                    </div><!-- / col-md-4 -->
                                </div><!-- / col-md-12 // NewHomeBlk1 -->
                                
                            </div><!-- / row -->
                        </div><!-- / container -->
                    </div><!-- / item -->
                    
                    <div class="item bg-image1b">
                        <div class="container">
                            <div class="row title">
                            	
                                <div class="col-md-12 col-sm-12 NewHomeBlk1">
                                    <div class="col-md-4 col-sm-4 LeftGap1 NHManageBlk101">
                                        <div class="NHMessageBlk1">
                                            <p>I wasn’t sure about getting my nose done until I saw my visualizer and saw what I could look like. I was so excited, I saw a doctor immediately!</p>
                                            <span class="NHMText1b">Claudia M.</span>
                                        </div><!-- / NHMessageBlk1 -->
                                        
                                        <div class="NHProfileBlk2a">
                                            &nbsp;
                                        </div><!-- / NHProfileBlk1 -->
                                        
                                        <div class="NHBlk1Featured1">
                                            <h5>Featured on:</h5>
                                            
                                            <ul class="list-inline">
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-1.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-2.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-3.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-4.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-5.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-6.png"></a></li>
                                            </ul>
                                        </div><!-- / NHBlk1Featured1 -->
                                    </div><!-- / col-md-4 -->
                                    
                                    <div class="col-md-4 col-sm-4 MidGap1 NHManageBlk102">
                                        <div class="NHProfileBlk2">
                                            &nbsp;
                                        </div><!-- / NHProfileBlk1 -->
                                    </div><!-- / col-md-4 -->
                                    
                                    <div class="col-md-4 col-sm-4 RightGap1 NHManageBlk103">
                                        <div class="NHBlk1Consulting1">
                                            <h1>Free Consultation</h1>
                                            <p>Fill out the form for more info or to schedule a free consultation with an aesthetic expert near you!</p>
                                        </div><!-- / NHBlk1Consulting1 -->
                                        
                                        <div class="NHBlk1ConsultingForm1 NHFloting101">
                                            <form action="/bootstrap/bootstrap_form_process.php" role="form" method="POST" accept-charset="UTF-8"enctype="application/x-www-form-urlencoded" >
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFname1" name="firstname" class="form-control input-firstname" placeholder="First Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFLname1" name="lastname" class="form-control input-lastname" placeholder="Last Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFNumber1" name="phone" class="form-control input-"phonel" placeholder="Phone Number *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFZCode1" name="zip" class="form-control input-zip" placeholder="Zip Code">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="form-group">
                                                <input type="email" id="CFEMail1" name="email" class="form-control input-email" placeholder="Email Address *">
                                            </div>
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<input class="btn btn-default btn-block" type="submit"  name="submit" value="request free consultation">
                                        </div><!-- / col-md-12 -->
                                    </form>
                                        </div><!-- / NHBlk1ConsultingForm1 -->
                                    </div><!-- / col-md-4 -->
                                </div><!-- / col-md-12 // NewHomeBlk1 -->
                                
                            </div><!-- / row -->
                        </div><!-- / container -->
                    </div><!-- / item -->
                    
                    <div class="item bg-image1c">
                        <div class="container">
                            <div class="row title">
                            	
                                <div class="col-md-12 col-sm-12 NewHomeBlk1">
                                    <div class="col-md-8 col-sm-8 LeftGap1b NHManageBlk101 NHManageBlk101a">
                                        <div class="NHMessageBlk1b NHMessageBlk1b1">
                                            <p class="WhiteText1"><span class="QuoteColor2"><i class="fa fa-quote-left"></i></span> The visualizer tool is amazing. It’s like a selfie with a twist. <span class="QuoteColor2"><i class="fa fa-quote-right"></i></span></p>
                                            <span class="NHMText1b1">Viki H.</span>
                                        </div><!-- / NHMessageBlk1b -->
                                        
                                        <div class="NHBlk1Featured1 NHBlk1Featured1b">
                                            <h5>Featured on:</h5>
                                            
                                            <ul class="list-inline">
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-1.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-2.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-3.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-4.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-5.png"></a></li>
                                                <li><a href=""><img src="img/Edited-Portion/featured/featured-6.png"></a></li>
                                            </ul>
                                        </div><!-- / NHBlk1Featured1 -->
                                    </div><!-- / col-md-5 -->
                                    
                                    <div class="col-md-4 col-sm-4 NHManageBlk103 NHManageBlk103WBg">
                                        <div class="NHBlk1Consulting1">
                                            <h1>Free Consultation</h1>
                                            <p>Fill out the form for more info or to schedule a free consultation with an aesthetic expert near you!</p>
                                        </div><!-- / NHBlk1Consulting1 -->
                                        
                                        <div class="NHBlk1ConsultingForm1 NHFloting101">
                                            <form action="/bootstrap/bootstrap_form_process.php" role="form" method="POST" accept-charset="UTF-8"enctype="application/x-www-form-urlencoded" >
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFname1" name="firstname" class="form-control input-firstname" placeholder="First Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFLname1" name="lastname" class="form-control input-lastname" placeholder="Last Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFNumber1" name="phone" class="form-control input-"phonel" placeholder="Phone Number *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFZCode1" name="zip" class="form-control input-zip" placeholder="Zip Code">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="form-group">
                                                <input type="email" id="CFEMail1" name="email" class="form-control input-email" placeholder="Email Address *">
                                            </div>
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<input class="btn btn-default btn-block" type="submit"  name="submit" value="request free consultation">
                                        </div><!-- / col-md-12 -->
                                    </form>
                                        </div><!-- / NHBlk1ConsultingForm1 -->
                                    </div><!-- / col-md-4 -->
                                </div><!-- / col-md-12 // NewHomeBlk1 -->
                                
                            </div><!-- / row -->
                        </div><!-- / container -->
                    </div><!-- / item -->
                    
                </div><!-- / owl-carousel -->
            </section>
            <!-- End Contain Slider Section -->
            
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
        
        
        <hr />
        
        
        <!-- beforeandafter Section -->
        <section id="beforeandafter" class="wow fadeIn animated dark-color hero1 SectionGapWandS1a">
            <div class="container text-center">
                <div class="row text-center" id="BeforeAndAfterBlk1">
                	<div class="col-md-12 col-sm-12 common-text-blk1">
                    	<h1 class="mb50">Before & After Visualizer</h1>
                        <p>Have you ever wondered what you could look like with a more youthful, refreshed appearance? To see the remarkable possibilities, use New Look Now’s before & after visualizer to get a sneak peek of what you could look like after a facial rejuvenation.’</p>
                        <p>After you make an appointment, you’ll receive an email and all it takes is 4 easy steps:</p>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
                <div class="row text-center" id="BeforeAndAfterBlk2">
                	<div class="col-md-3 col-sm-3 mb-25" id="BandASingleBlk1">
                        <div class="BandASB1Node1">
                        	&nbsp;
                        </div>
                    	<div class="page-icon-top">
                        	<div class="pit-img-width1">
                                <i class="fa fa-mouse-pointer"></i>
                            </div>
                        </div>
                        <h4>1</h4>
                        <p>Select your treatment option</p>
                    </div><!-- / col-md-3 -->
                    
                    <div class="col-md-3 col-sm-3 mb-25" id="BandASingleBlk1">
                    	<div class="BandASB1Node1">
                        	&nbsp;
                        </div>
                    	<div class="page-icon-top">
                        	<div class="pit-img-width1">
                                <i class="fa fa-camera-retro"></i>
                            </div>
                        </div>
                        <h4>2</h4>
                        <p>Upload your photo</p>
                    </div><!-- / col-md-3 -->
                    
                    <div class="col-md-3 col-sm-3 mb-25" id="BandASingleBlk1">
                    	<div class="BandASB1Node1">
                        	&nbsp;
                        </div>
                    	<div class="page-icon-top">
                        	<div class="pit-img-width1">
                            	<i class="fa fa-file-text-o"></i>
                            </div>
                        </div>
                        <h4>3</h4>
                        <p>Enter contact information</p>
                    </div><!-- / col-md-3 -->
                    
                    <div class="col-md-3 col-sm-3 mb-25">
                    	<div class="page-icon-top">
                        	<div class="pit-img-width1">
                            	<i class="fa fa-stethoscope"></i>
                            </div>
                        </div>
                        <h4>4</h4>
                        <p>View your simulation at your appointment</p>
                    </div><!-- / col-md-3 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
        <!-- End beforeandafter Section -->
        
        
        <hr />
        
        
        <!-- contentslider101 Section -->
        <section id="contentslider101" class="wow fadeIn dark-color SectionGapWandS1 hero1">
        	
            <div class="owl-carousel content-carousel content-slider">
            	<div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mb-xs-25px">
                                <img src="img/Edited-Portion/content-slider-1/slide-1.jpg" alt="" />
                            </div>
                            <div class="col-md-5 col-sm-5 col-md-offset-1 col-sm-offset-1 text-center">
                                <h2>Upload From Any Device</h2>
                                <p>Just snap a photo and your visualizer will be completed within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mb-xs-25px">
                                <img src="img/Edited-Portion/content-slider-1/slide-2.jpg" alt="" />
                            </div>
                            <div class="col-md-5 col-sm-5 col-md-offset-1 col-sm-offset-1 text-center">
                                <h2>Picture The Possibilities</h2>
                                <p>Try on a number of facial rejuvenation treatments.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 text-center mb-xs-25px">
                                <h2>Try On Surgical Options</h2>
                                <p>See what you could possibly look like after a surgical facial rejuvenation.</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-md-offset-1 col-sm-offset-1">
                                <img src="img/Edited-Portion/content-slider-1/slide-3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mb-xs-25px">
                                <img src="img/Edited-Portion/content-slider-1/slide-4.jpg" alt="" />
                            </div>
                            <div class="col-md-5 col-sm-5 col-md-offset-1 col-sm-offset-1 text-center">
                                <h2>Try On Nonsurgical Options</h2>
                                <p>See what you could possibly look like after a nonsurgical facial rejuvenation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End contentslider101 Section -->
        
        
        <hr />
        
        
        <!-- Request Box Section -->
        <section class="hero1" id="requestbox1">
        	<div class="inner-intro bg-image2 light-color parallax parallax-background201">
            	<div class="container">
                	<div class="row title va-middle1">
                    	<div class="col-md-8 col-sm-8 va-middle1a">
                            <h4>Upload your photo to get your before &amp; after visualizer</h4>
                        </div><!-- / col-md-8 -->
                        
                        <div class="col-md-4 col-sm-4 va-middle1a">
                            <a class="btn btn-default float-right float-none-xs" role="button" href="visualizers.php">upload photo</a>
                        </div><!-- / col-md-4 -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        <!-- End Request Box Section -->
        
        
         <hr />
         
         
         <!-- gift Section -->
        <section id="gift" class="wow fadeIn animated dark-color hero1 SectionGapWandS1">
        	
            <!-- Intro Scroll Down 1 -->
            <div class="intro-scroll-down1">
                <a class="scroll-down" href="#providers">
                    <span class="mouse">
                        <span><i class="fa fa-angle-down"></i></span>
                    </span>
                </a>
            </div>
            <!-- End Intro Scroll Down 1 -->
            
            <div class="container text-center">
                <div class="row text-center" id="GiftBlk1">
                	<div class="col-md-12 col-sm-12 common-text-blk1">
                    	<h1 class="mb50">Top Quality Aesthetic Providers</h1>
                        <p>New Look Now’s network of trusted aesthetic professionals consists of only top quality providers available to provide only the best solutions to your aesthetic concerns. You can depend on our providers to give you excellent service and results. </p>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
                <div class="row text-center" id="GiftBlk2">
                	<div class="col-md-12 col-sm-12">
                    	<ul class="list-inline list-inline-centered1">
                        	<li>
                            	<a href="#"><img src="img/Edited-Portion/clients-logo/client-logo-1.png" alt="image"></a>
                            </li>
                            <li>
                            	<a href="#"><img src="img/Edited-Portion/clients-logo/client-logo-2.png" alt="image"></a>
                            </li>
                            <li>
                            	<a href="#"><img src="img/Edited-Portion/clients-logo/client-logo-3.png" alt="image"></a>
                            </li>
                            <li>
                            	<a href="#"><img src="img/Edited-Portion/clients-logo/client-logo-4.png" alt="image"></a>
                            </li>
                        </ul>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
                <div class="row text-center" id="GiftBlk3">
                	<div class="col-md-12 col-sm-12 common-text-blk1">
                    	<h1 class="mb25">Convenient locations through out Southern California</h1>
                        <p>Our aesthetic professionals are conveniently located throughout Southern California. We will book an appointment that is closest to you.</p>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
            </div><!-- / container -->
        </section>
        <!-- End gift Section -->
        
        
        <hr />
        
        
        <!-- Request Box Section -->
        <section class="hero1" id="requestbox1">
        	<div class="inner-intro bg-image4 light-color parallax parallax-background201">
            	<div class="container">
                	<div class="row title va-middle1">
                    	<div class="col-md-8 col-sm-8 va-middle1a">
                            <h4>You can trust new look now to get you into the right hands.</h4>
                        </div><!-- / col-md-8 -->
                        
                        <div class="col-md-4 col-sm-4 va-middle1a">
                            <a class="btn btn-default float-right float-none-xs" role="button" href="#">request free consultation</a>
                        </div><!-- / col-md-4 -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        <!-- End Request Box Section -->
        
        
        <hr />
        
        
        <!-- providers Section -->
        <section id="providers" class="wow fadeIn animated dark-color hero1 SectionGapWandS1a">
        	
            <!-- Intro Scroll Down 1 -->
            <div class="intro-scroll-down1">
                <a class="scroll-down" href="#schedule">
                    <span class="mouse">
                        <span><i class="fa fa-angle-down"></i></span>
                    </span>
                </a>
            </div>
            <!-- End Intro Scroll Down 1 -->
            
            <div class="container text-center">
                <div class="row text-center" id="providersBlk1">
                	<div class="col-md-12 col-sm-12 common-text-blk1">
                    	<h1 class="mb10">3 Easy Steps</h1>
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
                
                <div class="row" id="providersBlk2">
                	<div class="col-md-4 col-sm-4 mb-25">
                    	<div class="page-icon-top">
                        	<img src="img/Edited-Portion/icons/mobile-icon-1.png" alt="image">
                        </div>
                        <h4>Tell Us About You</h4>
                        <p>Answer a few easy questions over the phone.</p>
                    </div><!-- / col-md-4 -->
                    
                    <div class="col-md-4 col-sm-4 mb-25">
                    	<div class="page-icon-top">
                        	<img src="img/Edited-Portion/icons/profile-icon-1.png" alt="image">
                        </div>
                        <h4>Get a Referral</h4>
                        <p>Find out which physician is right for you.</p>
                    </div><!-- / col-md-4 -->
                    
                    <div class="col-md-4 col-sm-4 mb-25">
                    	<div class="page-icon-top">
                        	<img src="img/Edited-Portion/icons/calendar-icon-1.png" alt="image">
                        </div>
                        <h4>Make an Appointment</h4>
                        <p>Instantly schedule a visit with your new aesthetic provider.</p>
                    </div><!-- / col-md-4 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
        <!-- End providers Section -->
        
        
        <hr />
        
        
        <!-- schedule Section -->
        <section class="hero1" id="schedule">
        	<div class="SectionGapWandS1 bg-image5 overlay-dark light-color parallax parallax-background501">
            	<div class="container" id="ScheduleBlk1">
                	<div class="col-md-8 col-sm-8 LeftGap1 SchManageBlk101">
                    	
                    </div><!-- / col-md-8 -->
                    
                    <div class="col-md-4 col-sm-4 RightGap1 SchManageBlk102">
                    	<div class="NHBlk1Consulting1">
                            <h1>Free Consultation</h1>
                            <p>Fill out the form for more info or to schedule a free consultation with an aesthetic expert near you!</p>
                        </div><!-- / NHBlk1Consulting1 -->
                        
                        <div class="NHBlk1ConsultingForm1">
                            <form action="/bootstrap/bootstrap_form_process.php" role="form" method="POST" accept-charset="UTF-8"enctype="application/x-www-form-urlencoded" >
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFname1" name="firstname" class="form-control input-firstname" placeholder="First Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFLname1" name="lastname" class="form-control input-lastname" placeholder="Last Name *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="col-md-6 col-sm-6 LeftGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFFNumber1" name="phone" class="form-control input-"phonel" placeholder="Phone Number *">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                            
                                            <div class="col-md-6 col-sm-6 RightGap1a">
                                            	<div class="form-group">
                                            		<input type="text" id="CFZCode1" name="zip" class="form-control input-zip" placeholder="Zip Code">
                                                </div>
                                            </div><!-- / col-md-12 -->
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<div class="form-group">
                                                <input type="email" id="CFEMail1" name="email" class="form-control input-email" placeholder="Email Address *">
                                            </div>
                                        </div><!-- / col-md-12 -->
                                        
                                        <div class="col-md-12 col-sm-12 col_zero">
                                        	<input class="btn btn-default btn-block" type="submit"  name="submit" value="request free consultation">
                                        </div><!-- / col-md-12 -->
                                    </form>
                        </div><!-- / NHBlk1ConsultingForm1 -->
                    </div><!-- / col-md-4 -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        <!-- End schedule Section -->
        
        
        <hr />
        
        
        <!-- Request Box Section -->
        <section class="hero1" id="requestbox1">
        	<div class="inner-intro bg-image6 light-color parallax parallax-background201">
            	<div class="container">
                	<div class="row title va-middle1">
                    	<div class="col-md-8 col-sm-8 va-middle1a">
                            <h4>Preparing for an appoinment financing available by <span><a href="#"><img src="img/Edited-Portion/logo-care-credit.png" alt="image" class="img-responsive1"></a></span></h4>
                        </div><!-- / col-md-8 -->
                        
                        <div class="col-md-4 col-sm-4 va-middle1a">
                            <a class="btn btn-default-1 float-right float-none-xs" role="button" href="#"><img src="img/Edited-Portion/icons/approved-1.png" alt="image">get approved for financing</a>
                        </div><!-- / col-md-4 -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </div><!-- / inner-intro -->
        </section>
        <!-- End Request Box Section -->
        
        
        <hr />
        
        
        <!-- popup-one-1 Section -->
        <section id="popup-one-1" class="dark-color hero1">
            <div class="container">
                <div class="row" id="popup-one-1-blk1a">
                	<div class="col-md-12 col-sm-12">
                    	
                        <!-- Modal -->
                        <div class="modal fade" id="popup-one-1-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content popup-bg-image1">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/Edited-Portion/icons/icon-cross-1.png" alt="image"></span></button>
                                
                                <h4 class="modal-title" id="myModalLabel">Welcome! What brings you to New Look Now?</h4>
                              </div><!-- / modal-header -->
                              
                              <div class="modal-body overflow">
                              	  <div class="col-md-12 col-sm-12 col_zero">
                                  	  <div class="col-md-6 col-sm-6 LeftGap1 text-center mb25-mobile" id="single-popup-modal1">
                                      	  <div class="col-md-10 col-sm-10 col_zero col-md-offset-right-2 col-sm-offset-right-2">
                                              <div class="page-icon-top">
                                                  <div class="spm-it-width1">
                                                  	  <i class="fa fa-calendar"></i>
                                                  </div>
                                              </div>
                                              <div class="single-popup-modal1-content1">
                                                  <p>I saw a commercial &amp; would like to book an appointment.</p>
                                              </div>
                                              <a class="btn btn-default btn-default-cbg1" role="button" href="#schedule">book appointment</a>
                                          </div><!-- / col-md-10 -->
                                      </div><!-- / col-md-6 -->
                                      
                                      <div class="col-md-6 col-sm-6 RightGap1 text-center" id="single-popup-modal1">
                                      	  <div class="col-md-10 col-sm-10 col_zero col-md-offset-2 col-sm-offset-2">
                                              <div class="page-icon-top">
                                                  <div class="spm-it-width1">
                                                  	  <i class="fa fa-photo"></i>
                                                  </div>
                                              </div>
                                              <div class="single-popup-modal1-content1">
                                                  <p>I am here to upload my photo or to learn more about treatments.</p>
                                              </div>
                                              <a class="btn btn-default btn-default-cbg1" role="button" href="#" id="modal-continue-to-site">continue to site</a>
                                          </div><!-- / col-md-10 -->
                                      </div><!-- / col-md-6 -->
                                  </div><!-- / col-md-12 -->
                              </div><!-- / modal-body -->
                              
                              <div class="modal-footer">
                                &nbsp;
                              </div><!-- / modal-footer -->
                            </div><!-- / modal-content -->
                          </div><!-- / modal-dialog -->
                        </div><!-- / modal -->
                        
                    </div><!-- / col-md-12 -->
                </div><!-- / row -->
            </div><!-- / container -->
        </section>
        <!-- End popup-one-1 Section -->
        
        
        
        
        
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
    <script src="/newlook/js/plugin/bootbox.min.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.singlePageNav.js" type="text/javascript"></script>
    <script src="js/contact-form.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
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
