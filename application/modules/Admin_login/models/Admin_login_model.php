<?php
class Admin_login_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function login($data)
	{
		$this->db->select('AdminLoginId, AdminLoginPassword');
		$this->db->where('AdminLoginId', $data['username']);
		
		$check_existing = $this->db->get(TBL_ADMIN_USERS);

		$pass = md5($data['password']);

		// echo $pass;die;
		
		if($check_existing->num_rows() > 0)
		{
			
			$result = $check_existing->result();

			if ($pass === $result[0]->AdminLoginPassword) {
				return '701';
			} else {
				return '702';
			}
			
		}
		else
		{
			return '703';			
		}
		
	}
	
	// admin methods
	public function fetch_basic_admin_details($username)
	{
		
		$this->db->select('AdminUserId, AdminFirstName, AdminLoginId, AdminUserRole');
		$this->db->where('AdminLoginId', $username);
		
		$query = $this->db->get(TBL_ADMIN_USERS);
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return '603';			
		}
		
	}

}
?>