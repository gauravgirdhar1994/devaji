<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_career extends MX_Controller {

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
		$this->load->model('Admin_career_model');
		$this->admin_session_check();
	}

	public function career()
	{	
		$language = $this->session->userdata('sessionLanguage');
		$data['careerData'] = $this->Admin_career_model->fetch_career_data($language);
		$data['pagename'] = 'Update About Us Content';
		$data['content'] = 'sections';
		$this->load->view('admin-template', $data);
	}

	public function update_career_data()
	{	
		// echo '<pre>';var_dump($this->input->post());die;
		
		$data = $this->input->post();
		$data['Language'] = $this->session->userdata('sessionLanguage');

		$this->db->where('Language',$this->session->userdata('sessionLanguage'));
		$this->db->delete(TBL_CAREER);

		$result = $this->Admin_career_model->save_career_content($data);
		
		if($result){
			$this->session->set_flashdata('success','Career Data Updated');
		}

		redirect('admin/careers');
	}
}
