<?php include 'template/header.php' ?>

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Services</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/Home/services">Home</a></li>
            <li><a href="#" class="active">Services</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class="our_services_tow">
        <div class="container">
            <div class="architecture_area services_pages">
                <div class="portfolio_filter portfolio_filter_2">
                    <ul>
                        <li data-filter="*" class="active"><a href=""><i class="fa fa-wrench" aria-hidden="true"></i>ARCHITECTURE</a></li>
                        <li data-filter=".building"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Building</a></li>
                        <li data-filter=".webdesign"><a href=""><i class="fa fa-cog" aria-hidden="true"></i>CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href=""><i class="fa fa-heart" aria-hidden="true"></i>DESIGN</a></li>
                        <li data-filter=".painting"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Painting</a></li>
                    </ul>
                </div>
                <div class="portfolio_item portfolio_2">
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p><b>DESIGN & BUILD</b> : This is an innovative approach initiated by Samikta Contractors (Pvt) recently. Samikta has built up an image for delivering construction Solutions on time with the budgeted framework for its clients.</p>
                            <p><b>BUILDING CONSTRUCTION</b>: We offer end-to-end solutions for clients seeking construction of the following types of buildings</p>
                            <p><b>CONSULTANCY SERVICE</b>: This is another step to spread out scope in Construction Industry of Sri Lanka.At Samikta contractors (Pvt) Ltd, we have got chartered consultants with well-experienced & knowledge to deliver a valuable service to the clients in Sri Lanka.</p>

                            <a href="<?php echo base_url('index.php/Home/contact'); ?>" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="<?php echo base_url(); ?>assets/images/feature-man-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->

    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
        </div>
        <div class="featured_gallery">
          <?php
          $num=0;
          $query = $this->db->get('project');
          foreach ($query->result() as $row) {
            $id=$row->projid;

          ?>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $row->image ?>" alt="" style="width:366px;height:244px;">
                <div class="gallery_hover">
                    <h4><?php echo $row->projtitle; ?></h4>
                    <a href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>">VIEW PROJECT</a>
                </div>
            </div>
          <?php
          $num+=1;
          if($num==8){
            break;
          }
         }


          ?>

        </div>
    </section>
    <!-- End Our Featured Works Area -->

    <!-- Our Team Area -->
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Team</h2>
            </div>
            <div class="row team_row">
              <div class="col-md-3 col-sm-6 wow fadeInUp">
                 <div class="team_membar">
                      <img src="<?php echo base_url(); ?>assets/images/team/tm-1.jpg" alt="">
                      <div class="team_content">
                          <ul>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                          </ul>
                          <a href="#" class="name">W.Senanayake</a>
                          <h6>Founder &amp; CEO</h6>
                      </div>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                 <div class="team_membar">
                      <img src="<?php echo base_url(); ?>assets/images/team/tm-2.jpg" alt="">
                      <div class="team_content">
                          <ul>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                          </ul>
                          <a href="#" class="name">Pasan Senanayake</a>
                          <h6>Enginear</h6>
                      </div>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="team_membar">
                      <img src="<?php echo base_url(); ?>assets/images/team/tm-3.jpg" alt="">
                      <div class="team_content">
                          <ul>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                          </ul>
                          <a href="#" class="name">Deshan Tharuka Hettiarachchi</a>
                          <h6>Enginear &amp; QS</h6>
                      </div>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                 <div class="team_membar">
                      <img src="<?php echo base_url(); ?>assets/images/team/tm-4.jpg" alt="">
                      <div class="team_content">
                          <ul>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                          </ul>
                          <a href="#" class="name">Chathuri Sithuruwan</a>
                          <h6>Enginear &amp; QS</h6>
                      </div>
                 </div>
              </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->

     <?php include 'template/footer.php' ?>
