<?php
class Admin_about_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function save_about_us_content($data){
		$this->db->insert(TBL_ABOUT_US,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function fetch_about_us_data($language){
		$this->db->select('*');
		$this->db->from(TBL_ABOUT_US);
		$this->db->where('Language',$language);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		} 
		else{
			return false;
		}
	}

	public function save_why_us_content($data){
		$this->db->insert(TBL_WHY_US,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function fetch_why_us_data($language){
		$this->db->select('*');
		$this->db->from(TBL_WHY_US);
		$this->db->where('Language',$language);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		} 
		else{
			return false;
		}
	}

	public function save_logo_content($data){
		$this->db->insert(TBL_LOGO_PHILOSOPHY,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function fetch_logo_data($language){
		$this->db->select('*');
		$this->db->from(TBL_LOGO_PHILOSOPHY);
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