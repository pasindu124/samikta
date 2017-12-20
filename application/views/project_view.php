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
     <link href="<?php echo base_url(); ?>assets/css/material-kit.css" rel="stylesheet"/>
     <link href="<?php echo base_url(); ?>assets/css/stars.css" rel="stylesheet"/>


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
    <nav class="navbar navbar-default header_aera" id="main_navbar" style="background-color:white;">
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
            <div class="col-md-10 p0" >
                <div class="collapse navbar-collapse" id="min_navbar" >
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url();?>index.php/Home/" >Home</a>

                        </li>
                        <li class="dropdown submenu">
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
<div class="container">

  <div class="row">
    <section class="our_feature_area">
      <div class="container">
            <div class="tittle wow fadeInUp">
                <h2><?php echo $projtitle;?></h2>
                <h4>Date Added : <?php echo $date;?></h4>
            </div>
            <div class="section" id="carousel">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">

                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="<?php echo base_url(); ?>uploads/<?php echo $image ?>" alt="Awesome Image">
                              <div class="carousel-caption">
                                  <!-- we can use this area for data inside image -->
                              </div>
                            </div>
                            <div class="item">
                              <img src="<?php echo base_url(); ?>uploads/<?php echo $image ?>" alt="Awesome Image">
                              <div class="carousel-caption">
                                <!-- we can use this area for data inside image -->

                              </div>
                            </div>
                            <div class="item">
                              <img src="<?php echo base_url(); ?>uploads/<?php echo $image ?>" alt="Awesome Image">
                              <div class="carousel-caption">
                                <!-- we can use this area for data inside image -->

                              </div>
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="material-icons">keyboard_arrow_left</i>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="material-icons">keyboard_arrow_right</i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- End Carousel Card -->

                  </div>
                </div>

              </div>
            </div>
            <p><?php echo $projdes ?></p>
        </div>

    </section>
    <?php $query = $this->db->query("SELECT * FROM `feedback` WHERE `uid`=1 AND`pid`='$projid'"); //userid
          $feedback=0;
          $flag=0;
          if ($query->num_rows()==1) {
            $flag=1;
            $row = $query->row();
            $feedback=$row->feedback;

          }

          $query1 = $this->db->query("SELECT `feedback` FROM `project` WHERE `projid`='$projid'");
          $row1 = $query1->row();
    ?>
    </div>
    <div class="row">
      <section class="our_feature_area">
        <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="">
                    <h4>Give a feedback to this project...</h4>
                    <div class="stars">
                      <?php echo form_open('Comment/givefeedback/'.$projid); ?>

                        <input class="star star-5" id="star-5" type="radio" name="star" value="5" <?php if($feedback==5){?>checked<?php } ?>  <?php if($flag==1){?>disabled<?php } ?>/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star" value="4" <?php if($feedback==4){?>checked<?php } ?>  <?php if($flag==1){?>disabled<?php } ?>/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star" value="3" <?php if($feedback==3){?>checked<?php } ?>  <?php if($flag==1){?>disabled<?php } ?>/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star" value="2" <?php if($feedback==2){?>checked<?php } ?>  <?php if($flag==1){?>disabled<?php } ?>/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star" value="1" <?php if($feedback==1){?>checked<?php } ?>  <?php if($flag==1){?>disabled<?php } ?>/>
                        <label class="star star-1" for="star-1"></label>
                        <button style="background-color:orange;" type="submit" class="btn btn-primary" <?php if($flag==1){?>disabled<?php } ?>>Give Feedback</button>
                      </form>
                    </div>
                    <p>Average feedback score: <?php echo $row1->feedback ?></p>
                  </div>

                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="tittle wow fadeInUp" style="text-align: left;">
                      <h2 >Leave a comment..</h2>
                  </div>
              </div>
              </div>

              <div class="row">
                <div class="container">
                        <?php $query = $this->db->query("SELECT * FROM `comment` WHERE `pid`='$projid'"); ?>
                        <div class="row" style="margin-top:20px;">
                          <?php
                            $num=0;
                            foreach ($query->result() as $row) { ?>
                          <div class="col-md-10">
                            <div class="panel panel-default">
                              <div class="panel-heading">User id:<?php echo $row->uid ?></div>
                              <div class="panel-body"><?php echo $row->text ?></div>
                            </div>
                          </div>

                        <?php }?>



                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <?php echo form_open('Comment/insertcomment/'.$projid); ?>
                              <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="5" cols="4" name="comment"></textarea>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>

                        </div>
                </div>
              </div>


      </section>
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
