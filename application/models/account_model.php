<?php

class Account_model extends CI_Model {
	
	public function validasi()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('account');
		
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
		
		$simpan_data = $this->db->insert('account', $data_baru);
		return $simpan_data;
	}
	
	public function lihat_data($username){
		$query = $this->db->get_where('account', array('username' => $username));
		return $query->row_array();
	}
}