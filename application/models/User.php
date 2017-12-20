<?php
/**
 *
 */
class User extends CI_Model
{

  function regUser(){
    
      $data = array(

        'fname'   => $this->input->post('fname',TRUE),
        'mname'   => $this->input->post('mname',TRUE),
        'lname'   => $this->input->post('lname',TRUE),
        'nic'     => $this->input->post('nic',TRUE),
        'email'   => $this->input->post('email',TRUE),
        'dob'     => $this->input->post('dob',TRUE),
        'contact' => $this->input->post('contact',TRUE)
      );

      $result =  $this->db->insert('userdetail',$data);
      

      if($result){
        $id = $this->db->insert_id();
        return $id;
      }else{
        return false;
      }

  }



  function createLogin($id){
     
      $data = array(

        'userName'   => $this->input->post('username',TRUE),
        'password'   => md5($this->input->post('password',TRUE)),
        'userType'   => 'customer',
        'udID'       => $id
      );

      return $this->db->insert('user',$data);

  }

  function checkLogin(){
    
      $uname = $this->input->post('username');
      $pass  = $this->input->post('password');

      $pass = md5($pass);

      $this->db->where('username',$uname);
      $this->db->where('password',$pass);

      $result = $this->db->get('user');

      if($result->num_rows()==1){
        return $result->row(0);
      }else{
        return false;
      }

  }

  function contactUs($data){
    $this->db->insert('contactus',$data);
  }


}


 ?>
