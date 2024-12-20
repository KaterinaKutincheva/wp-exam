<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Danube Ruse Sports Fishing Club</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
<!-- header section start -->
<div class="header_section">
   <div class="header_main">
      <!-- Mobile Menu -->
      <div class="mobile_menu">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <?php 
               wp_nav_menu( array(
                  'theme_location' => 'primary', // Primary menu location
                  'container' => false, 
                  'menu_class' => 'navbar-nav', 
                  'depth' => 2,
                  'fallback_cb' => 'wp_page_menu', // Default menu if no menu is set
               ));
               ?>
            </div>
         </nav>
      </div>

      <!-- Desktop Menu -->
      <div class="container-fluid">
         <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a></div>
         <div class="menu_main">
            <ul>
               <li class="<?php echo ( is_front_page() ) ? 'active' : ''; ?>"><a href="<?php echo home_url(); ?>">Home</a></li>
               <li class="<?php echo ( is_page( 'about' ) ) ? 'active' : ''; ?>"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
               <li class="<?php echo ( is_page( 'services' ) ) ? 'active' : ''; ?>"><a href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>">Services</a></li>
               <li class="<?php echo ( is_page( 'blog' ) ) ? 'active' : ''; ?>"><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">Blog</a></li>
               <li class="<?php echo ( is_page( 'contact' ) ) ? 'active' : ''; ?>"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- header section end -->

      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_title">Adventure</h1>
                     <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have sufferedThere are ma available, but the majority have suffered</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_title">Adventure</h1>
                     <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have sufferedThere are ma available, but the majority have suffered</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_title">Adventure</h1>
                     <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have sufferedThere are ma available, but the majority have suffered</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->

   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_title">Services </h1>
         <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration</p>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-1.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Rafting</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-2.png" class="services_img"></div>
                  <div class="btn_main active"><a href="#">Hiking</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-3.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Camping</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->

   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="input_btn_main">
            <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
         </div>
         <div class="location_main">
            <div class="call_text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.png"></div>
            <div class="call_text"><a href="#">Call +01 1234567890</a></div>
            <div class="call_text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail-icon.png"></div>
            <div class="call_text"><a href="#">demo@gmail.com</a></div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section end --> 

   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
               Templates</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
   </div>
   <!-- copyright section end -->

   <!-- Javascript files-->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.0.0.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
   <!-- javascript -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>