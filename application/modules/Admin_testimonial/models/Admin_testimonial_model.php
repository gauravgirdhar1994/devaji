<?php
class Admin_testimonial_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}
	public function add_testimonial_data($data){
		$this->db->insert(TBL_TESTIMONIALS,$data);
		
		
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;			
		}
	}
	
	public function fetch_testimonial_list()
	{
		$this->db->select('*');
		$this->db->from(TBL_TESTIMONIALS);
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
	public function delete_testimonial($id)
	{
		// $this->db->last_query();die;
		$this->db->where('Id',$id);
		$this->db->delete(TBL_TESTIMONIALS);
		
		return true;

	}

	public function edit_testimonial_details($id)
	{
		$this->db->select('*');
		$this->db->from(TBL_TESTIMONIALS);
		$this->db->where('Id', $id);
		
		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}
	public function edit_testimonial_submit($data,$id)
	{
		$this->db->where('Id',$id);
		$this->db->update(TBL_TESTIMONIALS, $data);
		return true;
	}
}