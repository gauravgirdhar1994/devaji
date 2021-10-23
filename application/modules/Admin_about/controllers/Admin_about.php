<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_about extends MX_Controller {

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
		$this->load->model('Admin_about_model');
		$this->admin_session_check();
	}

	public function about_us()
	{	
		$language = 'en';
		$data['aboutData'] = $this->Admin_about_model->fetch_about_us_data('en');
		$data['pagename'] = 'Update About Us Content';
		$data['content'] = 'sections';
		$this->load->view('admin-template', $data);
	}

	public function update_about_us_data()
	{	
		// echo '<pre>';var_dump($this->input->post());die;
		
		$data = $this->input->post();
		$data['Language'] = 'en';
		
		$this->db->where('Language','en');
		$this->db->delete(TBL_ABOUT_US);
		$data['CreatedOn'] = date('Y-m-d H:i:s');
		$result = $this->Admin_about_model->save_about_us_content($data);
		
		if($result){
			$this->session->set_flashdata('success','Sliders Updated');
		}

		redirect('admin/about-us');
	}

	public function why_us(){
		$language = 'en';
		$data['whyUsData'] = $this->Admin_about_model->fetch_why_us_data($language);
		$data['pagename'] = 'Update Why Us Content';
		$data['content'] = 'why-us';
		$this->load->view('admin-template', $data);
	}

	public function update_why_us_data()
	{	
		// echo '<pre>';var_dump($this->input->post());die;
		
		$data = $this->input->post();
		$data['Language'] = 'en';
		
		$this->db->where('Language','en');
		$this->db->delete(TBL_WHY_US);

		$result = $this->Admin_about_model->save_why_us_content($data);
		
		if($result){
			$this->session->set_flashdata('success','Sliders Updated');
		}

		redirect('admin/why-us');
	}

	public function logo_philosophy(){
		$language = 'en';
		$data['logoData'] = $this->Admin_about_model->fetch_logo_data($language);
		$data['pagename'] = 'Update Logo Philosophy Content';
		$data['content'] = 'logo-philosophy';
		$this->load->view('admin-template', $data);
	}

	public function update_logo_philosophy()
	{	
		// echo '<pre>';var_dump($this->input->post());die;
		
		$data = $this->input->post();
		$data['Language'] = 'en';
		
		$this->db->where('Language','en');
		$this->db->delete(TBL_LOGO_PHILOSOPHY);

		$result = $this->Admin_about_model->save_logo_content($data);
		
		if($result){
			$this->session->set_flashdata('success','Logo Content Updated');
		}

		redirect('admin/logo-philosophy');
	}
}