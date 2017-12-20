<?php
/**
 *
 */
class Contact extends CI_Controller
{

  public function insertdata(){
    $this->load->model('Contact_model');
    $row = $this->Contact_model->insdata();

    if($row!=false){
      $this->session->set_flashdata('contact', 'Your message has been sent!');
      redirect('Home/contact');
    }else {
      echo "fail";
    }

  }
}


?>
