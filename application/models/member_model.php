<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model
{
	protected $table = 'compte';
	
	public function ajouter_compte($login,$password,$email)
	{
		return $this->db->set('login',$login)
					->set('password',hash('sha256',$password))
					->set('email',$email)
					->insert($this->table);
	}
	
	public function get_pass($login)
	{
		$this->db->select('password');
		$this->db->from('compte');
		$this->db->where('login',$login);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function verif_compte($login, $password) {
        $q = $this
              ->db
              ->where('login', $login)
              ->where('password', hash('sha256',($password)))
              ->limit(1)
              ->get('compte');

        if ( $q->num_rows > 0 ) {
           // person has account with us
           return true;
        }
        return false;
    }
	
}
?>