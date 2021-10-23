<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends MX_Controller {

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
		$data['settings'] = modules::run('Settings/Settings/index');
    } 
	
	public function page_not_found()
	{
		$data['view_name'] = '404';
		$this->load->view('template', $data);
	}
	
}
