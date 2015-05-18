<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class session_model extends CI_Model
{	
	protected $table = 'ci_sessions';

	public function ajouter_session($pseudo,$pass,$email)
	{
		return $this->db->set('session_id',	$this->session->userdata('session_id'))
			        ->set('ip_address', 	$this->session->userdata('ip_address'))
				->set('user_agent',	$this->session->userdata('user_agent'))
				->set('last_activity', $this->session->userdata('last_activity'))
				->insert($this->table);
	}
}
?>
