<?php
class Deconnexion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->disconnect();
	}
	
	public function disconnect()
	{
		$this->session->sess_destroy();
		redirect('accueil');
	}
}