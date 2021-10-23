<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contacts extends MX_Controller {

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
		$this->load->model('Admin_contacts_model');
		$this->admin_session_check();
	}

	public function settings()
	{	
		$language = $this->session->userdata('sessionLanguage');
		$data['contactData'] = $this->Admin_contacts_model->fetch_contact_settings_data($language);
		$data['pagename'] = 'Update Contact Page Content';
		$data['content'] = 'sections';
		$this->load->view('admin-template', $data);
	}

	public function settings_update()
	{	
		// echo '<pre>';var_dump($this->input->post());die;
		
		$data = $this->input->post();
		$data['Language'] = $this->session->userdata('sessionLanguage');

		$this->db->where('Language',$this->session->userdata('sessionLanguage'));
		$this->db->delete(TBL_CONTACT_SETTINGS);

		$result = $this->Admin_contacts_model->save_contact_settings($data);
		
		if($result){
			$this->session->set_flashdata('success','Contact Settings Updated');
		}

		redirect('admin/contacts/settings');
	}
}
