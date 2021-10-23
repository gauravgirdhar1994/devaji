<?php
class Admin_career_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function save_career_content($data){
		$this->db->insert(TBL_CAREER,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function fetch_career_data($language){
		$this->db->select('*');
		$this->db->from(TBL_CAREER);
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