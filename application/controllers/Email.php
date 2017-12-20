<?php

class Email extends CI_controller
{

  public function index(){
    
  	$config= Array(
  		'protocol' => 'smtp',
  		'smtp_host' => 'ssl://smtp.googlemail.com',
  		'smtp_port' => 587,
  		'smtp_user' => 'basurupasan@gmail.com',
  		'smtp_pass' => 'basu15531',

  	);

  	$this->load->library('email',$config);
  	$this->email->set_newline("\r\n");

  	$this->email->from('basurupasasn@gmail.com','name ofdjjd');
  	$this->email->to('basurupasasn@gmail.com');
  	$this->email->subject('subject');
  	$this->email->message('message of jfdjf');

  	if($this->email->send()){
  		echo 'good';
  	}else{
  		show_error($this->email->print_debugger());
  	}


  }

  
}


?>
