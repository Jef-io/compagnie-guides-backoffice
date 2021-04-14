<?php
class Connexion_model extends CI_Model {
  
    public function __construct(){
        $this->load->database(); 
    }

    public function getAdmin($userEmail, $userPassword){
        //SQL standard
        $sql = "select * from administrateur where email_Administrateurs = '".$userEmail."' and motDePasse_Administrateurs = '".$userPassword."' ;";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>