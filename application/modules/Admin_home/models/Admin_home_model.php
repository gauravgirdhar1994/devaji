<?php
class Admin_home_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function save_sliders($data){
		// print_r($data);
		$this->db->insert(TBL_HOME_SLIDERS,$data);
		// echo $this->db->last_query(); die;
		if($this->db->affected_rows() > 0){
			// echo 'insert';
			return true;
		}
		else{
			// echo 'not insert';
			return false;
		}
	}

	public function fetch_slider_data($language){
		$this->db->select('*');
		$this->db->from(TBL_HOME_SLIDERS);
		$this->db->where('Language',$language);
		$this->db->order_by('SliderId','asc');

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