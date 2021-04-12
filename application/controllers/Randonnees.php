<?php
class Randonnees extends CI_Controller {
  
  public function __construct(){
      parent::__construct();
      $this->load->model('randonnees_model');
      $this->load->model('guides_model');
  }

  public function tous(){
    $randonnees = $this->randonnees_model->get();
    
    
    $guides = array();
    foreach($randonnees as $randonnee){
      $guides[$randonnee->code_Randonnees]['nom_Guides'] = $this->guides_model->find($randonnee->code_Guides);
    }

    
    $data['randonnees'] = $randonnees;
    $data['guides'] = $guides;
    $data['titre'] = 'Randonnées :';

    $this->load->view('header', $data);
    $this->load->view('randonnees/tous', $data);
    $this->load->view('footer');
  }
}
?>
