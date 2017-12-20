<?php
/**
 *
 */
class Contact_model extends CI_Model
{

  public function insdata(){
    $fname = $this->input->post('fname',TRUE);
    $lname = $this->input->post('lname',TRUE);
    $email = $this->input->post('email',TRUE);
    $subject = $this->input->post('subject',TRUE);
    $website = $this->input->post('website',TRUE);
    $message = $this->input->post('message',TRUE);


    $data = array('fname' => $fname,
        'lname' => $lname,
        'email  ' => $email,
        'subject' => $subject,
        'website' => $website,
        'message' => $message

    );

    $this->db->insert('message', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }
}

 ?>
