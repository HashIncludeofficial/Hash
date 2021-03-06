<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>HashInclude | Your Web Developer</title>
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
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/colors/color4.css" id="colors">
   <link rel="stylesheet" type="text/css" href="css/animate.css">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
   <link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
   <link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
   <link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
   <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
   <link href="icon/favicon.png" rel="shortcut icon">
</head>

<body>
    <div class="se-pre-con"></div>
   <div class="top">
      <div class="container">
         <div class="row">
            <div class="span8">
               <ul class="contact-info inline pull-left">
                  <li class="email"><a href="mailto:support@hashinc.in">support@hashinc.in</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div id="page-slider" class="parallax-bg2 parallax">
      <div class="overlay"></div>
      <header id="header" class="header">
         <div class="header-wrap">
            <div class="container">
               <div class="row">
                  <div class="span2">
                     <div id="logo" class="logo">
                        <a href="./" rel="home">
                           <img src="images/logo.png" alt="Hashinc" />
                        </a>
                     </div>
                  </div>
                  <div class="span10">
                     <div class="btn-menu"></div>
                     <nav id="mainnav" class="mainnav">
						<ul class="menu">
                           <li><a href="index.php">Home</a>
                           <li><a href="about.php">About Us</a>
                           <li><a href="services.php">Services</a></li>
                           <li><a class="active" href="#">Our Work</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li><a href="yourstore.php">YOUR STORE</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>


   <section class="page-title-container">
   	<div class="container page-title">
   		<div class="page-title-wrapper">
			   <div class="span6 page-title-captions">
			   	<h1>Projects</h1>
			   </div><!-- /.span6 -->
			   <div class="span6 breadcrumbs">
					<ul>
					<li><a href="index.php">Home </a>/</li>
					<li><a href="ourwork.php">Our Work </a>/</li>

					</ul>
			   </div>
         </div>
      </div>
   </section>

   <section id="projects" class="section projects-section" style="background-color: #10101d">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="titlebox">
                  <h2 class="subtitle text-white">Projects</h2>
                  <h1 class="maintitle text-color">EXPLORE OUR WORK</h1>
                  <p class="text-white">Here are some highlights of our work. We always try to be creative, different and obviously impressive.</p>
               </div>
               <div class="spacer"></div>
            </div>
         </div>
      </div>
      <div class="project-wrap fullwidth">
         <ul class="project-filter v2 inline">
            <li class="active"><a data-filter="*" href="#">All</a></li>
            <li><a data-filter=".branding" href="#">Branding</a></li>
            <li><a data-filter=".editorial" href="#">Graphic Designs</a></li>
            <li><a data-filter=".web-design" href="#">Web Design</a></li>
         </ul>
         <div class="project-container" data-portfolio-effect="zoomIn">
            <div class="item project-item branding">
               <div class="item-wrap">
                  <div class="project-thumb">
                     <img src="images/portfolio/1.jpg" alt="image">
                     <div class="opacity"></div>
                     <div class="detail">
                        <div class="text">
                           <h3 class="project-title"><a href="portfolio-single.php">BRANDING 03</a></h3>
                           
                        </div>
                        <div class="link">
                           <div class="icon-bg"></div>
                           <div class="icon">
                              <a href="portfolio-single.php"><i class="icons-link"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item project-item editorial">
               <div class="item-wrap">
                  <div class="project-thumb">
                     <img src="images/portfolio/2.jpg" alt="image">
                     <div class="opacity"></div>
                     <div class="detail">
                        <div class="text">
                           <h3 class="project-title">Web Design</h3>
                          
                        </div>
                        <div class="link">
                           <div class="icon-bg"></div>
                           <div class="icon">
                              <a href="portfolio-single.php"><i class="icons-link"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item project-item web-design">
               <div class="item-wrap">
                  <div class="project-thumb">
                     <img src="images/portfolio/3.jpg" alt="image">
                     <div class="opacity"></div>
                     <div class="detail">
                        <div class="text">
                           <h3 class="project-title">Graphic Design</h3>
                           <
                        </div>
                        <div class="link">
                           <div class="icon-bg"></div>
                           <div class="icon">
                              <a href="portfolio-single.php"><i class="icons-link"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </section>

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
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="bottom">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="copyright pull-left">
                  <span><a href="www.hashinc.in">HashInclude</a></span> &copy 2017 | ALL RIGHTS RESERVED.
               </div>
              <div class="bottom-links pull-right">
                  <a href="index.php">HOME</a> |
                  <a href="about.php">ABOUT US</a> |
                  <a href="services.php">SERVICES</a> |
                  <a href="#">OUR WORK</a> |
                  <a href="contact.php">CONTACT</a> |
                  <a href=""yourstore.php>YOUR STORE</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <a class="go-top">
      <i class="icons-angle-up"></i>
   </a>
   
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
   <script type="text/javascript" src="javascript/smoothscroll.js"></script>
   <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
   <script type="text/javascript" src="javascript/switcher.js"></script>
   <script type="text/javascript" src="javascript/main.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
</body>

</html>