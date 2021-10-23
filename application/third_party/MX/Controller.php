<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__).'/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link	http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright	Copyright (c) 2015 Wiredesignz
 * @version 	5.5
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
	public $autoload = array();
	public $admin_details;

	public function __construct()
	{
		$class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
		log_message('debug', $class." MX_Controller Initialized");
		Modules::$registry[strtolower($class)] = $this;

		/* copy a loader instance and initialize */
		$this->load = clone load_class('Loader');
		$this->load->initialize($this);

		/* autoload module items */

		$this->load->_autoloader($this->autoload);

		if($this->session->userdata('admin_session') !== false) {
			$data['admin_details'] = $this->session->userdata('admin_session')[0];
			$this->admin_details = $data['admin_details'];
		}

		$this->load->model('Site_model');
		// echo 'langs';die;

		if(!empty($this->session->userdata('language'))){
			$language = $this->session->userdata('language');
		}
		else{
			$language = 'en';
			$this->session->set_userdata('language',$language);
		}

		$data['lang'] = $this->Site_model->fetch_langs($language);

		$this->load->vars( $data );
	}

	public function do_upload($folder_path, $file_name, $allowed_types)
	{
		// var_dump($folder_path,$file_name);die;
		$config['upload_path']          = $folder_path;
		$config['allowed_types']        = $allowed_types;
		$config['max_size']             = 100000;
		$config['max_width']            = 8400;
		$config['max_height']           = 5000;
		$config['overwrite']     = FALSE;

		$this->load->library('upload', $config);

		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES[$file_name]['name']);
		// var_dump($cpt);die;
		// var_dump($files);die;
		if($cpt > 0) {

			$_FILES[$file_name]['name']= $files[$file_name]['name'];
			$_FILES[$file_name]['type']= $files[$file_name]['type'];
			$_FILES[$file_name]['tmp_name']= $files[$file_name]['tmp_name'];
			$_FILES[$file_name]['error']= $files[$file_name]['error'];
			$_FILES[$file_name]['size']= $files[$file_name]['size'];

			$this->upload->initialize($config);
				// $this->upload->do_upload($_FILES['TicketImage']['name']);
			if($this->upload->do_upload($file_name)){
				$dataInfo[] = $this->upload->data();
			}

			// echo '<pre>'; var_dump($dataInfo);die;
			return $dataInfo;
		}
		else {

			if ( ! $this->upload->do_upload($file_name))
			{
				$error = array('error' => $this->upload->display_errors());
				// var_dump($error);die;
				//$this->session->set_flashdata('error', $error['error']);
				return $error;
				// $this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				return $data;
				// $this->load->view('upload_success', $data);
			}
		}
	}

	public function create_thumb_from_image($original_img_path, $thumb_dir)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = $original_img_path;
		$config['new_image'] = $thumb_dir;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 100;
		$config['height'] = 30;
		$config['quality'] = '100%';

		$this->load->library('image_lib', $config);

		$this->image_lib->clear();
		$this->image_lib->initialize($config);

		if ( ! $this->image_lib->resize())
		{
			// echo $this->image_lib->display_errors();
		}
		else
		{
			// echo 'm in else';
		}
	}

	public function watermark_image($img_path, $img_name)
	{
		$config['source_image'] = $img_path.$img_name;
		$config['new_image'] = 'wm_'.$img_name;
		$config['create_thumb'] = FALSE;
		// $config['dynamic_output'] = TRUE;
		$config['wm_text'] = 'Copyright - Jordan Zweifler';
		// $config['wm_type'] = 'text';
		$config['wm_type'] = 'overlay';
		$config['wm_overlay_path'] = './uploads/stamp4.png';
		//$config['wm_font_path'] = './system/fonts/texb.ttf';
		$config['wm_font_size'] = '30';
		$config['wm_font_color'] = 'ffffff';
		$config['wm_vrt_alignment'] = 'middle';
		$config['wm_hor_alignment'] = 'center';
		$config['wm_padding'] = '0';

		$this->image_lib->initialize($config);


		if ( ! $this->image_lib->watermark())
		{
			// echo $this->image_lib->display_errors();
		}
		else
		{
			// echo 'm in else';
			// unlink($img_path.$img_name);
		}
		// die;
	}

	public function admin_session_check() {

		if($this->session->userdata('admin_session') == false) {
			$this->session->set_flashdata('error', 'Session Expired! Please login to continue!');
			redirect(base_url('admin/login'), 'refresh');
		}
	}

	public function user_session_check() {
		if($this->session->userdata('user_details') != false) {
			$user_details = $this->session->userdata('user_details');

			// if($user_details[0]->UserRole != 2)
			// 	redirect(base_url(), 'refresh');
			// }

		} else {
			$this->session->set_flashdata('error', 'Session Expired! Please login to continue!');
			redirect(base_url(), 'refresh');
		}
	}

	public function publisher_session_check() {
		if($this->session->userdata('user_details') != false) {
			$user_details = $this->session->userdata('user_details');
			if($user_details[0]->UserRole != 3) {
				redirect(base_url(), 'refresh');
			}
		} else {
			$this->session->set_flashdata('error', 'Session Expired! Please login to continue!');
			redirect(base_url(), 'refresh');
		}
	}



	public function __get($class)
	{
		return CI::$APP->$class;
	}
}
