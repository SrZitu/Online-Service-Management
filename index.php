
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OSM</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />


    <!--fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <!-- Font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
  <!--slick-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/styles.css" />
    <!--light box plugin-->
<link rel="stylesheet" href="css/simple-lightbox.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

<body>
        <!-- navigation bar -->
  <nav class="nav-bar navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OSM</a>
    <span class="navbar-text text-capitalize">we believbe in customer's satisfaction</span>
    <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#myMenu" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="myMenu">
      <ul class="navbar-nav pl-5">
        <li class="nav-item"> <a href="index.php" class="nav-link">Home</a> </li>
        <li class="nav-item"> <a href="#services" class="nav-link">Services</a> </li>
        <li class="nav-item"> <a href="#registration" class="nav-link">Registration</a> </li>
        <li class="nav-item"> <a href="Requester/requesterlogin.php" class="nav-link">Login</a> </li>
        <li class="nav-item"> <a href="#contact" class="nav-link">Contact</a> </li>
      </ul>
    </div>
  </nav>
  <!-- end of navbar -->
    <!-- header start -->
  <header>
  <section class="banner-img text-capitalize">
    <div class="jumbotron back-image " style="background-image:url(img/banner.jpg);">
      <div class="headings">
         <h2 class="text-uppercase">Wellcome to OSM</h2>
      <p class="font-italic">we believbe in customer's satisfaction</p>
        <a href="Requester/requesterlogin.php" class="custom-btn1">Login</a>
        <a href="Admin/adminLogin.php" class="custom-btn1 ml-2">Admin Login</a>
        <a href="#" class="custom-btn1 ml-2">Logout</a>
      </div>
       </div>
  </section>
  </header>
  <!-- end of header -->
  <!-- services start -->
  <section class="service-grid pb-5 pt-5" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-4">
                        <div class="service-title">
                            <h2>Our Services</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                            <div class="service-icon">
                                <i class="fa fa-tv"></i>
                            </div>
                            <h4>Designs & interfaces</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                            <div class="service-icon">
                              <i class="fa fa-sliders"></i>
                            </div>
                            <h4>Highly customizable</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                            <div class="service-icon">
                                <i class="fa fa-database"></i>
                            </div>
                            <h4>Responsive design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                            <div class="service-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h4>service & plugins</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                            <div class="service-icon">
                           <i class="fa fa-tachometer" aria-hidden="true"></i>
                            </div>
                            <h4>Optimised for speed</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                            <div class="service-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <h4>Dedicated support</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services end -->

        <!-- registration form start -->
      <?php include "userRegistration.php"?>
        <!--registration form end -->


        <!-- regular customer -->
      <section class="regular-customer jumbotron" id="login">
        <div class="container">
          <h4 class="text-center ">Our Regular Customer</h4>
          <div class="row mt-5">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                  <img src="img/user1.jpg" alt="user1" class="img-fluid" style= "border-radius:100px" width>
                  <h4>Lorel Sivatchin</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sunt accusantium dolores laboriosam a beatae.</p>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                  <img src="img/user2.jpg" alt="user1" class="img-fluid" style= "border-radius:100px" width>
                  <h4>Cristina Angel</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sunt accusantium dolores laboriosam a beatae.</p>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                  <img src="img/user3.jpg" alt="user1" class="img-fluid" style= "border-radius:100px" width>
                  <h4>Tom Hunk</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sunt accusantium dolores laboriosam a beatae.</p>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                  <img src="img/user4.jpg" alt="user1" class="img-fluid" style= "border-radius:100px" width>
                  <h4>David pattinson</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sunt accusantium dolores laboriosam a beatae.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- regular customer section end -->
      
       <!-- contact us section end -->
 <section class="contact-page" id="contact">
      <div class="container contact-page-section">
          <div class="sec-title">
              <div class="title">Contact Us</div>
                <h2>Let's Get in Touch.</h2>
            </div>
            <div class="inner-container">
              <div class="row clearfix">
                
                  <!--Form Column-->
                    <?php include "contactForm.php" ?>
                    <!-- end of contact form column -->
                    
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                      <div class="inner-column">
                          <h2>Contact Info</h2>
                            <ul class="list-info">
                              <li><i class="fa fa-globe"></i>123 lorem ispum Abc, Street Chandigarh.</li>
                                <li><i class="fa fa-envelope"></i>example@test</li>
                                <li><i class="fa fa-phone"></i>1-234-567-890 <br> 1-234-567-890</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- contac us section end -->
 <!-- footer section start -->
   <footer class="osm-footer">
      <div  class="footer-distributed">
			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
    </div>
		</footer>



    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/chosen.jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <!--<script src="simple-lightbox.jquery.min.js"></script>-->
    <!-- magnafic light box-->
<!-- Magnific Popup core JS file -->


<script src="js/simple-lightbox.js"></script>
 
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="js/google-map.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/filter-tags.js"></script>
    <script src="js/slick.min.js"></script>
</body>

</html>