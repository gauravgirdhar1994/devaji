<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MX_Controller {

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
		$this->load->model('products_model');
	}

	public function products()
	{
	
		$data['language'] = 'en';
		
		$data['productData'] = $this->products_model->fetch_product_data($data['language'], 'all');
		$data['pageHeading'] = 'Products';
		$data['view_name'] = 'products';
		$this->load->view('template', $data);
	}
	
	public function fetch_products($slug)
	{
		if(!empty($this->session->userdata('language'))){
			$data['language'] = $this->session->userdata('language');
		}
		else{
			$data['language'] = 'en';
		}
// echo $slug;die;

		$data['productData'] = $this->products_model->fetch_product_data($data['language'], $slug);
		if($slug == "featured") { $data['pageHeading'] = 'Featured Products'; }
		if($slug == "latest") { $data['pageHeading'] = 'Latest Products'; }
		$data['view_name'] = 'products';
		$this->load->view('template', $data);
	}

}