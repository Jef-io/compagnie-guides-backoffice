<?php
class Ascensions_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        //SQL standard
        $sql = 'select * from ascension;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function find($id_sommet, $id_abri){
        //SQL standard
        $sql = "select * from ascension where code_Sommets = ".$id_sommet." AND code_Abris = ".$id_abri.";";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function create($code_Sommets, $code_Abris, $difficulte_Ascension, $duree_Ascension){
        $data = array('code_Sommets'=>$code_Sommets, 'code_Abris'=>$code_Abris, 
                      'difficulte_Ascension'=>$difficulte_Ascension, 'duree_Ascension'=>$duree_Ascension);
        return $this->db->insert('ascension', $data);
    }

    public function update($code_Sommets, $code_Abris, $difficulte_Ascension, $duree_Ascension) {
        $data = array('code_Sommets'=>$code_Sommets, 'code_Abris'=>$code_Abris, 
                      'difficulte_Ascension'=>$difficulte_Ascension, 'duree_Ascension'=>$duree_Ascension);
        $this->db->where('code_Sommets', $code_Sommets);
        $this->db->where('code_Abris', $code_Abris);
        return $this->db->update('ascension', $data);
    }
    
    public function delete($id) {
        $this->db->where('code_Sommets', $code_Sommets);
        $this->db->where('code_Abris', $code_Abris);
        return $this->db->delete('ascension');
    }
}
?>