<?php
class Site_model extends CI_Model {

	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
	}
	
	/*********** List of blogs *************/
	
	public function fetch_langs($language)
	{
		$this->db->select('*');
		$this->db->from(TBL_LANGS);
		$this->db->where('Language',$language);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			$langs = array();
			$res = $query->result();
			// var_dump($res);die;
			$i=0;
			foreach ($res as $key => $value) {
				// var_dump($value);die;
				foreach ($value as $langkey => $langvalue) {
					// echo $langkey;die;
					if($langkey == 'LangKey'){
						// echo $langvalue;die;
						$langs[$langvalue] = $res[$i]->LangVar;
						$i++;
					}
					
					
				}
			}
			return $langs;
			// echo '<pre>';var_dump($langs);die;
		}
		
		else
			return false;
	}

	public function fetch_meta_info($page_id, $page_type)
	{
		$this->db->select('*');
		$this->db->from(TBL_BLOG_META);
		$this->db->where('PageId',$page_id);
		$this->db->where('PageType',$page_type);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}
	
	public function fetch_product_categories()
	{
		
		$this->db->select('*');
		$this->db->from(TBL_CATEGORIES);
		// $this->db->where('Language',$language);
		$this->db->where('status',1);
		$this->db->limit(12);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		if($query && $query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;			
		}
	}
	
	public function get_recent_blogs(){

		$this->db->select('*');
		$this->db->from(TBL_BLOGS);
		$this->db->limit(4);
		$this->db->order_by('CreatedOn','desc');

		$query = $this->db->get();

		if($query->num_rows() > 0){

			$res = $query->result();
			return $res;
		}
		else{
			return false;
		}

	}
	
}
?>