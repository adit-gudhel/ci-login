<?php

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function index()
	{
		$data['content'] = 'user_area';
		$this->load->view('template/index', $data);
	}
	
	public function view_account() 
	{
		$this->load->model('account_model');
		
		$data['account'] = $this->account_model->lihat_data($this->session->userdata('username'));			
		$data['content'] = 'user_detail';
		$this->load->view('template/index', $data);;
	}
	
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="'.base_url().'">Login</a>';	
			die();		
		}		
	}	

}
