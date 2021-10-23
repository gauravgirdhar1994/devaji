<?php

class General_model extends CI_Model {

      function __construct()
      {
            // Call the Model constructor
            parent::__construct();
      }

      public function get_country_list() {

            $this->db->select('*');
            $this->db->from(TBL_COUNTRIES);

            $query=$this->db->get();

            if($query->num_rows() > 0) {
                  $res = $query->result();
                  return $res;
            }
            else
                  return false;
      }

      public function get_subject_by_class($class_id){
            $this->db->select('*');
            $this->db->from(TBL_SUBJECTS);
            $this->db->where('ClassId',$class_id);
            $records = $this->db->get();
            return $records->result();
      }

      public function get_topics_by_subject($subject_id){
            $this->db->select('*');
            $this->db->from(TBL_TOPICS);
            $this->db->where('SubjectId',$subject_id);
            $records = $this->db->get();
            return $records->result();
      }
      
}

?>