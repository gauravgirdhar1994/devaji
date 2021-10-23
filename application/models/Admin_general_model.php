<?php

/**
 * Created by PhpStorm.
 * User: Ankita
 * Date: 5/21/2017
 * Time: 7:00 PM
 */
class Admin_general_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_country_list()
    {

        $this->db->select('*');
        $this->db->from(TBL_COUNTRIES);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $res = $query->result();
            return $res;
        } else
            return false;
    }

    public function fetch_current_user($id){
        $this->db->select('*');
        $this->db->from(TBL_CLIENTS);
        $this->db->where('ClientId',$id);

        $query = $this->db->get();
        // echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $res = $query->result();
            return $res;
        } else
            return false;
	}

}