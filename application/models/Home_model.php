<?php
/**
 *
 */
class Home_model extends CI_Model
{

  function check_log(){
    //$this->db->from('user_login');
    $this->db->where('user_name', $this->input->post('uname',TRUE));
    $this->db->where('user_password', $this->input->post('password',TRUE));
    $query = $this->db->get('user_login');
    $row = $query->row();
    if($query->num_rows()==1){
      return $row;
    }else {
      return false;
    }
  }


}


 ?>
