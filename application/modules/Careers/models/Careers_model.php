<?php
class Careers_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function add_job_application($data){
		$this->db->insert(TBL_JOB_APPLICATION,$data);
		
		
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;			
		}
	}
	
	public function delete_demo_request($id)
	{
		// $this->db->last_query();die;
		$this->db->where('Id',$id);
		$this->db->delete(TBL_REQUEST_A_DEMO);
		// return $this->db->insert_id();
		return true;

	}

	public function fetch_all_jobs()
	{
		
		$this->db->select('*');
		$this->db->from(TBL_JOB);
		$this->db->where('Status', 1);
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

	public function fetch_all_sources()
	{
		
		$this->db->select('*');
		$this->db->from(TBL_SOURCES);
		$this->db->where('Status', 1);
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
	public function fetch_career_data()
	{
		
		$this->db->select('*');
		$this->db->from(TBL_CAREERS);
		// $this->db->where('Id', $id);
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

	public function fetch_job_data()
	{
		
		$this->db->select('*');
		$this->db->from(TBL_JOB);
		// $this->db->where('Id', $id);
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

	public function get_profile_name($id)
	{
		
		$this->db->select('JobTitle');
		$this->db->from(TBL_JOB);
		$this->db->where('Id', $id);

		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$res = $query->result();
			return $res[0]->JobTitle;
		}
		else
		{
			return false;			
		}
	}

	public function fetch_career_features($id)
	{
		
		$this->db->select('*');
		$this->db->from(TBL_CAREERS_DATA);
		$this->db->where('CareerId', $id);
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

	public function add_friend_reference($data){
		$this->db->insert(TBL_REFERENCE,$data);
		
		// echo $this->db->last_query();die;
		
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;			
		}
	}
	
}
