<?php
class Graphs_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function fetch_graph_data($id,$limit,$offset){

		$this->db->select('*');
		$this->db->from(TBL_GRAPH_DATA.' as g');
		$this->db->join(TBL_GRAPH_TITLES.' as gt', 'gt.GraphId = g.GraphId', 'left outer');
		$this->db->join(TBL_MONTHS. ' as m ', ' m.MonthId = g.Month');
		$this->db->where('g.GraphId', $id);
		$this->db->limit($limit, $offset);
		$this->db->order_by('GraphDataId', 'desc');
		//$this->db->where('g.Year',$year);
		
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
	
	public function fetch_graph_data_count($id){

		$this->db->select('count(*) as cnt');
		$this->db->from(TBL_GRAPH_DATA.' as g');
		$this->db->join(TBL_GRAPH_TITLES.' as gt', 'gt.GraphId = g.GraphId', 'left outer');
		$this->db->join(TBL_MONTHS. ' as m ', ' m.MonthId = g.Month');
		$this->db->where('g.GraphId', $id);
		$this->db->order_by('GraphDataId');
		
		$query = $this->db->get();

		// echo $this->db->last_query();die;

		if($query->num_rows() > 0)
		{
			$res = $query->result();
			return $res[0]->cnt;
		}
		else
		{
			return false;
		}


	}	

	public function fetch_graph(){


		$this->db->select_max('GraphId');
		$this->db->from(TBL_GRAPH_DATA);
		$this->db->limit(1);

		$res = $this->db->get();
		$id = $res->result(); 
		$GraphId = $id[0]->GraphId;

		$this->db->select_max('Year');
		$this->db->from(TBL_GRAPH_DATA);
		$this->db->where('GraphId',$GraphId);
		$this->db->limit(1);

		$sql_res = $this->db->get();
		$year = $sql_res->result(); 
		$MaxYear = $year[0]->Year;

		// var_dump($MaxYear);die;

		$this->db->select('*');
		$this->db->from(TBL_GRAPH_DATA.' as g');
		$this->db->join(TBL_GRAPH_TITLES.' as gt', 'gt.GraphId = g.GraphId', 'left outer');
		$this->db->join(TBL_MONTHS. ' as m ', ' m.MonthId = g.Month');
		$this->db->where('g.GraphId', $GraphId);
		$this->db->where('g.Year',$MaxYear);
		
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

	public function get_graph_id($name){

		$this->db->select('GraphId');
		$this->db->from(TBL_GRAPH_TITLES);
		$this->db->like('GraphTitle',$name);

		$query = $this->db->get();
		// echo $this->db->last_query();

		if($query->num_rows() > 0)
		{
			$res = $query->result();
			return $res[0]->GraphId;
		}
		else
		{
			return false;
		}
	}
	
}

?>