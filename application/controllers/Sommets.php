<?php
class Sommets extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->model('sommets_model');
    }

  public function tous(){
    $data['sommets'] = $this->sommets_model->get();
    $data['titre'] = 'Sommets :';

    $this->load->view('header', $data);
    $this->load->view('sommets/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['sommets'] = $this->sommets_model->find($id);
    $data['titre'] = "Sommet numéro".$id." : ";

    $this->load->view('header', $data);
    $this->load->view('sommets/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un sommet';

    $this->form_validation->set_rules('nom_Sommets', 'Nom', 'required');
    $this->form_validation->set_rules('altitude_Sommets', 'Altitude', 'required');

    if ($this->form_validation->run() === TRUE){
        $nom_Sommets = $this->input->post('nom_Sommets');
        $altitude_Sommets = $this->input->post('altitude_Sommets');
        $this->sommets_model->create($nom_Sommets, $altitude_Sommets);
    }

    $data['sommets'] = $this->sommets_model->get();

    $this->load->view('header', $data);
    $this->load->view('sommets/creer', $data);
    $this->load->view('footer');
  }
}
?>
