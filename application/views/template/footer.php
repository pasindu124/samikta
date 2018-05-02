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
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>041 2224847</a></li>
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
