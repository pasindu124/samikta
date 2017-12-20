<?php

class Login extends CI_controller
{

  public function loginUser(){

  	//set validation rules
    $this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');

	if($this->form_validation->run()==FALSE){

		$this->load->view('login');

	}else{

		$this->load->model('User');
		$result = $this->User->checkLogin();

		if($result != false){

			$userData = array(
				'userID'=>$result->userID,
				'userName'=>$result->userName,
				'userType'=>$result->userType,
				'loggedIn'=>TRUE
			);

			if($result->userType == 'admin'){
				$this->session->set_userdata($userData);
				$this->session->set_flashdata('welcome','welcome back Admin');
				redirect('Admin');
			}elseif ($result->userType == 'customer') {
				$this->session->set_userdata($userData);
				$this->session->set_flashdata('welcome','welcome back customer');
				redirect('Home');
			}
			


		}else{
			$this->session->set_flashdata('err','Incorrect login Details');
			redirect('Home/login');
		}
	}


  }

  public function logout(){

  	$this->session->unset_userdata('userID');
  	$this->session->unset_userdata('userName');
  	$this->session->unset_userdata('userType');
  	$this->session->unset_userdata('loggedIn');
  	redirect('Home/login');
  }
}


?>
