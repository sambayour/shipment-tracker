<?php
include ('connect.php');
$msg="";
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>USACARRIER :: HOME</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/style.css">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.style.css">
    <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="css/flaticon.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Magnific PopUP CSS =-=-=-=-=-=-= -->
    <link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme Color -->
    <link rel="stylesheet" id="color" href="css/colors/defualt.css">
    <!-- For Style Switcher -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- Animation Css -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Menu Hover -->
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
  
</head>

<body>
    <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
    <div class="preloader"><span class="preloader-gif"></span></div>

    <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
    <div class="transparent-header">
    <header class="header-area">
<div class="navigation">
            <!-- navigation-start -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                       
                        <a class="navbar-brand" href="/">
                            <!--<img alt="usacarrier" src="images/output-onlinepngtools.png" class="img-responsive">-->
                            <h3 style="font-size: 46px;font-weight: 600;">USACARRIER</h3>
                            </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-navigation">
                       
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-end -->
            </nav>
        </div>
    </header>
    <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->
    </div>
<?php
if(isset($_POST['tracking'])){
      
	$result=mysqli_query($con,"select * from shipment where tracking='".$_POST['track']."' ");
	$rowcount=mysqli_num_rows($result);
	if($rowcount>=1){
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    include_once('result.php');
// 		header("location:users.php");exit;
	}
	else{
	    $msg = "NO SHIPMENT FOUND!";
	}
}
?>
    <!-- =-=-=-=-=-=-= HOME Banner =-=-=-=-=-=-= -->
        <div class="hero-3 full-section " id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>Track Your Shipment</h2>
          <p class="lead">looking for your package? search it using your tracking number</p>
          <div class="form">
            <form method="post" action="">
              <input type="text" class="form-control" name="track"  placeholder="Your Tracking Number eg USC-10170">
              <button type="submit" name="tracking">Track</button>
            </form>
           <span class="declaration" style="color: red;
    font-size: larger;"><?php echo $msg; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--======= HOME Banner END =========-->

    <!-- =-=-=-=-=-=-= Call To Action =-=-=-=-=-=-= -->
    <div class="parallex-small ">
        <div class="container">
            <div class="row custom-padding-20 ">
                <div class="col-md-8 col-sm-8">
                    <div class="parallex-text">
                        <h4>We are available for 24/7 for Logistics Services</h4>
                    </div>
                    <!-- end subsection-text -->
                </div>
                <!-- end col-md-8 -->

                <div class="col-md-4 col-sm-4">
                    <div class="parallex-button"> <a href="#quote" class="page-scroll btn btn-lg btn-clean">Get a quote <i class="fa fa-angle-double-right "></i></a> </div>
                    <!-- end parallex-button -->
                </div>
                <!-- end col-md-4 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- =-=-=-=-=-=-= Call To Action End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Services =-=-=-=-=-=-= -->
     <section class="custom-padding services white">
        <div class="container">
         <!-- title-section -->
            <div class="main-heading text-center">
                <h2>our services</h2>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>
            <!-- End title-section -->
            <!-- Row -->
            <div class="row">
                <div id="services-2">
                    <!-- Service Item List -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <!-- services grid -->
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-box-of-packing-for-delivery"></i></div>
                            <h4>packaging and storage</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-ocean-transportation"></i></div>
                            <h4>cargo</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-delivery-truck"></i></div>
                            <h4>worldwide transport </h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>

                    <div class="clearfix  hidden-sm"></div>
                    <!-- Service Item List -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <!-- services grid -->

                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-view-symbol-on-delivery-opened-box"></i></div>
                            <h4>ware housing</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-sea-ship-with-containers"></i></div>
                            <h4>Sea Freight</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-delivery-truck-with-packages-behind"></i></div>
                            <h4>Door To Door Devivery </h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <!-- services grid -->

                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-international-delivery-symbol"></i></div>
                            <h4>global trasnport</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-logistics-delivery-truck-in-movement"></i></div>
                            <h4>fast delivery</h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-24-hours-symbol"></i></div>
                            <h4>24/7 Support </h4>
                            <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Service Item List End -->
                </div>
            </div>
            
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Services-end =-=-=-=-=-=-= -->



   <!-- =-=-=-=-=-=-= Our Process =-=-=-=-=-=-= -->
    <section id="process" class="section-padding-80 ">
        <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
                <h2>OUR Process</h2>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>
            <!-- End title-section -->

            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-xs-12 com-sm-12 our-process process-steps text-left">
                <ul>
                    <li><span class="process-icon"><i class="flaticon-man-standing-with-delivery-box"></i></span>
                        <div class="process-detail">
                            <h3>Step: 1</h3>
                             <h2>Drop Your Item</h2>
                            <div class="clearboth"></div>
                         
                        </div>
                    </li>
                    <li><span class="process-icon"><i class="flaticon-commercial-delivery-symbol-of-a-list-on-clipboard-on-a-box-package"></i></span>
                        <div class="process-detail">
                            <h3>Step: 2</h3>
                             <h2>Place Your Order</h2>
                            <div class="clearboth"></div>
                         
                        </div>
                    </li>
                    <li><span class="process-icon"><i class="flaticon-delivery-worker-giving-a-box-to-a-receiver"></i></span>
                        <div class="process-detail">
                            <h3>Step: 3</h3>
                             <h2>We Collect It</h2>
                            <div class="clearboth"></div>
                         
                        </div>
                    </li>
                    <li><span class="process-icon"><i class="flaticon-logistics-delivery-truck-in-movement"></i></span>
                        <div class="process-detail">
                            <h3>Step: 4</h3>
                             <h2>Delivered</h2>
                            <div class="clearboth"></div>
                         
                        </div>
                    </li>
    
     
     
    
                <div class="clearfix"></div>
            </ul>
                
                </div>
            </div>

            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Process End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-area">

        <!--Footer Upper-->
        <div class="footer-content">
            <div class="container">
                <div class="row clearfix">

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="#"><img src="images/logo-1.png" class="img-responsive" alt=""></a>
                                    </div>
                                    
                                    <ul class="contact-info">
                                        <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. Texas 54770</li>
                                        <li><span class="icon fa fa-phone"></span> (+1) 3236093089</li>
                                        <li><span class="icon fa fa-envelope-o"></span> hello@usacarrier.us</li>

                                    </ul>
                                    <div class="social-links-two clearfix"> <a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a> <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a> <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a> <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a> <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a> </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <h2>Our Service</h2>
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="#">Packaging And Storage</a></li>
                                        <li><a href="#">worldwide transport</a></li>
                                        <li><a href="#">Internation Air Freight</a></li>
                                        <li><a href="#">ground shipping</a></li>
                                        <li><a href="#">24/7 Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget news-widget">
                                    <h2>Latest News</h2>

                                    <!--News Post-->
                                    <div class="news-post">
                                        <div class="icon"></div>
                                        <div class="news-content">
                                            <figure class="image-thumb"><img src="images/blog/popular-2.jpg" alt=""></figure>
                                            <a href="#">top benefits of hiring our professional logistics service</a></div>
                                        <div class="time">June 21, 2016</div>
                                    </div>

                                    <!--News Post-->
                                    <div class="news-post">
                                        <div class="icon"></div>
                                        <div class="news-content">
                                            <figure class="image-thumb"><img src="images/blog/popular-1.jpg" alt=""></figure>
                                            <a href="#">top benefits of hiring our professional logistics service</a></div>
                                        <div class="time">June 21, 2016</div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                    <h2>Site Links</h2>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->

                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-copyright">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2019 &copy; <a target="_blank" href="https://usacarrier.us/">USAcarrier</a> All Rights Reserved</div>
            </div>
        </div>
    </footer>
	
	<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->

	<!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core Css  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Dropdown Hover  -->
     <script src="js/bootstrap-dropdownhover.min.js"></script>
    <!-- Dropdown Hover  -->
    <!-- Jquery Easing -->
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- Jquery Counter -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Jquery Waypoints -->
    <script src="js/jquery.waypoints.js"></script>
    <!-- Jquery Appear Plugin -->
    <script src="js/jquery.appear.min.js"></script>
    <!-- Jquery Shuffle Portfolio -->
    <script src="js/jquery.shuffle.min.js"></script>
    <!-- Carousel Slider  -->
    <script src="js/carousel.min.js"></script>
    <!-- Jquery Migrate -->
    <script src="js/jquery-migrate.min.js"></script>
    <!--Style Switcher -->
    <script src="js/color-switcher.js"></script>
    <!-- Gallery Magnify  -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Sticky Bar  -->
    <script src="js/theia-sticky-sidebar.js"></script>
    <!-- Template Core JS -->
    <script src="js/custom.js"></script>
	 <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= --> 
    
    <!-- =-=-=-=-=-=-= Quote Modal End =-=-=-=-=-=-= -->
</body>

</html>