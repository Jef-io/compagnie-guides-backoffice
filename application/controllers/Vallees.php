<?php
class Vallees extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->model('vallees_model');
    }

  public function tous(){
    $data['vallees'] = $this->vallees_model->get();
    $data['titre'] = 'Vallées :';

    $this->load->view('header', $data);
    $this->load->view('vallees/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['vallees'] = $this->vallees_model->find($id);
    $data['titre'] = "Vallée numéro".$id." : ";

    $this->load->view('header', $data);
    $this->load->view('vallees/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un vallée';

    $this->form_validation->set_rules('nom_Vallees', 'Nom', 'required');

    if ($this->form_validation->run() === TRUE){
        $nom_Vallees = $this->input->post('nom_Vallees');
        $this->vallees_model->create($nom_Vallees);
    }

    $data['vallees'] = $this->vallees_model->get();

    $this->load->view('header', $data);
    $this->load->view('vallees/creer', $data);
    $this->load->view('footer');
  }
}
?>
