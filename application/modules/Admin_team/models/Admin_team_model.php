<?php
class Admin_team_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}
	public function add_team_data($data){
		$this->db->insert(TBL_TEAM,$data);
		
		
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;			
		}
	}
	
	public function fetch_team_list()
	{
		$this->db->select('*');
		$this->db->from(TBL_TEAM);
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
	public function delete_team($id)
	{
		// $this->db->last_query();die;
		$this->db->where('Id',$id);
		$this->db->delete(TBL_TEAM);
		
		return true;

	}

	public function edit_team_details($id)
	{
		$this->db->select('*');
		$this->db->from(TBL_TEAM);
		$this->db->where('Id', $id);
		
		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}
	public function edit_team_submit($data,$id)
	{
		$this->db->where('Id',$id);
		$this->db->update(TBL_TEAM, $data);
		return true;
	}
}