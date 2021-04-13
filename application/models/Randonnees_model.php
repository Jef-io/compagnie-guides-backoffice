<?php
class Randonnees_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        $sql = 'select * from randonnees;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function find($id){
        $sql = 'select * from randonnees where code_Randonnees = '.$id.';';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getInfos($id){
        $sql =" SELECT  sommets.*, ascension.*, abris.*, reserver.*
                FROM randonnees, concerner, ascension, reserver, sommets, abris
                WHERE randonnees.code_Randonnees = concerner.code_Randonnees 
                AND ascension.code_Sommets = concerner.code_Sommets 
                AND reserver.code_Abris = ascension.code_Abris 
                AND reserver.code_Randonnees = randonnees.code_Randonnees
                AND sommets.code_Sommets = ascension.code_Sommets
                AND abris.code_Abris = ascension.code_Abris
                AND reserver.code_Abris = abris.code_Abris
                AND reserver.code_Randonnees = randonnees.code_Randonnees
                AND randonnees.code_Randonnees = ".$id.";";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>