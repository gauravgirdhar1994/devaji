<?php
class Admin_welcome_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function fetch_sponsors_count()
	{
		return $this->db->count_all_results(TBL_SPONSORS);
	}
	
	public function fetch_proposals_count()
	{
		return $this->db->count_all_results(TBL_PROPOSALS);
	}

	public function fetch_hackathonregs_count()
	{
		return $this->db->count_all_results(TBL_HACKATHON_REGS);
	}
	
	public function fetch_queries_count()
	{
		return $this->db->count_all_results(TBL_QUERIES);
	}

}
?>