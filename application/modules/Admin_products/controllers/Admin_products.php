<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_products extends MX_Controller {

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
		$this->load->model('Admin_products_model');
$this->load->model('Admin_categories_model');

	}


	public function add_new_product()
	{
$data['productCategories'] = $this->Admin_categories_model->fetch_categories_list();

		$data['content'] = 'admin-add-products';
		$this->load->view('admin-template', $data);
	}

	public function submit_new_products(){
		$data['ProductTitle']=$this->input->post('ProductTitle');
		$data['ProductDescription']=$this->input->post('ProductDescription');
$data['ProductCode'] = $this->input->post('ProductCode');

		$data['isFeatured']=$this->input->post('isFeatured');
$data['categoryId'] = $this->input->post('categoryId');

		$data['isLatest']=$this->input->post('isLatest');
		$data['Status']=$this->input->post('Status');
		$data['Language'] = $this->session->userdata('sessionLanguage');
		// var_dump($data);die;
		if(!empty($_FILES['ProductImage']['name']))
		{
			$config['upload_path'] = './uploads/products';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '50000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('ProductImage'))
			{
				$error = array('error' => $this->upload->display_errors());
				$errorMsg = $error['error'];
				// print_r($errorMsg);exit;
			}
			else
			{
				$rest = array('upload_data' => $this->upload->data());
				// var_dump($rest);die;
			}
			$data['ProductImage'] = $rest['upload_data']['file_name'];
		}

		$result = $this->Admin_products_model->add_products_data($data);
// echo $result;die;

		redirect('admin/product-list');
	}


	public function products_list()
	{
		$result = $this->Admin_products_model->fetch_products_list();

		$data['products'] = $result;
	
		$data['content'] = 'admin-product-list';

		$this->load->view('admin-template', $data);

	}

	public function delete_product($id)
	{
		$res = $this->Admin_products_model->delete_product($id);
		$this->session->set_flashdata('success', 'deleted Successfully');
		redirect('admin/product-list');
	}

	public function edit_product($product_id)
	{
		$data['product_details'] = $this->Admin_products_model->edit_product_details($product_id);
		// $data['product_section_data_details'] = $this->Admin_products_model->edit_product_section_data_details($product_id);
		$Page_type = 'product';
		// $data['meta_tage'] = $this->Admin_products_model->FetchPostMeta($product_id, $Page_type);
		$data['content'] = 'admin-edit-products';
		$this->load->view('admin-template', $data);
	}

	public function edit_product_submit()
	{
		// var_dump($_FILES);die;
		$product_id = $this->input->post('id');
		$data['ProductTitle']=$this->input->post('ProductTitle');
$data['ProductCode'] = $this->input->post('ProductCode');

		$data['ProductDescription']=$this->input->post('ProductDescription');
		$data['isFeatured']=$this->input->post('isFeatured');
		$data['isLatest']=$this->input->post('isLatest');
		$data['Status']=$this->input->post('Status');
		$data['Language'] = $this->session->userdata('sessionLanguage');
		// var_dump($Description);die;
		// $data = $this->input->post();
if (!empty($_FILES['productImage']['name'])) {
    $config['upload_path'] = './uploads/products';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '50000';
    $config['max_width'] = '3000';
    $config['max_height'] = '3000';
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('productImage')) {
        $error = array('error' => $this->upload->display_errors());
        $errorMsg = $error['error'];
        print_r($errorMsg);exit;
    } else {
        $rest = array('upload_data' => $this->upload->data());
        // var_dump($rest);die;
    }
    $data['productImage'] = $rest['upload_data']['file_name'];
} else {
    $data['productImage'] = $this->input->post('prevproductImage');
}


		$res = $this->Admin_products_model->edit_product_submit($data, $product_id);


		$this->session->set_flashdata('success','product Updated successfully');
		redirect('admin/product-list');
	}

	public function delete_all_products(){

		$data=$this->input->post('check');
		// var_dump($data);die;
		if(!empty($data)){


			$i=0; foreach($data as $row){
				$res = $this->Admin_products_model->delete_all_products($row);

				$i++;
			}


			if($res != false){
				$this->session->set_flashdata('success', 'products Deleted');
			}
		}
		else{
			$this->session->set_flashdata('error', 'No product Selected');
		}

		redirect('admin/product-list');
	}

	public function fetch_data_product()
	{
		$data['products'] = $this->Admin_products_model->fetch_products_list();
		$i=0;
		$btnAction = "return confirm('Are you sure you want to delete?');";
		if(!empty($data['products'])){
			foreach ($data['products'] as $product) {
				$product->selectAction = '<input type="checkbox" class="checkbox text-center" name="check[]" value="'.$product->Id.'" />';
				$product->actions = '<a href="' .base_url().'admin/edit-product/'.$product->Id.'" class="btn btn-success btn-xs">Edit </a><a class="btn btn-danger btn-xs" href="'.base_url().'admin/delete-product/'.$product->Id.'" onclick="'.$btnAction.'">Delete</a>';
				if($product->Status == 0){
					$product->Status = 'Disabled';
				}
				if($product->Status == 1){
					$product->Status = 'Enabled';
				}
				$i++;
			}

		}

		echo json_encode($data);
	}

	}