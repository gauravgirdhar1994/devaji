<?php
class Admin_actions_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}

	public function fetch_members($limit, $offset, $order_by)
	{
		$this->db->select ('*');
		$this->db->from(TBL_MEMBERS);
		
		
		$this->db->limit($limit, $offset);
		$this->db->order_by($order_by,'desc');
		$query = $this->db->get();		
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}		

	public function fetch_all_members()
	{
		$this->db->select ('*');
		$this->db->from(TBL_MEMBERS);
		
		$query = $this->db->get();		
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}

	public function fetch_all_feedbacks()
	{
		$this->db->select ('*');
		$this->db->from(TBL_FEEDBACK);
		
		$query = $this->db->get();		
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}

	public function fetch_all_tabs()
	{
		$this->db->select ('*');
		$this->db->from(TBL_HOME_TABS);
		
		$query = $this->db->get();		
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}	
	
	public function save_uploaded_file($data){
		// var_dump($data);die;
		if($data['TabAlias'] == 'pbs' || $data['TabAlias'] == 'photos' || $data['TabAlias'] == 'rem' || $data['TabAlias'] == 'releases' ){
			if($data['TabAlias'] == 'photos'){
				$data['MediaType'] = 'images';
			}
			else{
				$data['MediaType'] = 'document';
			}
			$this->db->insert(TBL_HOME_TAB_LINKS,$data);
		}
		else{
			$this->db->where('TabAlias',$data['TabAlias']);
			$this->db->update(TBL_HOME_TABS,$data);
		}

		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function save_notification($data){
		// echo TBL_NOTIFICATIONS;die;
		$this->db->insert(TBL_NOTIFICATIONS,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}	

	public function fetchDeviceIds()
	{
		$this->db->select ('*');
		$this->db->from(TBL_DEVICES);
		
		$query = $this->db->get();		
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}		

	public function delete_youtube_link(){
		$this->db->select('*');
		$this->db->from(TBL_YOUTUBE_LINKS);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$this->db->truncate(TBL_YOUTUBE_LINKS);
			return true;
		}
		else{
			return false;
		}
		
	}

	public function save_youtube_link($data){
		// echo TBL_NOTIFICATIONS;die;
		$this->db->insert(TBL_YOUTUBE_LINKS,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}	
}

?>