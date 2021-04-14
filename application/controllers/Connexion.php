<?php
class Connexion extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->model('connexion_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function connecter(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['titre'] = 'Compagnie des guides - CONNEXION';

        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mdp', 'Mot de passe', 'required');

        if ($this->form_validation->run() === TRUE){
            $email = $this->input->post('email');
            $mdp = $this->input->post('mdp');
            $connection = $this->connexion_model->getAdmin($email, $mdp);
            if ($connection) {
                foreach ($connection as $info) {
                    $this->session->set_userdata('email_Administrateurs', $info->email_Administrateurs);
                    $this->session->set_userdata('nom_Administrateurs', $info->nom_Administrateurs);
                }
                redirect('/', 'refresh');
            }
    
        } else {
            $this->load->view('header');
            $this->load->view('connexion/connecter', $data);
            $this->load->view('footer');
        }
    }

    public function deconnecter() {
        $this->session->unset_userdata('email_Administrateurs', 'nom_Administrateurs');
        redirect('/connexion/connecter', 'refresh');
    }
} 
?>
