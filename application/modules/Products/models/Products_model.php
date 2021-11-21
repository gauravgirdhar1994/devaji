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
$this->db->from(TBL_PRODUCTS . ' as products');
$this->db->join(TBL_CATEGORIES . ' as categories', 'products.categoryId = categories.id');

		// $this->db->where('Language', 'en');
		if($slug == "latest"){
			$this->db->where('isLatest', '1');
		}
		else if($slug == "featured"){
			$this->db->where('isFeatured', '1');
		}
		else {
			if($lug != 'all'){
				$this->db->where('categories.categorySlug', $slug );
			}
			
		}
		// $this->db->where('Status', 1);
		$query = $this->db->get();
		// print_r($query);die;
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	public function fetch_product_codes(){
		$this->db->distinct();
		$this->db->select('ProductCode');
		$this->db->from(TBL_PRODUCTS);
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}

}