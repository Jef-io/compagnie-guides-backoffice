<?php
class Guides extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function tous(){
    $this->load->model('guides_model');
    $data['guides'] = $this->guides_model->get();
    $data['titre'] = 'Liste des guides : ';

    $this->load->view('header', $data);
    $this->load->view('guides/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $this->load->model('guides_model');
    $data['guides'] = $this->guides_model->find($id);
    $data['titre'] = "Guide #".$id." : ";

    $this->load->view('header', $data);
    $this->load->view('guides/tous', $data);
    $this->load->view('footer');
  }

  /*public function creer(){
    $this->load->model('employes_model');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un employé';

    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');

    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom');
      $prenom = $this->input->post('prenom');
      $this->employes_model->create($nom, $prenom);
    }

    $data['employes'] = $this->employes_model->get();

    $this->load->view('header', $data);
    $this->load->view('employes/creer', $data);
    $this->load->view('footer');
  }*/
}
?>
