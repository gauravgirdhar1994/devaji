<?php

class Welcome_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function fetchHomeSliders($language)
	{
		$this->db->select('*');
		$this->db->from(TBL_HOME_SLIDERS);
		$this->db->where('Language',$language);
		$this->db->order_by('SliderId','asc');

		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}

	public function fetch_aboutus_data($language)
	{
		
		$this->db->select('*');
		$this->db->from(TBL_ABOUT_US);
		$this->db->where('Language',$language);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;			
		}
	}


	public function fetch_whyus_data($language)
	{
		
		$this->db->select('*');
		$this->db->from(TBL_WHY_US);
		$this->db->where('Language',$language);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;			
		}
	}

	public function fetch_latest_products_data($language)
	{
		
		$this->db->select('*');
		$this->db->from(TBL_PRODUCTS);
		// $this->db->where('Language',$language);
		$this->db->where('isLatest',1);
		$this->db->limit(6);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		
		if($query && $query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;			
		}
	}
	
	public function fetch_featured_products_data($language)
	{
		
		$this->db->select('*');
		$this->db->from(TBL_PRODUCTS);
		// $this->db->where('Language',$language);
		$this->db->where('isfeatured',1);
		$this->db->limit(6);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		if($query && $query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;			
		}
	}
	
	public function fetch_product_categories($language)
	{
		
		$this->db->select('*');
		$this->db->from(TBL_CATEGORIES);
		// $this->db->where('Language',$language);
		$this->db->where('status',1);
		$this->db->limit(12);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		if($query && $query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;			
		}
	}
}

?>