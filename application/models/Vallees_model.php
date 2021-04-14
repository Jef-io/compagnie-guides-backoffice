<?php
class Vallees_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
        $this->load->model('abris_model');
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

    
    public function update($id, $nom_Vallees) {
        $data = array('code_Vallees'=>$id, 'nom_Vallees'=>$nom_Vallees);
        $this->db->where('code_Vallees', $data['code_Vallees']);
        return $this->db->update('vallees', $data);
    }
    
    public function delete($id) {
        // $this->db->where('code_Vallees', $id);
        // return $this->db->delete('vallees');

        $sql = "SELECT code_Abris FROM abris WHERE code_Vallees=".$id.";" ;
        $code_Abris = $this->db->query($sql)->result() ;
        foreach ($code_Abris as $code) {
            $abris = $this->abris_model->delete($code->code_Abris);
        }
        $vallees = $this->db->where('code_Vallees', $id)->delete('vallees') ;
    }
}
?>