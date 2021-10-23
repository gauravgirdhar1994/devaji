<?php
class Admin_contacts_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function save_contact_settings($data){
		$this->db->insert(TBL_CONTACT_SETTINGS,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function fetch_contact_settings_data($language){
		$this->db->select('*');
		$this->db->from(TBL_CONTACT_SETTINGS);
		$this->db->where('Language',$language);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		} 
		else{
			return false;
		}
	}

}
?>