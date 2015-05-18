<?php
class Connexion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->connect();
	}
	
	public function connect()
	{
	$this->form_validation->set_rules('login', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
	$this->form_validation->set_rules('mdp','"Mot de passe"','trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
	
	if($this->form_validation->run())
	{
		$this->load->model('member_model','Member');
		if ($this->Member->verif_compte($this->input->post('login'),$this->input->post('mdp')))
		{
			$this->session->set_userdata('pseudo',$this->input->post('login'));
			$this->session->set_userdata('isadmin',true);
			redirect('accueil');
		}
		else
		{
			$var['erreur'] = 'Le pseudo et le mot de passe ne correspondent pas.';
			$this->layout->ajouter_css('entete');
			$this->layout->views('entete/menu_disconnect')
						->view('connexion');
		}
	}
	else
	{
		$this->layout->ajouter_css('entete');
		$this->layout->views('entete/menu_disconnect')
					 ->view('connexion');
	}
	}
}
