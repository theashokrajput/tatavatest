<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->model('Blogmodel');
	}

	public function index()
	{
		$data['error'] = '';
		$this->load->view('login', $data);
	}

	public function check_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');



		if ($this->form_validation->run() == FALSE) {
			$data['error']  = validation_errors();
			 
			$this->load->view('login' , $data);
		} else {

			$data = $this->LoginModel->checkLogin();
			if (empty($data)) {
				$this->session->set_flashdata('message', 'Please check with username and password');
			} else {

				$this->session->set_userdata('user_type', $data->user_type);
				$this->session->set_userdata('user_id', $data->id);
				$this->session->set_userdata('first_name', $data->first_name);

				redirect('home/dashboard');
			}
		}
	}

	public function dashboard()
	{
		$data['bloglist'] = $this->Blogmodel->getblog();
		 
  		$this->load->view('dashboard', $data);
	}

	public function logout()
	{
		session_destroy();
		redirect('home');
	}

	public function deleteBlog($id)
	{
		$this->Blogmodel->deletblog($id);
		redirect('home/dashboard');
	}

	public function edit_blog($id)
	{
		$data['blog'] = $this->Blogmodel->getblogdetails($id);
	 if(!empty($data['blog'])){

		 $this->load->view('blogedit', $data);
	 }else{
		redirect('home/dashboard');
	 }

	}

	public function update_blog($id)
	{
		$data['blog'] = $this->Blogmodel->getblogdetails($id);

		$this->form_validation->set_rules('title', 'Title', 'required');
 


		if ($this->form_validation->run() == FALSE) {
			$data['error']  = validation_errors();
 		}else{
				$this->Blogmodel->update_blog($id);
				redirect('home/dashboard');
		}

		$this->load->view('blogedit', $data);

	}
function addblog()
{
	$this->load->view('blogeadd');

}
public function Add_blog()
	{
 
		$this->form_validation->set_rules('title', 'Title', 'required');
 


		if ($this->form_validation->run() == FALSE) {
			$data['error']  = validation_errors();
 		}else{
				$this->Blogmodel->insertblog();
				redirect('home/dashboard');
		}

		$this->load->view('blogeadd', $data);

	}
	public function register()
	{
 
		$this->form_validation->set_rules('first_name', 'name', 'required');
 


		if ($this->form_validation->run() == FALSE) {
			$data['error']  = validation_errors();
 		}else{
			 $this->db->insert('users', $_POST);
 				redirect('home');
		}

		$this->load->view('adduser', $data);

	}
}
