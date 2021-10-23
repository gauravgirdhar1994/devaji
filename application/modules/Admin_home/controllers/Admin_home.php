<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends MX_Controller {

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
		$this->load->model('Admin_home_model');
		$this->admin_session_check();
	}

	public function sliders()
	{	

		$result = $this->Admin_home_model->fetch_slider_data('en');
		// var_dump($result);die;
		if($result !== false){
			$data['sliderData'] = $result;
		}
		// else{
		// 	$data['sliderData'] = '';
		// }
		// var_dump($data);die;
		$data['pagename'] = 'Update Sliders Content';
		$data['content'] = 'sliders';
		$this->load->view('admin-template', $data);
	}

	public function sliders_update()
	{	
		// echo '<pre>';var_dump($this->input->post());die;
		// echo '<pre>';var_dump($_FILES);die;
		$SliderTitle = $this->input->post('SliderTitle');
		$SliderTitleSpan = $this->input->post('SliderTitleSpan');
		$SliderContent = 'null';
		// var_dump($SliderContent);die;
		// $this->db->where('Language',$this->session->userdata('sessionLanguage'));
		$this->db->delete(TBL_HOME_SLIDERS);
		
		for($i=0;$i<count($SliderTitle);$i++){	
			// if(!empty($_FILES['Image'.$i]['name']))
			if(!empty($_FILES['SliderImage'.($i+1)]['name']))
			{
				$config['upload_path'] = 'uploads/sliders/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']	= '50000';
				$config['max_width']  = '3000';
				$config['max_height']  = '3000';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('SliderImage'.($i+1)))
				{
					$error = array('error' => $this->upload->display_errors());
					$errorMsg = $error['error'];
					print_r($errorMsg);exit; 
				}
				else
				{
					$rest = array('upload_data' => $this->upload->data());
					// var_dump($rest);
				}
				// echo 'image';die;
				$data['SliderImage'] = $rest['upload_data']['file_name'];
			}
			else{
				$data['SliderImage'] = $this->input->post('prevImage'.($i+1));
			}
			// echo '<pre>';var_dump($SliderTitle[$i]);
			$data['SliderTitle'] = $SliderTitle[$i];
			$data['SliderTitleSpan'] = $SliderTitleSpan[$i];
			$data['SliderDescription'] = $SliderContent[$i];
			$data['CreatedOn'] = date('Y-m-d H:i:s');
			$data['ModifiedOn'] = date('Y-m-d H:i:s');
			$data['Language'] = 'en';
			// echo '<pre>';var_dump($data);

			if($data['SliderImage']){
				$result = $this->Admin_home_model->save_sliders($data);
			}

			

			if($result){
				$this->session->set_flashdata('success','Sliders Updated');
			}
			// echo '<pre>';var_dump($_FILES);die;
		}
		
		// die;

		redirect('admin/home/sliders');
	}
}