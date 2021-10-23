<?php
class Emails_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function account_activation($user_id, $code)
	{
		$data = array(
			'EmailVerifiedStatus'=>1
		);
		
		$this->db->where('UserId',$user_id);
		$this->db->where('EmailVerificationCode',$code);  
		
		if($this->db->update(TBL_USERS,$data))
		{
			return true;   
		}
		else
		{
			return false;
		}
	}
		
	/*************************** FORGOT PASSWORD SECTION ***************************/
	
	public function insert_forgot_password_unique_code($user_id, $unique_code)
	{
		$data = array(
					'user_id' => $user_id,
					'unique_code' => $unique_code
				);
		$this->db->insert(TBL_USER_FORGOT_PASSWORD, $data);
		return true;
	}
	
	public function validate_forgot_password_link($user_id, $unique_code)
	{
		$data = array('user_id' => $user_id, 'unique_code' => $unique_code);
		$query = $this->db->get_where(TBL_USER_FORGOT_PASSWORD, $data);
		
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
			
}
?>