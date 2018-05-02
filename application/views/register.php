<?php include 'template/header.php' ?>
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


 <?php include 'template/footer.php' ?>