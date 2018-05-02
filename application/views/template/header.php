<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Samikta Construction! </title>


    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7699693897449287",
        enable_page_level_ads: true
      });
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
  <section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
              <li><a href="#"><i class="fa fa-phone"></i>041 2224847</a></li>
              <li><a href="#"><i class="fa fa-envelope-o"></i>samikta9949@gmail.com</a></li>
              <?php if($this->session->userdata('userType') == 'admin'){ ?>
                      <li> <a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
                      <li><a href="#"><i class="fa fa-user-o"></i><?php echo $this->session->userdata('userName'); ?></a></li>
                      <a style="background-color:green;margin:10px; "href="<?php echo base_url('index.php/Admin') ?>" target="_blank" class="btn btn-info" role="button"><b>Admin Panel</b></a>

               <?php   }elseif($this->session->userdata('userType') == 'customer'){ ?>
                      <li> <a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
                      <li><a href="#"><i class="fa fa-user-o"></i><?php echo $this->session->userdata('userName'); ?></a></li>
               <?php  }else{  ?>
                      <li><a href="<?php echo base_url('index.php/Home/login') ?>"><i class="fa fa-sign-in"></i>Login</a></li>
                       <li><a href="<?php echo base_url('index.php/Home/register') ?>"><i class="fa fa-user-o"></i>Register</a></li>
                <?php }  ?>

            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/300831170250525"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="margin-top:-30px;" href="<?php echo base_url();?>index.php/Home/index"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" ></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url();?>index.php/Home/" >Home</a>

                        </li>
                        <li >
                            <a href="<?php echo base_url();?>index.php/Home/about" >About Us</a>

                        </li>
                        <li >
                            <a href="<?php echo base_url();?>index.php/Home/services" >Services</a>

                        </li>

                        <li >
                            <a href="<?php echo base_url();?>index.php/Home/projects" >Projects</a>

                        </li>
                        <li><a href="<?php echo base_url();?>index.php/Home/contact">Contact</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->