<?php
/**
 *
 */
class Admin extends CI_controller
{

  public function index(){
    $this->load->view('Admin/dashboard');
  }

  public function projects(){
    $this->load->view('Admin/projects');
  }
  public function users(){
    $this->load->view('Admin/users');
  }

  public function anproject(){
    $this->load->view('Admin/anproject');
  }
   public function addUser(){
    $this->load->view('Admin/adduser');
  }
  public function message(){
    $this->load->view('Admin/message');
  }
  public function view_message($id){
    $msgid =  $id;
    $this->load->model('Admin_model');
    $row = $this->Admin_model->viewmsg($msgid);
    $data = array('fname' =>$row->fname ,
              'lname' =>$row->lname ,
              'email' =>$row->email ,
              'subject' =>$row->subject  ,
              'website' =>$row->website ,
              'message' =>$row->message
          );
    //$data = array('' =>  );
    echo $msgid;
    $this->load->view('Admin/view_message',$data);
  }



  public function do_upload(){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 1000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('Admin/anproject', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->session->set_userdata($data);
                        $this->load->model('Admin_model');
                        $result= $this->Admin_model->addproject($data);
                        if ($result) {
                          $this->session->set_flashdata('projadd','Added!');
                          //$this->load->view('Admin/upload_success', $data);
                          $this->load->view('Admin/anproject', $data);

                        }
                }
        }
        public function addingUser(){

            $this->load->model('Admin_model');
            $result= $this->Admin_model->addUser();

            if ($result) {
              $this->session->set_flashdata('useradd','Added!');

              $this->load->view('Admin/adduser');

            }else{
              $this->session->set_flashdata('useradd','Wrong credentials');

              $this->load->view('Admin/adduser');
            }

        }

  public function project_edit($id){
    $data['proid']=$id;
    $this->load->model('Admin_model');
    $row = $this->Admin_model->editproject($id);
    echo $row->projtitle;
    $user_data = array(
      'projid' =>$row->projid ,
      'projtitle' =>$row->projtitle ,
      'projdes' =>$row->projdes ,
      'image' =>$row->image,
      'date'=>$row->date);
    $this->session->set_userdata($user_data);

    $this->load->view('Admin/project_edit', $user_data);
  }

  public function userEdit($id){
    $data['userID']=$id;
    $this->load->model('Admin_model');
    $row = $this->Admin_model->edituser($id);
    echo $row->userName;
    $user_data = array(
      'userID' =>$row->userID ,
      'userName' =>$row->userName ,
      'udID' =>$row->udID
      );
    $this->session->set_userdata($user_data);

    $this->load->view('Admin/user_edit', $user_data);
  }

  public function do_upload_update($projid,$image){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 1000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->model('Admin_model');
                        $data = array('upload_data' => '','projid'=>$projid);
                        $data['upload_data']['file_name']=$image;
                        $result= $this->Admin_model->updateproject($data);
                        $this->load->view('Admin/projects', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data(),'projid'=>$projid);
                        $this->session->set_userdata($data);
                        $this->load->model('Admin_model');
                        $result= $this->Admin_model->updateproject($data);
                        if ($result) {
                          $this->session->set_flashdata('projup','Added!');
                          //$this->load->view('Admin/upload_success', $data);
                          $this->load->view('Admin/projects', $data);

                        }
                }
  }
  public function updatingUser($userid){


      $this->load->model('Admin_model');
      $result= $this->Admin_model->updateUser($userid);
      if ($result) {
        $this->session->set_flashdata('userup','Updated!');
        $this->load->view('Admin/users');

      }else{
         $this->session->set_flashdata('userup','Cannot Update!');
         $this->load->view('Admin/users');
      }

  }

  public function project_delete($id){
    $this->load->model('Admin_model');
    $result= $this->Admin_model->proj_delete($id);
    if($result){
      $this->session->set_flashdata('prodel','Project deleted!');
      redirect('Admin/projects');
    }else {
      echo "fail";
    }
  }

  public function userDelete($id){
    $this->load->model('Admin_model');
    $result= $this->Admin_model->userDelete($id);
    if($result){
      $this->session->set_flashdata('userdel','user deleted!');
      redirect('Admin/users');
    }else {
      $this->session->set_flashdata('userdel','cannot delete!');
      redirect('Admin/users');
    }
  }
}


?>
