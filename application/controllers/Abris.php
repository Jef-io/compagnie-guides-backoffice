<?php
class Abris extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->model('abris_model');
    }

  public function tous(){
    $data['abris'] = $this->abris_model->get();
    $data['titre'] = 'Abris :';

    $this->load->view('header', $data);
    $this->load->view('abris/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['abris'] = $this->abris_model->find($id);
    $data['titre'] = "Abri numéro".$id." : ";

    $this->load->view('header', $data);
    $this->load->view('abris/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un abri';

    $this->form_validation->set_rules('nom_Abris', 'Nom', 'required');
    $this->form_validation->set_rules('type_Abris', 'Type d\'abris', 'required');
    $this->form_validation->set_rules('altitude_Abris', 'Altitude', 'required');
    $this->form_validation->set_rules('places_Abris', 'Nombre de places', 'required');
    $this->form_validation->set_rules('prixNuit_Abris', 'Prix à la nuit');
    $this->form_validation->set_rules('prixRepas_Abris', 'Prix du repas');
    $this->form_validation->set_rules('telGardien_Abris', 'Téléphone du gardien');
    $this->form_validation->set_rules('code_Vallees', 'Code de la vallée', 'required');

    if ($this->form_validation->run() === TRUE){
        $nom_Abris = $this->input->post('nom_Abris');
        $type_Abris = $this->input->post('type_Abris');
        $altitude_Abris = $this->input->post('altitude_Abris');
        $places_Abris = $this->input->post('places_Abris');
        $prixNuit_Abris = $this->input->post('prixNuit_Abris');
        $prixRepas_Abris = $this->input->post('prixRepas_Abris');
        $telGardien_Abris = $this->input->post('telGardien_Abris');
        $code_Vallees = $this->input->post('code_Vallees');
        $this->abris_model->create($nom_Abris, $type_Abris, $altitude_Abris, $places_Abris, $prixNuit_Abris, 
                                    $prixRepas_Abris, $telGardien_Abris, $code_Vallees);
    }

    $data['abris'] = $this->abris_model->get();

    $this->load->view('header', $data);
    $this->load->view('abris/creer', $data);
    $this->load->view('footer');
  }
}
?>