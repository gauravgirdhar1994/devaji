<?php
class Email_templates_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function fetch_email_template_by_code($code)
	{	
		$this->db->select('*');
		$this->db->from(TBL_EMAIL_TEMPLATES);
		$this->db->where('email_template_code', $code);	
		
		$query = $this->db->get();
		return $query->result();
	}


}
?>
