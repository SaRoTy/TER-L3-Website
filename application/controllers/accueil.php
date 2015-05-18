<?php
class Accueil extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->accueil();
	}

	public function accueil()
	{
		$this->layout->ajouter_css('entete');
		$this->layout->ajouter_css('test');
		if( $this->session->userdata('isadmin'))
		{
			$this->layout->views('entete/menu_connect')
						->view('accueil/text');
		}else{
			$this->layout->views('entete/menu_disconnect')
						->view('accueil/text');
	}
	}
}
?>