<?php
class Admin_categories_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    public function add_categories_data($data)
    {
        $this->db->insert(TBL_CATEGORIES, $data);

        // echo $this->db->last_query();die;

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function fetch_categories_list()
    {
        $this->db->select('*');
        $this->db->from(TBL_CATEGORIES);
        $this->db->order_by('Id', 'asc');
        // $this->db->where('Language', 'en');
        // $this->db->where('Status', 1);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function fetch_categories_dropdown_list()
    {
        $this->db->select('*');
        $this->db->from(TBL_CATEGORIES);
        $this->db->order_by('Id', 'asc');
        $this->db->where('Language', 'en');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function delete_category($id)
    {
        // $this->db->last_query();die;
        $this->db->where('Id', $id);
        $this->db->delete(TBL_CATEGORIES);

        return true;

    }

    public function edit_category_details($id)
    {
        $this->db->select('*');
        $this->db->from(TBL_CATEGORIES);
        $this->db->where('Id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }

    }

    public function edit_category_submit($data, $id)
    {
        $this->db->where('Id', $id);
        $this->db->update(TBL_CATEGORIES, $data);
        return $id;
    }

    public function delete_all_categories($data)
    {

        $this->db->where('Id', $data);

        $this->db->delete(TBL_CATEGORIES);

        return true;
    }

}