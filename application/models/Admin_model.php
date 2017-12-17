<?php
/**
 *
 */
class Admin_model extends CI_model
{

  public function addproject($data_array){
    $title=$this->input->post('title',TRUE);
    $des=$this->input->post('description',TRUE);
    $today = date("Y-m-d H:i:s");
    $projectdata = array(  'projtitle' =>$title ,
                           'projdes' =>$des ,
                           'image' => $data_array['upload_data']['file_name'],
                           'date' => $today
                         );

    //print_r($data_array);

    $this->db->insert('project', $projectdata);
    return ($this->db->affected_rows() != 1) ? false : true;


  }

  public function editproject($id){
    $this->db->select('*');
    $this->db->from('project');
    $this->db->where('projid', $id);
    $query = $this->db->get();
    $row = $query->row();
    //echo $row->projtitle;
    return $row;
  }

  public function updateproject($data_array){
    $title=$this->input->post('title',TRUE);
    $des=$this->input->post('description',TRUE);
    //$today = date("Y-m-d H:i:s");
    $id=$data_array['projid'];
    $projectdata = array(  'projtitle' =>$title ,
                           'projdes' =>$des ,
                           'image' => $data_array['upload_data']['file_name']

                         );

    //print_r($data_array);
    $this->db->where('projid', $id);
    $this->db->update('project', $projectdata);
    return ($this->db->affected_rows() != 1) ? false : true;


  }

  public function proj_delete($id){
    $this->db->where('projid', $id);
    $this->db->delete('project');
    return ($this->db->affected_rows() != 1) ? false : true;
  }
}

 ?>
