<?php
class Ascensions extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->model('ascensions_model');
        $this->load->model('sommets_model');
        $this->load->model('abris_model');
    }

  public function tous(){
    $ascensions = $this->ascensions_model->get();

    $sommets = array();
    $abris = array();
    $counter=0;
    foreach($ascensions as $ascension){
      $sommets[$counter]['nom_Sommets'] = $this->sommets_model->find($ascension->code_Sommets);
      $abris[$counter]['nom_Abris'] = $this->abris_model->find($ascension->code_Abris);
      $counter++;
    }

    $data['ascensions'] = $ascensions;
    $data['sommets'] = $sommets;
    $data['abris'] = $abris;
    $data['titre'] = 'Ascensions :';

    $this->load->view('header', $data);
    $this->load->view('ascensions/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['ascensions'] = $this->ascensions_model->find($id);
    $data['titre'] = "Abri numéro".$id." : ";

    $this->load->view('header', $data);
    $this->load->view('ascensions/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un abri';

    $this->form_validation->set_rules('code_Sommets', 'Sommet', 'required');
    $this->form_validation->set_rules('code_Abris', 'Abri', 'required');
    $this->form_validation->set_rules('difficulte_Ascension', 'Difficulté de l\'ascension', 'required');
    $this->form_validation->set_rules('duree_Ascension', 'Durée de l\'ascension', 'required');

    if ($this->form_validation->run() === TRUE){
        $code_Sommets = $this->input->post('code_Sommets');
        $code_Abris = $this->input->post('code_Abris');
        $difficulte_Ascension = $this->input->post('difficulte_Ascension');
        $duree_Ascension = $this->input->post('duree_Ascension');
        $this->ascensions_model->create($code_Sommets, $code_Abris, $difficulte_Ascension, $duree_Ascension);
    }

    $data['ascensions'] = $this->ascensions_model->get();
    $data['sommets'] = $this->sommets_model->get();
    $data['abris'] = $this->abris_model->get();

    $this->load->view('header', $data);
    $this->load->view('ascensions/creer', $data);
    $this->load->view('footer');
  }

  public function modifier($id_sommet, $id_abri){
    $this->load->model('ascensions_model');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');

    $data['titre'] = 'Modifier l\'ascension entre le sommet numéro '.$id_sommet.'et l\'abri numéro '.$id_abri ;

    $this->form_validation->set_rules('code_Sommets', 'Sommet', 'required');
    $this->form_validation->set_rules('code_Abris', 'Abri', 'required');
    $this->form_validation->set_rules('difficulte_Ascension', 'Difficulté de l\'ascension', 'required');
    $this->form_validation->set_rules('duree_Ascension', 'Durée de l\'ascension', 'required');


    if ($this->form_validation->run() === TRUE){
      $code_Sommets = $this->input->post('code_Sommets');
      $code_Abris = $this->input->post('code_Abris');
      $difficulte_Ascension = $this->input->post('difficulte_Ascension');
      $duree_Ascension = $this->input->post('duree_Ascension');
      $this->ascensions_model->create($code_Sommets, $code_Abris, $difficulte_Ascension, $duree_Ascension);

      redirect('/ascensions', 'refresh');
    } else {
      $data['ascensions'] = $this->ascensions_model->find($id_sommet, $id_abri);
      $data['sommets'] = $this->sommets_model->get();
      $data['abris'] = $this->abris_model->get();

      $this->load->view('header');
      $this->load->view('ascensions/modifier', $data);
      $this->load->view('footer');
    }
}

public function supprimer($id_sommet, $id_abri){
$this->load->helper('url');
$this->load->model('ascensions_model');

$this->ascensions_model->delete($id_sommet, $id_abri);

redirect('/ascensions', 'refresh');
}
} 
?>
