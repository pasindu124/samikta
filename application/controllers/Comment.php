<?php
/**
 *
 */
class Comment extends CI_controller
{
  
  public function insertcomment($id){

    $this->load->model('Comment_model');
    $row = $this->Comment_model->insertcom($id);
    if($row!=false){
      echo "pass";
      redirect('Home/proj_view/'.$id);
    }else {
      echo "fail";
    }
  }

  public function givefeedback($id){
    $this->load->model('Comment_model');
    $row = $this->Comment_model->givefeed($id);
    if($row!=false){
      echo "pass";
      redirect('Home/proj_view/'.$id);
    }else {
      echo "fail";
    }
  }

}

 ?>
