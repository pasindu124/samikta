<?php include 'template/header.php' ?>
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
                          <?php $qua = $this->db->query("SELECT * FROM `image` WHERE projid = '$projid'");?>

                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <?php $num=1;foreach ($qua->result() as $row) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $num; ?>"></li>
                          <?php $num+=1;} ?>

                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="<?php echo base_url(); ?>uploads/<?php echo $image ?>" alt="Awesome Image">
                              <div class="carousel-caption">
                                  <!-- we can use this area for data inside image -->
                              </div>
                            </div>


                          <?php foreach ($qua->result() as $row) { ?>
                            <div class="item">
                              <img src="<?php echo base_url(); ?>uploads/images/<?php echo $row->imgname ?>" alt="Awesome Image">
                              <div class="carousel-caption">
                                <!-- we can use this area for data inside image -->

                              </div>
                            </div>

                          <?php } ?>
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
    <?php $query = $this->db->query("SELECT * FROM `feedback` WHERE `uid`='$uid' AND`pid`='$projid'"); //userid
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

                  <?php if ($this->session->userdata('loggedIn')) {

                  ?>
                  <div class="">
                    <h4>Give a feedback to this project...</h4>
                    <div class="stars">
                      <?php echo form_open('Comment/givefeedback/'.$projid.'/'.$uid); ?>

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

                <?php }else{ ?>
                  <h4>To give comments and feedbacks...</h4>
                  <div class="col-md-2">
                    <a href="<?php echo base_url('index.php/Home/login') ?>" class="btn btn-info" role="button">Log In</a>

                  </div>
                  <div class="col-md-1">
                    <h3 style="margin-top:15px;margin-left:-60px;">or</h3>
                  </div>
                  <div class="col-md-2">
                    <a style="margin-left:-90px;"href="<?php echo base_url('index.php/Home/register') ?>" class="btn btn-info" role="button">Register</a>
                  </div>


                <?php }?>
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
                  <?php if ($this->session->userdata('loggedIn')) { ?>


                          <div class="row">
                            <div class="col-md-8">
                              <?php echo form_open('Comment/insertcomment/'.$projid.'/'.$uid); ?>
                                <div class="form-group">
                                  <label for="comment">Comment:</label>
                                  <textarea class="form-control" rows="5" cols="4" name="comment"></textarea>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div>

                          </div>
                        <?php } ?>
                        <?php $query = $this->db->query("SELECT * FROM `comment` WHERE `pid`='$projid' ORDER BY `comment`.`id` DESC"); ?>
                        <div class="row" style="margin-top:20px;">
                          <?php
                            $num=0;
                            foreach ($query->result() as $row) { ?>
                              <?php $quer2=$this->db->query("SELECT * FROM `user` WHERE `userID`='$row->uid'");
                              $row1 = $quer2->row();
                              ?>
                          <div class="col-md-10">
                            <div class="panel panel-default">
                              <div class="panel-heading">User Name :<?php echo $row1->userName ?></div>
                              <div class="panel-body"><?php echo $row->text ?></div>
                            </div>
                          </div>

                        <?php }?>



                        </div>

                </div>
              </div>


      </section>
    </div>
  </div>





     <?php include 'template/footer.php' ?>