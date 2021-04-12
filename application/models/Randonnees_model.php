<?php
class Randonnees_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        //SQL standard
        $sql = 'select * from randonnees;';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>