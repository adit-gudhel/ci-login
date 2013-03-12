<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{
	/* User Controller
	 * This class handles user area, if user successfully logged in.
	 * always check the user session when this class initialized.
	 *
	 * @author	Aditya Nursyahbani
	 * @link	http://aditya-nursyahbani.com/
	*/
	public function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}

	public function index(){
		$data['content'] = 'user_area';
		$this->load->view('template/index', $data);
	}
	
	public function view_account(){
		$this->load->model('account_model');		
		$data['account'] = $this->account_model->lihat_data($this->session->userdata('username'));			
		$data['content'] = 'user_detail';
		$this->load->view('template/index', $data);
	}
	
	public function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			$this->session->set_flashdata('msg', 'Access denied! You don\'t have permission to access this page or session has expired. Please use login form!');
			redirect('login');		
		}		
	}	
}
/* End of file user.php */
/* Location: ./application/controllers/user.php */
