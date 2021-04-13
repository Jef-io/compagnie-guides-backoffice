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

    $this->load->view('header');
    $this->load->view('randonnees/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $randonnees = $this->randonnees_model->find($id);
    
    $guides = array();
    $infos = array();
    foreach($randonnees as $randonnee){
      $guides[$randonnee->code_Randonnees]['nom_Guides'] = $this->guides_model->find($randonnee->code_Guides);
      $infos[$randonnee->code_Randonnees]['infos'] = $this->randonnees_model->getInfos($randonnee->code_Randonnees);
    }

    $data['randonnees'] = $randonnees;
    $data['guides'] = $guides;
    $data['infos'] = $infos;
    $data['titre'] = 'Détails :';

    $this->load->view('header');
    $this->load->view('randonnees/details', $data);
    $this->load->view('footer');
  }
}
?>
