<?php
class Sommets_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        //SQL standard
        $sql = 'select * from sommets;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function find($id){
        //SQL standard
        $sql = "select * from sommets where code_Sommets = ".$id.";";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function create($nom_Sommets, $altitude_Sommets){
        $data = array('nom_Sommets'=>$nom_Sommets, 'altitude_Sommets'=>$altitude_Sommets);
        return $this->db->insert('sommets', $data);
    }

    public function update($id, $nom_Sommets, $altitude_Sommets) {
        $data = array('code_Sommets'=>$id, 'nom_Sommets'=>$nom_Sommets, 'altitude_Sommets'=>$altitude_Sommets);
        $this->db->where('code_Sommets', $data['code_Sommets']);
        return $this->db->update('sommets', $data);
    }
    
    public function delete($id) {
        $this->db->where('code_Sommets', $id);
        return $this->db->delete('sommets');
    }
}
?>