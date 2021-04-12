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

  public function creer(){
    $this->load->model('guides_model');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');

    $data['titre'] = 'Ajouter un guide';

    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('mdp', 'Mot de passe', 'required');

    if ($this->form_validation->run() === TRUE){
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $this->guides_model->create($nom, $prenom, $email, $mdp);

        redirect('/guides', 'refresh');

    } else {
        $this->load->view('header', $data);
        $this->load->view('guides/creer', $data);
        $this->load->view('footer');
    }
  }

  public function modifier($id){
        $this->load->model('guides_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $data['titre'] = 'Modifier le guide '.$id ;

        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prenom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mdp', 'Mot de passe', 'required');

        if ($this->form_validation->run() === TRUE){
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $email = $this->input->post('email');
            $mdp = $this->input->post('mdp');
            $this->guides_model->update($id, $nom, $prenom, $email, $mdp);

            redirect('/guides', 'refresh');
        } else {
            $data['guides'] = $this->guides_model->find($id);

            $this->load->view('header');
            $this->load->view('guides/modifier', $data);
            $this->load->view('footer');
        }
  }

  public function supprimer($id){
    $this->load->helper('url');
    $this->load->model('guides_model');

    $this->guides_model->delete($id);

    redirect('/guides', 'refresh');
  }
}
?>
