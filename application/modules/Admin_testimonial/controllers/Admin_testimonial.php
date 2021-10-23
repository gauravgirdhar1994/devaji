<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_testimonial extends MX_Controller {

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
		$this->load->model('Admin_testimonial_model');
	}


	public function add_testimonial()
	{
		$data['content'] = 'admin-add-testimonial';				
		$this->load->view('admin-template', $data);
	}

	public function submit_testimonial(){
		$data['Name']=$this->input->post('Name');
		$data['Message']=$this->input->post('Message');
		$data['Location']=$this->input->post('Location');
		$data['ClientSince']=$this->input->post('ClientSince');
		
		if(!empty($_FILES['Image']['name']))
		{
			$config['upload_path'] = './uploads/testimonial';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '50000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('Image'))
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
			$data['Image'] = $rest['upload_data']['file_name'];
		}
		

		// var_dump($data);die;
		// $data['Image'] = 'uploads/';

		$this->Admin_testimonial_model->add_testimonial_data($data);
		// var_dump($data);die;
		redirect('admin/testimonial-list');
	}


	public function testimonial_list()
	{
		$result = $this->Admin_testimonial_model->fetch_testimonial_list();


		$data['testimonials'] = $result;
		$data['content'] = 'admin-testimonial-list';

		$this->load->view('admin-template', $data);

	}

	public function	delete_testimonial($id)
	{
		$res = $this->Admin_testimonial_model->delete_testimonial($id);
		$this->session->set_flashdata('success', 'deleted Successfully');
		redirect('admin/testimonial-list');
	}

	public function edit_testimonial($testimonial_id)
	{
		$data['testimonial_details'] = $this->Admin_testimonial_model->edit_testimonial_details($testimonial_id);

		// var_dump($data);die;
		$data['content'] = 'admin-edit-testimonial';
		$this->load->view('admin-template', $data);
	}

	public function edit_testimonial_submit()
	{
		$service_id = $this->input->post('id');
		// var_dump($_FILES);die;
		$data['Name']=$this->input->post('Name');
		$data['Message']=$this->input->post('Message');
		$data['Location']=$this->input->post('Location');
		$data['ClientSince']=$this->input->post('ClientSince');
		
		if(!empty($_FILES['Image']['name']))
		{
			$config['upload_path'] = './uploads/testimonial/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '50000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('Image'))
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
			$data['Image'] = $rest['upload_data']['file_name'];
		}else{
			$data['Image'] = $this->input->post('prevImage');
		}

		unset($data['id']);

		$res = $this->Admin_testimonial_model->edit_testimonial_submit($data, $service_id);

		// var_dump($data);die;
		$this->session->set_flashdata('success','edit edited successfully');
		redirect('admin/testimonial-list');
	}

	public function fetch_testimonial_data()
	{
		$data['testimonials'] = $this->Admin_testimonial_model->fetch_testimonial_list();
		$i=0;
		$btnAction = "return confirm('Are you sure you want to delete?');";
		foreach ($data['testimonials'] as $testimonial) {
			$testimonial->actions = '<a href="' .base_url().'admin/edit-testimonial/'.$testimonial->Id.'" class="btn btn-success btn-xs">Edit</a><a class="btn btn-danger btn-xs" href="'.base_url().'admin/delete-testimonial/'.$testimonial->Id.'" onclick="'.$btnAction.'">Delete</i></a>';
			
			$i++;
		}

		echo json_encode($data);
	}
}
