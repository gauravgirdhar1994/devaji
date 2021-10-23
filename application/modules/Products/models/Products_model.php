<?php
class Products_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}


	public function fetch_product_data($language, $slug)
	{
		$this->db->select('*');
		$this->db->from(TBL_PRODUCTS);
		// $this->db->where('Language', 'en');
		if($slug == "latest"){
			$this->db->where('isLatest', '1');
		}
		if($slug == "featured"){
			$this->db->where('isFeatured', '1');
		}
		// $this->db->where('Status', 1);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

}