<?php
class Guides_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function get(){
    //SQL standard
    $sql = 'select * from guides;';
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function find($id){
    //SQL standard
    $sql = "select * from guides where code_Guides = ".$id.";";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function create($nom, $prenom, $email, $motDePasse){
    $data = array('nom_Guides'=>$nom, 'prenom_Guides'=>$prenom, 'email_Guides'=>$email, 'motdepasse_Guides'=>$motDePasse);
    return $this->db->insert('guides', $data);
  }
}
?>
