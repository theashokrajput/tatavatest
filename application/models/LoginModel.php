<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
	
	public function checkLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		 $this->db->select('*');
		 $this->db->where('email' ,$email);
		 $this->db->where('password' ,$password);
		$query =  $this->db->get('users');
		return $query->row();
		
	}
}
