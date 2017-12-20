<?php

class Register extends CI_controller
{

  public function registerUser(){
    
  	//set validation rules
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');	
	$this->form_validation->set_rules('fname', 'First Name', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	$this->form_validation->set_rules('repassword', 'Repeat Password', 'required|matches[password]');

	if($this->form_validation->run()==FALSE){

		$this->load->view('register');

	}else{

		$this->load->model('user');
		$result_id = $this->user->regUser();

		if($result_id){
			
			$this->createLogin($result_id);

		}else{
			$this->session->set_flashdata('msg','Cannot Register Details');
			redirect('Home/register');
		}
	}


  }

  public function createLogin($id){

  	$this->load->model('user');
  	$result = $this->user->createLogin($id);

  	if($result){
			
  			$this->session->set_flashdata('msg','Registered!');
  			redirect('Home/register');
		}else{
			$this->session->set_flashdata('msg','Cannot create login');
			redirect('Home/register');
		}

  }
}


?>
