﻿<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>HashInclude | Remember The Name</title>
	<?php 
		$number = rand(1, 10);
	?>
	<style>
		.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url("images/loader-64x/Preloader_<?php echo $number ?>.gif") center no-repeat #fff;
}
	</style>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
   <link rel="stylesheet" type="text/css" href="stylesheets/colors/color4.css" id="colors">
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
   <link href="icon/favicon.png" rel="shortcut icon">
</head>

<body>
<div class="se-pre-con"></div>
   <!-- Top -->
   <div class="top">
      <div class="container">
         <div class="row">
            <div class="span8">
               <ul class="contact-info inline pull-left">
                  <li class="email"><a href="#">hashinc16@gmail.com</a></li>
                  
               </ul>
            </div><!-- /.span8 -->
            
         </div><!-- /.row -->
      </div><!-- /.containter -->
   </div>

   <!-- Parallax Fullwidth -->
   <div id="top-slider" class="parallax-bg1 parallax">
      <div class="overlay"></div>
      <header id="header" class="header">
         <div class="header-wrap">
            <div class="container">
               <div class="row">
                  <div class="span2">
                     <div id="logo" class="logo">
                        <a href="http://www.hashinc.in" rel="home">
                           <img src="images/logo.png" alt="Hashinc" />
                        </a>
                     </div><!-- /.logo -->
                  </div><!-- /.span2 -->
                  <div class="span10">
                     <div class="btn-menu"></div><!-- //mobile menu button -->
                     <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                           <li><a class="active" href="#">Home</a>
                           <li><a href="about.php">About Us</a>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="portfolio.php">Our Work</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li><a href="blog.php">Blog</a></li>
                        </ul><!-- /.menu -->
                     </nav><!-- /nav -->
                  </div>
               </div><!-- /.span10 -->
            </div><!-- /.container -->
         </div><!-- /.header-wrap -->
      </header><!-- /header -->

      <div class="content">
         <div style="margin-top:60px;" class="text-scroll">
            <h1 style="font-size:-10px">WELCOME TO HASH INCLUDE.</h1>
            <h1>WE ARE DEVELOPERS.</h1>
            <h1>WE ARE DESIGNERS.</h1>
            <h1>WE ARE SOCIALITES.</h1>
            <h1>WE ARE MARKETING.</h1>
         </div>
         <ul class="ideas inline">
            <li> Creative</li>
            <li> Optimistic</li>
            <li> Co-operative</li>
            <li> Trustworthy</li>
         </ul>
      </div><!-- /.content -->
      <div class="arrow"><i class="icons-angle-down"></i></div>
      <a class="arrow_bg btn-top" href="#projects"></a>
   </div>

   <!-- About -->
   <section class="section about-section">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="titlebox">
                  <h2 class="subtitle">About</h2>
                  <h3 class="maintitle">OUR MAIN OBJECTIVE IS</h3>
                  <p>Our goal is first of all a good idea for the brand. Devise a strategic plan for the entire project. Good design approach in the field. Professional execution of the entire order. We do not like when our client is sad.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
            <div class="span3">
               <div class="iconbox Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-lightbulb"></i>
                     </div>
                  </div>
                  <h3><a href="#">STRATEGIC ACTION PLAN</a></h3>
                  <p>The projects are planned in such a way that optimum results are produced for the utmost satisfaction of the customers.<p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.2s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-copy-paste"></i>
                     </div>
                  </div>
                  <h3><a href="#">PROFESSIONAL DESIGN</a></h3>
                  <p>We provide professional designs for our customers. Yes, yes, we are 100% professional.</p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.4s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-pen"></i>
                     </div>
                  </div>
                  <h3><a href="#">ELEGANT DESIGN PROJECT</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis fermentumurna vitae.</p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.6s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-scissors"></i>
                     </div>
                  </div>
                  <h3><a href="#">A THOUGHTFUL IDEA</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis fermentumurna vitae.</p>
               </div>
            </div><!-- /.span3 -->
         </div>
      </div>
   </section>

   <!-- Motto -->
   <section class="section motto-section parallax-bg2 parallax">
      <div class="overlay"></div>
      <div class="container">
         <div class="row">
            <div class="content-section">
               <div class="span12">
                  <div class="titlebox Hashinc-animation" data-animation="fadeInRight" data-animation-delay="0" data-animation-offset="55%">
                     <h2 class="subtitle text-white">Our Goal</h2>
                     <h3 class="maintitle text-color">HashInclude</h3>
                     <p class="text-white">We at HashInclude, always work on the customer needs. 
					 We work smart to give the best outcome to satisfy our customer needs at a reasonable costing. 
					 Our team is dedicated to our work and we always try to be parralel with our clients. 
					 While design is our core-competency, Technology is what keeps giving us quantum leaps and goosebumps. 
					 We are passionate about the future and always will try to make the future today.
					 We work here with honest and always a fun-loving bunch.</p>
                  </div>
               </div><!-- /.span12 -->
            </div>
         </div>
      </div>
   </section>

   <!-- Testimonial -->
   <section class="section testimonial-section" style="background-color: #10101d;">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="titlebox Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                  <h2 class="subtitle text-white">Testimonials</h2>
                  <h3 class="maintitle text-color">WHAT OUR CUSTOMERS SAY?</h3>
                  <p class="text-white">Nunc fermentum dapibus dolor et scelerisque. Curabitur commodo sed augue vitae auctor. Mauris lacus dui, venenatis vel molestie eu, gravida luctus lorem. Suspendisse arcu urna, viverra quis urna quis, porttitor aliquam tellus.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
            <div class="span12">
               <div class="testimonials2" data-auto="false" data-effect="slide" data-direction="horizotal">
                  <div class="flexslider Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                     <ul class="slides">
                        <li>
                           <div class="person">
                              <img src="images/testimonial/1s.jpg" alt="image">
                              <div class="info">
                                 <h3 class="name">Grace Whitman</h3>
                                 <p class="pos">Themeforest</p>
                              </div>
                           </div>
                           <div class="text">
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. </blockquote>
                           </div>
                        </li>
                        <li>
                           <div class="person">
                              <img src="images/testimonial/2s.jpg" alt="image">
                              <div class="info">
                                 <h3 class="name">Margaret Everdeen</h3>
                                 <p class="pos">Videohive</p>
                              </div>
                           </div>
                           <div class="text">
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. </blockquote>
                           </div>
                        </li>
                        <li>
                           <div class="person">
                              <img src="images/testimonial/3s.jpg" alt="image">
                              <div class="info">
                                 <h3 class="name">Grace Whitman</h3>
                                 <p class="pos">Themeforest</p>
                              </div>
                           </div>
                           <div class="text">
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. </blockquote>
                           </div>
                        </li>
                        <li>
                           <div class="person">
                              <img src="images/testimonial/4s.jpg" alt="image">
                              <div class="info">
                                 <h3 class="name">Grace Whitman</h3>
                                 <p class="pos">Themeforest</p>
                              </div>
                           </div>
                           <div class="text">
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. </blockquote>
                           </div>
                        </li>
                        <li>
                           <div class="person">
                              <img src="images/testimonial/5.jpg" alt="image">
                              <div class="info">
                                 <h3 class="name">Margaret Everdeen</h3>
                                 <p class="pos">Videohive</p>
                              </div>
                           </div>
                           <div class="text">
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. </blockquote>
                           </div>
                        </li>
                        <li>
                           <div class="person">
                              <img src="images/testimonial/6s.jpg" alt="image">
                              <div class="info">
                                 <h3 class="name">Grace Whitman</h3>
                                 <p class="pos">Themeforest</p>
                              </div>
                           </div>
                           <div class="text">
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. </blockquote>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div><!-- /.testimonials2 -->
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

   <!-- Socials -->
   <section class="section social-section" style="padding: 50px 0; background: #d9dff2">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="socials-list Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.5s" data-animation-offset="90%">
                  <div class="follow-us">
                     <center><h2><strong>Follow Us</strong></h2></center>
                  </div>
                  <div class="social-icons">
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-twitter"></i>
                           </div>
                        </div>
                     </a>
                     <a class="iconwrap" href="https://www.facebook.com/HashIncludeofficial/?fref=nf">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-facebook"></i>
                           </div>
                        </div>
                     </a>
                        <a class="iconwrap" href="https://www.youtube.com/channel/UCWnwjz_S9RTms3K10NdkyTA">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-youtube"></i>
                           </div>
                        </div>
                     </a>
                     
                     <a class="iconwrap" href="https://plus.google.com/u/0/105532434800273536097">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-google-plus"></i>
                           </div>
                        </div>
                     </a>
                     </div>
               </div><!-- /.socials-list -->
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

   <!-- Bottom -->
   <div class="bottom">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="copyright pull-left">
                  <span><a href="www.hashinc.in">HashInclude</a></span> &copy 2016 | ALL RIGHTS RESERVED.
               </div>
               <div class="bottom-links pull-right">
                  <a href="#">HOME</a> |
                  <a href="about.php">ABOUT US</a> |
                  <a href="services.php">SERVICES</a> |
                  <a href="portfolio.php">OUR WORK</a> |
                  <a href="contact.php">CONTACT</a> |
                  <a href="blog.php">BLOG</a>
               </div>
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </div>

   <!-- Go Top -->
   <a class="go-top">
      <i class="icons-angle-up"></i>
   </a>
   
   <!-- Javascript -->
   <script type="text/javascript" src="javascript/jquery.min.js"></script>
   <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
   <script type="text/javascript" src="javascript/jquery.easing.js"></script>
   <script type="text/javascript" src="javascript/matchMedia.js"></script>
   <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
   <script type="text/javascript" src="javascript/jquery.bxslider.js"></script>
   <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
   <script type="text/javascript" src="javascript/parallax.js"></script>
   <script type="text/javascript" src="javascript/imagesloaded.min.js"></script>
   <script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
   <script type="text/javascript" src="javascript/jquery.sticky.js"></script>
   <script type="text/javascript" src="javascript/jquery.fittext.js"></script>
   <script type="text/javascript" src="javascript/smoothscroll.js"></script>
   <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
   <script type="text/javascript" src="javascript/main.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
</body>

</html>