<?php
class NouveauCompte extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->enregistrer();
	}

	public function enregistrer()
{
	//	Chargement de la bibliothèque
 
	$this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
	$this->form_validation->set_rules('mdp',    '"Mot de passe"',       'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
	

	if($this->form_validation->run())
	{
		//	Le formulaire est valide
		$this->load->model('session_model');
		$this->session_model->ajouter_session($this->input->post('pseudo'),$this->input->post('mdp'),$this->input->post('email'));
		$this->load->model('member_model');
		$this->member_model->ajouter_compte($this->input->post('pseudo'),$this->input->post('mdp'),$this->input->post('email'));
		redirect('accueil');
	}
	else
	{
		//	Le formulaire est invalide ou vide
		$this->layout->ajouter_css('entete');
		$this->layout->views('entete/menu_disconnect')
						->view('nouveauCompte');
	}
}
}
?>