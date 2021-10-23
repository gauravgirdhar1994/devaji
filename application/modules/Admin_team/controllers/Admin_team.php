<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_team extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_team_model');
	}


	public function add_team()
	{
		$data['content'] = 'admin-add-team';				
		$this->load->view('admin-template', $data);
	}

	public function submit_team(){
		$data['MemberName']=$this->input->post('MemberName');
		$data['MemberDesignation']=$this->input->post('MemberDesignation');
		$data['LinkedInUrl']=$this->input->post('LinkedInUrl');
		$data['FacebookUrl']=$this->input->post('FacebookUrl');
		$data['TwitterUrl']=$this->input->post('TwitterUrl');
		$data['Status']=$this->input->post('Status');
		// var_dump($data);die;
		// var_dump($_FILES);die;
		if(!empty($_FILES['MemberImage']['name']))
		{
			$config['upload_path'] = './uploads/team';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '50000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('MemberImage'))
			{
				$error = array('error' => $this->upload->display_errors());
				$errorMsg = $error['error'];
				print_r($errorMsg);exit; 
			}
			else
			{
				$rest = array('upload_data' => $this->upload->data());
				// var_dump($rest);die;
			}
			$data['MemberImage'] = $rest['upload_data']['file_name'];
		}
		

		// var_dump($data);die;
		// $data['Image'] = 'uploads/';

		$this->Admin_team_model->add_team_data($data);
		// var_dump($data);die;
		redirect('admin/team-list');
	}


	public function team_list()
	{
		$result = $this->Admin_team_model->fetch_team_list();


		$data['teams'] = $result;
		$data['content'] = 'admin-team-list';

		$this->load->view('admin-template', $data);

	}

	public function	delete_team($id)
	{
		$res = $this->Admin_team_model->delete_team($id);
		$this->session->set_flashdata('success', 'deleted Successfully');
		redirect('admin/team-list');
	}

	public function edit_team($team_id)
	{
		$data['team_details'] = $this->Admin_team_model->edit_team_details($team_id);

		// var_dump($data);die;
		$data['content'] = 'admin-edit-team';
		$this->load->view('admin-template', $data);
	}

	public function edit_team_submit()
	{
		$service_id = $this->input->post('id');
		// var_dump($_FILES);die;
		$data['MemberName']=$this->input->post('MemberName');
		$data['MemberDesignation']=$this->input->post('MemberDesignation');
		$data['MemberDescription']=$this->input->post('MemberDescription');
		$data['LinkedInUrl']=$this->input->post('LinkedInUrl');
		$data['Language'] = $this->session->userdata('sessionLanguage');
		$data['Status']=$this->input->post('Status');
		if(!empty($_FILES['MemberImage']['name']))
		{
			$config['upload_path'] = './uploads/team/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '50000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('MemberImage'))
			{
				$error = array('error' => $this->upload->display_errors());
				$errorMsg = $error['error'];
				print_r($errorMsg);exit; 
			}
			else
			{
				$rest = array('upload_data' => $this->upload->data());
				// var_dump($rest);die;
			}
			$data['MemberImage'] = $rest['upload_data']['file_name'];
		}else{
			$data['MemberImage'] = $this->input->post('prevMemberImage');
		}

		unset($data['id']);

		$res = $this->Admin_team_model->edit_team_submit($data, $service_id);

		// var_dump($data);die;
		$this->session->set_flashdata('success','edit edited successfully');
		redirect('admin/team-list');
	}

	public function fetch_team_data()
	{
		$data['teams'] = $this->Admin_team_model->fetch_team_list();
		$i=0;
		$btnAction = "return confirm('Are you sure you want to delete?');";
		foreach ($data['teams'] as $team) {
			$team->actions = '<a href="' .base_url().'admin/edit-team/'.$team->Id.'" class="btn btn-success btn-xs">Edit</a><a class="btn btn-danger btn-xs" href="'.base_url().'admin/delete-team/'.$team->Id.'" onclick="'.$btnAction.'">Delete</i></a>';
			if($team->Status == 0){
				$team->Status = 'Disabled';
			}
			if($team->Status == 1){
				$team->Status = 'Enabled';
			}
			$i++;
		}

		echo json_encode($data);
	}
}
