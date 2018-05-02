<?php include 'template/header.php' ?>

<div class="container">
  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>
  <div class="login-form" style="margin-top:50px;">
     <h1>Samikta</h1>
     <?php if($this->session->flashdata('err')){
        echo "<h3>".$this->session->flashdata('err')."</h3>";
        }?>
     <?php echo validation_errors(); ?>
     <?php echo form_open('Login/loginUser'); ?>
     <div class="form-group ">
       <input type="text" name="username" class="form-control" placeholder="Username " id="UserName">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" name="password" class="form-control" placeholder="Password" id="Password">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <button type="submit" class="log-btn" >Log in</button>
    <?php echo form_close();?>

   </div>
</div>


     <?php include 'template/footer.php' ?>