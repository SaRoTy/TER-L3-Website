<?php

class Config extends CI_Controller
{
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
	}
	
	public function index()
	{
		$this->config();
	}
	
	public function config()
	{
		$this->layout->ajouter_css('entete');
		if(!$this->session->userdata('isadmin'))
		{
			$this->layout->views('entete/menu_disconnect')
						->view('no_connect');
		}else{
			$this->layout->views('entete/menu_connect')
						->view('config');
		}
	}		
					
}
?>