<?php
class Abris_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        //SQL standard
        $sql = 'select * from abris;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function find($id){
        //SQL standard
        $sql = "select * from abris where code_Abris = ".$id.";";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function create($nom_Abris, $type_Abris, $altitude_Abris, $places_Abris, 
                           $prixNuit_Abris, $prixRepas_Abris, $telGardien_Abris, $code_Vallees){
        $data = array('nom_Abris'=>$nom_Abris, 'type_Abris'=>$type_Abris, 
                      'altitude_Abris'=>$altitude_Abris, 'places_Abris'=>$places_Abris, 'prixNuit_Abris'=>$prixNuit_Abris,
                      'prixRepas_Abris'=>$prixRepas_Abris, 'telGardien_Abris'=>$telGardien_Abris, 'code_Vallees'=>$code_Vallees);
        return $this->db->insert('abris', $data);
    }

    public function delete($id) {
        $this->db->where('code_Abris', $id);
        return $this->db->delete('abris');
    }
    
    public function update($code_Abris, $nom_Abris, $type_Abris, $altitude_Abris, $places_Abris, 
                           $prixNuit_Abris, $prixRepas_Abris, $telGardien_Abris, $code_Vallees) {
        $data = array('nom_Abris'=>$nom_Abris, 'type_Abris'=>$type_Abris, 
                      'altitude_Abris'=>$altitude_Abris, 'places_Abris'=>$places_Abris, 'prixNuit_Abris'=>$prixNuit_Abris,
                      'prixRepas_Abris'=>$prixRepas_Abris, 'telGardien_Abris'=>$telGardien_Abris, 'code_Vallees'=>$code_Vallees);
        $this->db->where('code_Abris', $code_Abris);
        return $this->db->update('abris', $data);
    }
}
?> 