<?php
class Admin_products_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}
	public function add_products_data($data){
		$this->db->insert(TBL_PRODUCTS,$data);
		
		// echo $this->db->last_query();die;

		if($this->db->affected_rows() > 0)
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}


	public function fetch_products_list()
	{
		$this->db->select('*');
		$this->db->from(TBL_PRODUCTS);
		$this->db->order_by('Id', 'asc');
		// $this->db->where('Language', 'en');
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

	public function fetch_products_dropdown_list()
	{
		$this->db->select('*');
		$this->db->from(TBL_PRODUCTS);
		$this->db->order_by('Id', 'asc');
		$this->db->where('Language', 'en');
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

	public function delete_product($id)
	{
		// $this->db->last_query();die;
		$this->db->where('Id',$id);
		$this->db->delete(TBL_PRODUCTS);

		return true;

	}

	public function edit_product_details($id)
	{
		$this->db->select('*');
		$this->db->from(TBL_PRODUCTS);
		$this->db->where('Id', $id);

		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}

	public function edit_product_submit($data,$id)
	{
		$this->db->where('Id',$id);
		$this->db->update(TBL_PRODUCTS, $data);
		return $id;
	}


	public function delete_all_products($data){


		$this->db->where('Id',$data);

		$this->db->delete(TBL_ADMIN_products);


		return true;
	}

}