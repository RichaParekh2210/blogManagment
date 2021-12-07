<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('user/register');
		$this->load->view('common/footer');
	}

	public function registerUser()
	{
		if($this->input->post('register')){
			$insert_user = array(
				'fname' => $this->input->post('fname',true),
				'lname' => $this->input->post('lname',true),
				'email' => $this->input->post('email',true),
				'password' => $this->input->post('password',true)
			);
			$user_id = $this->user_model->register_user($insert_user);
		}
		
		if ($user_id) {
			redirect('user/login');
		}
		
	}

	public function loginUser()
	{
		if($this->input->post('login')){
			$login_user = array(
				'email' => $this->input->post('email',true),
				'password' => $this->input->post('password',true),
			);
			$user_id = $this->user_model->login_user($login_user);
		}
		
		if ($user_id) {
			$this->load->view('common/header');
			redirect('blog/blogList');
			$this->load->view('common/footer');
		}else{
			$this->session->set_flashdata('login_error','Error occured in Login! Please try again.');
			redirect('user/login');
		}
		
	}

	public function login()
	{
		$this->load->view('common/header');
		$this->load->view('user/login');
		$this->load->view('common/footer');
	}

	public function register()
	{
		$this->load->view('common/header');
		$this->load->view('user/register');
		$this->load->view('common/footer');
	}
}
