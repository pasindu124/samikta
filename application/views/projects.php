<?php include 'template/header.php' ?>

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
                        <div class="renovation_content" style="height:250px;max-height:250px;">
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

    <?php include 'template/footer.php' ?>