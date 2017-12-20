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

        <style>
            body {
                background: #FF9000;
            }
            .reg-btn {
                background: #0AC986;
                dispaly: inline-block;
                width: 80%;
                font-size: 16px;
                height: 50px;
                color: #fff;
                text-decoration: none;
                border: none;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
            }
            .reg-form {
                width: 350px;
                padding: 40px 30px;
                background: #eee;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                margin: auto;
                position: absolute;
                left: 0;
                right: 0;
                top: 50%;
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }

        </style>
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
                                <a href="<?php echo base_url(); ?>index.php/Home/" >Home</a>

                            </li>
                            <li class="dropdown submenu">
                                <a href="<?php echo base_url(); ?>index.php/Home/about" >About Us</a>

                            </li>
                            <li >
                                <a href="<?php echo base_url(); ?>index.php/Home/services" >Services</a>

                            </li>

                            <li >
                                <a href="<?php echo base_url(); ?>index.php/Home/projects" >Projects</a>

                            </li>
                            <li><a href="<?php echo base_url(); ?>index.php/Home/contact">Contact</a></li>
                            <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container -->
        </nav>
        <!-- End Header_Area -->

        <div style="padding-top: 3%; padding-bottom: 3%;">
            <div class="container" style="width: 50%; ">



                <div class="panel panel-primary">

                    <div>
                        <p class="text-center text-primary bg-primary" style="font-size: 50px; height: 85px; padding-top: 20px;background: #0AC986;">Register Here</p>
                    </div>
                    <div class="panel-body" style="padding-top: 0% ; background: #eee;">
                        <div class="login-form" style="margin-top:50px;" >

                            <?php if ($this->session->flashdata('msg')) { ?>

                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><?php echo $this->session->flashdata('msg'); ?></strong>
                                </div>
                            <?php } ?>
                            <?php if (validation_errors()) { ?>
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><?php echo validation_errors(); ?></strong>
                                </div>
                            <?php } ?>
                            <?php echo form_open('Register/registerUser'); ?>


                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">First Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name " id="FirstName">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Middle Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="mname" class="form-control" placeholder="Enter Middle Name " id="MidName">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Last Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Last Name " id="LastName">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">NIC</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="nic" class="form-control" placeholder="Enter NIC number" id="Nic">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="email" class="form-control" placeholder="Enter your Email" id="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Date of Birth</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="date" name="dob" class="form-control" placeholder="Date of Birth" id="Dob">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Contact Number</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number" id="Contact">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Username</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" name="username" class="form-control" placeholder="Choose a User Name" id="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="password" name="password" class="form-control" placeholder="Password" id="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:90%; padding-left: 10%;">
                                <label for="name" class="cols-sm-2 control-label">Confirm password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="password" name="repassword" class="form-control" placeholder="Re-enter Password" id="RePassword">
                                    </div>
                                </div>
                            </div>

                            <div style="padding-left: 10%; width: 110%; padding-top: 7%; padding-bottom: 10%;">
                                <button type="submit" class="reg-btn" style="font-size: 26px;">Register</button>
                            </div>
                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>



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
        <!-- Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/map/topbuilder_map.min.js"></script>
        <!-- Theme JS -->
        <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
    </body>
</html>
