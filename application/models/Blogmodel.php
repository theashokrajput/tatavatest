<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogmodel extends CI_Model
{

	public function getblog()
	{

		$this->db->select('*');
		if ($this->session->userdata('user_type') == '0') {
		$this->db->where('cretaed_by', $this->session->userdata('user_id'));
		}
 		$query =  $this->db->get('blog');
		return $query->result();
	}
	public function deletblog($id)
	{
		$this->db->where('cretaed_by', $this->session->userdata('user_id'));
		$this->db->where('id', $id);
		$this->db->delete('blog');
	}

	public function getblogdetails($id)
	{

		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->where('is_active', 1);
		if ($this->session->userdata('user_type') == '0') {
			$this->db->where('cretaed_by', $this->session->userdata('user_id'));
			}
		$this->db->where('end_date >', date('Y-m-d'));
		$query =  $this->db->get('blog');
		return $query->row();
	}
	
	public function update_blog($id)
	{
		$array = array(
			'title' => $this->input->post('title'),
			'deccription' => $this->input->post('deccription'),
			'start_date' => $this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
 	);
	
	$this->db->set($array);

	$this->db->where('id', $id);
		$this->db->where('is_active', 1);
		if ($this->session->userdata('user_type') == '0') {
			$this->db->where('cretaed_by', $this->session->userdata('user_id'));
			}
	$this->db->update('blog');



	}


public function insertblog()
{
	$array = array(
		'title' => $this->input->post('title'),
		'deccription' => $this->input->post('deccription'),
		'start_date' => $this->input->post('start_date'),
		'end_date' => $this->input->post('end_date'),
		'cretaed_by' => $this->session->userdata('user_id'),
 );
 $this->db->insert('blog',$array);
}

}
