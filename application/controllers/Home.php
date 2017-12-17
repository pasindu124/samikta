<?php
/**
 *
 */
class Home extends CI_Controller
{

  public function index(){
    $this->load->view('index');
  }
  public function contact(){
    $this->load->view('contact');
  }
  public function about(){
    $this->load->view('about');
  }
  public function services(){
    $this->load->view('services');
  }
  public function projects(){
    $this->load->view('projects');
  }
  public function login(){
    $this->load->view('login');
  }
  public function empty1(){
    $this->load->view('empty');
  }
  public function register(){
    $this->load->view('register');
  }
  public function project_view(){
    $this->load->view('project_view');
  }

  public function user_log(){
    $this->load->model('Home_model');
    $row = $this->Home_model->check_log();
    if ($row!=false) {
      echo $row->fname;
      $user_data = array(
        'username' =>$row->user_name ,
        'fname' =>$row->fname ,
        'lname' =>$row->lname ,
        'email' =>$row->user_rmail,
        'loggedin'=>TRUE);

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('welcome','Welcome!');
        redirect('Admin/index');


    }else {
      $this->load->view('login');
    }

  }

  public function user_logout(){
    $this->session->unset_userdata('fname');
    $this->session->unset_userdata('lname');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('loggedin');


    redirect('Home/login');
  }

  public function proj_view($id){
    $this->load->model('Home_model');
    $row = $this->Home_model->proj_view($id);
    if ($row!=false) {
      $data = array('projid' => $row->projid,
      'projtitle' => $row->projtitle,
      'projdes' => $row->projdes,
      'image' => $row->image,
      'date' => $row->date
     );
      $this->load->view('project_view',$data);

    }

    else {
      echo "fail";
    }
  }
}

 ?>
