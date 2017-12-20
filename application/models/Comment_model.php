<?php
/**
 *
 */
class Comment_model extends CI_model
{

  public function insertcom($id){
    $projectid=$id;
    $today = date("Y-m-d H:i:s");
    $com = $this->input->post('comment',TRUE);
    echo $com." ".$projectid;

    $data = array('pid' =>$projectid ,
            'uid' =>1 ,
            'text' =>$com ,
            'timedate'=>$today
    );
    $this->db->insert('comment', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function givefeed($id){
    $feedback=$this->input->post('star',TRUE);
    echo $feedback;
    $projectid= $id;
    $data = array('pid' =>$projectid ,
                'uid'=> 1,
                'feedback' => $feedback
            );
    $this->db->insert('feedback', $data);

    //update average score of project
    $query1 = $this->db->query("SELECT * FROM `feedback` WHERE `pid`='$projectid'");
    $numrows= $query1->num_rows();
    $query2 = $this->db->query("SELECT SUM(`feedback`) AS sum FROM feedback WHERE `pid`='$projectid'");
    $row = $query2->row();
    $totalfeedback= $row->sum;
    $average = $totalfeedback/$numrows;
    $data1 = array('feedback' => $average );
    $this->db->where('projid', $projectid);
    $this->db->update('project', $data1);

    return ($this->db->affected_rows() != 1) ? false : true;

  }
}

 ?>
