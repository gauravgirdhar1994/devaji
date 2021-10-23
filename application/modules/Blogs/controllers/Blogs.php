<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends MX_Controller {

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
		$this->load->model('Blogs_model');
	}

	public function add_new_blog()
	{
		$data['blogData'] = $this->Blogs_model->fetch_blog_data();
		// echo "<pre>";
		// var_dump($data['blogData']);die;
		$data['view_name'] = 'blog';
		$this->load->view('template', $data);
	}

	public function add_single_blog($id)
	{

		// $data['blogData'] = $this->Blogs_model->fetch_blog_data();
		$data['recentblogData'] = $this->Blogs_model->fetch_recent_blog_data();
		// echo '<pre>';
		// var_dump($data['recentblogData']);die;
		$data['singleblogData'] = $this->Blogs_model->fetch_single_blog_data($id);
		// var_dump($data['singleblogData']);die;
		$data['view_name'] = 'blog-single';
		$this->load->view('template', $data);
	}

	
}
