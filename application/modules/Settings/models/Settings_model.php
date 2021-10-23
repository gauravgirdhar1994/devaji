<?php

class Settings_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	public function fetch_current_settings()
	{
		$this->db->select('*');
		$this->db->from(TBL_CUSTOM_SETTINGS);

		$query = $this->db->get();

		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}

}

?>