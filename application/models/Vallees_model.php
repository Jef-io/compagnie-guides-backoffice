<?php
class Vallees_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        //SQL standard
        $sql = 'select * from vallees;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function find($id){
        //SQL standard
        $sql = "select * from vallees where code_Vallees = ".$id.";";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function create($nom_Vallees){
        $data = array('nom_Vallees'=>$nom_Vallees);
        return $this->db->insert('vallees', $data);
    }
}
?>