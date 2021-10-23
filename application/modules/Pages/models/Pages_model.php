<?php
class Pages_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
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

	public function fetch_values($language)
	{

		$this->db->select('*');
		$this->db->from(TBL_VALUES);
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

	public function fetch_contact_data($language){
		$this->db->select('*');
		$this->db->from(TBL_CONTACT_SETTINGS);
		$this->db->where('Language',$language);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function fetch_operations_team_data($language)
	{

		$this->db->select('*');
		$this->db->from(TBL_TEAM);
		$this->db->where('Language',$language);
		$this->db->where('ShowonHome',1);
		$this->db->where('MemberDesignation','operations');
		$this->db->order_by('SortOrder','asc');
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

	public function fetch_business_team_data($language)
	{

		$this->db->select('*');
		$this->db->from(TBL_TEAM);
		$this->db->where('Language',$language);
		$this->db->where('ShowonHome',1);
		$this->db->where('MemberDesignation','business');
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

	public function fetch_team_members($language)
	{

		$this->db->select('*');
		$this->db->from(TBL_TEAM);
		$this->db->where('Language',$language);
		$this->db->where('ShowonHome',0);
		$this->db->order_by('SortOrder','asc');
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

	public function fetch_services_data($language)
	{

		$this->db->select('*');
		$this->db->from(TBL_SERVICES);
		$this->db->where('Language',$language);
		$this->db->limit(6);
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

	public function fetch_testimonials()
	{

		$this->db->select('*');
		$this->db->from(TBL_TESTIMONIALS);
	
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

	public function fetch_logo_data($language)
	{

		$this->db->select('*');
		$this->db->from(TBL_LOGO_PHILOSOPHY);
		$this->db->where('Language',$language);
		// $this->db->limit(6);
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

	public function save_query($data){
		$this->db->insert(TBL_CONTACTS,$data);

		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function fetch_page_data_by_slug($page,$language){
		$this->db->select('*');
		$this->db->from(TBL_PAGES);
		$this->db->where('Language',$language);
		$this->db->where('PageSlug',$page);
		// $this->db->limit(6);
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

}
