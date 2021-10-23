<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_welcome extends MX_Controller {

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
		$this->load->model('Admin_welcome_model');
		$this->admin_session_check();
	}

	public function index()
	{	
		
		$data['pagename'] = 'Hello Admin, Welcome to your Dashboard!';
		$data['content'] = 'index';
		$this->load->view('admin-template', $data);
	}

	
}
