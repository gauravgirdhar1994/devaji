<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

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
		$this->load->model('Welcome_model');
		
	}

	public function index()
	{	
		if(!empty($this->session->userdata('language'))){
			$data['language'] = $this->session->userdata('language');
		}
		else{
			$data['language'] = 'en';
		}
		// var_dump($data);die;	
		$data['homeSliders'] = $this->Welcome_model->fetchHomeSliders($data['language']);
		$data['aboutUsData'] = $this->Welcome_model->fetch_aboutus_data($data['language']);
		$data['latestProductsData'] = $this->Welcome_model->fetch_latest_products_data($data['language']);
		$data['featuredProductsData'] = $this->Welcome_model->fetch_featured_products_data($data['language']);
		$data['productCategories'] = $this->Welcome_model->fetch_product_categories($data['language']);

// var_dump($data);die;

		$data['view_name'] = 'index';
		$this->load->view('template', $data);
	}

	public function changeLanguage(){
		$language = $_POST['language'];
		// echo $language;
		$this->session->unset_userdata('language');
		$this->session->set_userdata('language',$language);
	}

	
}