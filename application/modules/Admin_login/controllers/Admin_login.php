<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends MX_Controller {

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
		$this->load->model('Admin_login_model');
		// $this->load->model('Admin_users/Admin_users_model');
	}
	
	public function login()
	{
		// $options = [
			// 'cost' => 12,
		// ];
		// $pwd = password_hash('ankita', PASSWORD_BCRYPT, $options);
		// var_dump($pwd); die;
		// $data['view_name'] = 'login';
		// $this->load->view('template', $data);
		$this->load->view('login');
	}
	
	public function login_submit()
	
	{
		$data = $this->input->post('login_form_data');
		
		// var_dump($data);die;
		// check and insert in db
		$result = $this->Admin_login_model->login($data);
		// var_dump($result); die;
		
		$return_array = array('status_code' => $result);
		
		if($result == '702')
		{
			$return_array['status_msg'] = CNST_LOGIN_ERROR;
			$return_array['status_type'] = 'error';
		}
		elseif($result == '703')
		{
			$return_array['status_msg'] = CNST_NO_SUCH_ACCOUNT;
			$return_array['status_type'] = 'error';
		}
		elseif($result == '701')
		{
			$return_array['status_msg'] = CNST_LOGIN_SUCCESS;
			$return_array['status_type'] = 'success';
			
			// set user session
			$this->init_user_session($data['username']);
			$this->session->set_userdata('sessionLanguage',$data['language']);
			// return $return_array;
		}

		echo json_encode($return_array);
	}
	
	public function init_user_session($username)
	{
		// select relevant data from the database
		
		$user_details = $this->Admin_login_model->fetch_basic_admin_details($username);
		
		if($user_details == '603')
			log_message('error', 'Unable to fetch user information from database to set a user session when logging in user with Username: "'.$username.'"');
		else
		{
			$this->session->set_userdata('admin_session', $user_details);
			log_message('info', 'User with Username: "'.$username.'" logged in at '.date('Y-m-d H:i:s'));
		}
		
		return true;
	}
	
	public function logout()
	{
		$this->session->unset_userdata('admin_session');
		redirect('admin/login', 'refresh');
	}
	
}
