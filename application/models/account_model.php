<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
	
	private $table_name = 'account';
	private $pk = 'username';
	
	public function validasi()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get($this->table_name);
		
		if($query->num_rows == 1)
		{
			return true;
		}		
	}
	
	public function buat_akun()
	{
		$data_baru = array(
			'first_name' => $this->input->post('fname'),
			'last_name' => $this->input->post('lname'),
			'email_address' => $this->input->post('email'),			
			'username' => $this->input->post('uname'),
			'password' => md5($this->input->post('pass'))						
		);
		
		$simpan_data = $this->db->insert($this->table_name, $data_baru);
		return $simpan_data;
	}
	
	public function lihat_data($username){
		$query = $this->db->get_where($this->table_name, array($this->pk => $username));
		return $query->row_array();
	}
	
}
/* End of file account_model.php */
/* Location: ./application/models/account_model.php */