<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Samikta Construction </title>


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

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Projects</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/Home">Home</a></li>
            <li><a href="#" class="active">Projects</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
<?php $query = $this->db->get('project');

?>
    <!-- blog-2 area -->
    <section class="blog_tow_area">
        <div class="container">
           <div class="row blog_tow_row">

             <?php foreach ($query->result() as $row) {
               $id=$row->projid;
             ?>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $row->image ?>" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>"><?php echo $row->projtitle ?></a>
                            <div class="date_comment">
                                <a href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row->date ?></a>
                            </div>
                            <p><?php echo substr($row->projdes, 0, 60); ?></p>
                        </div>
                    </div>
                </div>
              <?php } ?>

           </div>
        </div>
    </section>
    <!-- End blog-2 area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ABOUT OUR COMPANY</h2>
                    <img src="<?php echo base_url(); ?>assets/images/footer-logo.png" alt="">
                    <p>Emerge as the leading construction company in Sri Lanka and gradual growth into the international market!</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/300831170250525"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Quick links</h2>
                    <ul class="quick_link">
                        <li><a href="<?php echo base_url();?>index.php/Home/"><i class="fa fa-chevron-right"></i>Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/about"><i class="fa fa-chevron-right"></i>About Us </a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/services"><i class="fa fa-chevron-right"></i>Services</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/projects"><i class="fa fa-chevron-right"></i>Projects</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/contact"><i class="fa fa-chevron-right"></i>Contact Us</a></li>
                    </ul>
                </div>
                <?php $query = $this->db->query("SELECT * FROM `project` ORDER BY `date` DESC"); ?>

                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Latest Projects</h2>
                    <?php
                      $num=0;
                      foreach ($query->result() as $row) {
                      $id=$row->projid; ?>
                      <h4 style="color: white;"><?php echo $row->projtitle ?></h4>
                      <a href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>" class="twitter">@<?php echo substr($row->projdes, 0, 60); ?></a>
                  <?php
                      $num+=1;
                      if($num==3){
                        break;
                      }
                }

                  ?>
                </div>



                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>samikta9949@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>047 2224847</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>071 8337406</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>071 4396045</a></li>

                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>407/8, Kumarathunga Mawatha, Matara </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2017 All rights reserved. Designed by <a href="http://devlanka.com/">Pasindu</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="<?php echo base_url(); ?>assets/vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
</body>
</html>
