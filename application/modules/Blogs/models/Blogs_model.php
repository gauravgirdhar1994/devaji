<?php
class Blogs_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}
	
	
	public function fetch_blog_data()
	{

		$this->db->select('*');
		$this->db->from(TBL_BLOG_POSTS);
		$this->db->where('PostStatus', 'published');
		// $this->db->where('PostStatus', 1);
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

	public function fetch_single_blog_data($id)
	{

		$this->db->select('bp.*, bpd.*');
		$this->db->from(TBL_BLOG_POSTS . ' as bp');
		$this->db->join(TBL_BLOG_POSTS_DESCRIPTION . ' as bpd', 'bp.PostId = bpd.PostId', 'left outer');
		$this->db->where('bp.PostId',$id);
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

	public function fetch_recent_blog_data()
	{

		$this->db->select('*');
		$this->db->from(TBL_BLOG_POSTS);
		$this->db->where('PostStatus', 'published');
		$this->db->limit(6);
		// $this->db->where('PostStatus', 1);
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