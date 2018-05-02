<?php include 'template/header.php' ?>



    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>index.php/Home/">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA6nR0MQdGP36hG5kD5CsQz7wl4SdrIEbM
    &q=loc:(5.9462419,80.53043666666666)" allowfullscreen></iframe>

        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe> -->
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p>One day, a company was formed to support the country’s development programmes while providing employment opportunities to many talented youths. It is none other than Samikta Construction (Pvt) Ltd. Initially the company undertook small-scale contracts, starting at the base. By ICTAD grading the company was at M7 or C8. Today Samikta Construction (Pvt) Ltd is one of the foremost construction companies in the country holding Grade C1.
Grade C1 signifies the financial and technical stability of the company to undertake large-scale contracts of huge value and complexity. </p>
<p>Subsequently, obtaining ISO certification from 2008 has brought Samikta Construction (Pvt) Ltd to international standards. This required the company to enhance its staff as well as supportive services. The company also encompasses modern technologies and techniques to provide total customer satisfaction and on time delivery of Projects.  With this as the motto, the company exerted much to win many awards from prestigious institutions for outstanding performances and quality construction.</p>
                    <p></p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">407/8, Kumarathunga Mawatha,  <br> Matara </a>
                            <a href="#">047 2224847</a>
                            <a href="#">047 2224847</a>
                            <a href="#">samikta9949@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <?php if($this->session->flashdata('contact')){echo "<h2>".$this->session->flashdata('contact')."</h2>";} ?>
                    <h2>Send Us a Message</h2>
                    <form action="<?php echo site_url('Contact/insertdata');?>" class="form-inline contact_box" method="POST" required>
                        <input type="text" class="form-control input_box" placeholder="First Name *" name="fname" required>
                        <input type="text" class="form-control input_box" placeholder="Last Name *" name="lname" required>
                        <input type="text" class="form-control input_box" placeholder="Your Email *" name="email" required>
                        <input type="text" class="form-control input_box" placeholder="Subject" name="subject">
                        <input type="text" class="form-control input_box" placeholder="Your Website" name="website">
                        <textarea class="form-control input_box" placeholder="Message" name="message" required></textarea>
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <?php include 'template/footer.php' ?>
