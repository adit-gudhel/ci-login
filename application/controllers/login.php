<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	/* Login Controller
	 * This class handles login and register process, 
	 * validate login and logout process.
	 *
	 * @author	Aditya Nursyahbani
	 * @link	http://aditya-nursyahbani.com/
	*/
		
	public function __construct(){
		parent::__construct();
		$this->load->model('account_model');
	}
	
	public function index()
	{
		$data['content'] = 'login';
		$this->load->view('template/index', $data);		
	}
	
	public function cek_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		if(empty($user) or empty($pass)){
			$this->session->set_flashdata('msg', 'Username or password can\'t be blank');
			redirect('login');
		}
				
		$query = $this->account_model->validasi();
		
		if($query)
		{
			$data = array(
				'username' => $user,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('user');
		}
		else 
		{
			$this->session->set_flashdata('msg', 'Invalid username and password');
			redirect('login');
		}
	}
	
	public function signup()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('uname', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]|max_length[16]');
		$this->form_validation->set_rules('repass', 'Re-Password', 'trim|required|matches[pass]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'login';
			$this->load->view('template/index', $data);
		}
		
		else
		{			
			if($query = $this->account_model->buat_akun())
			{
				$this->session->set_flashdata('success', 'Your account successfully created! you can login now');
				redirect('login');
			}
			else
			{
				$this->session->set_flashdata('msg', 'Error insert database');
				redirect('login');			
			}
		}
		
	}
		
	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */