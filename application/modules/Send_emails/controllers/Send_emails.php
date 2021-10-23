<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_emails extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// Your own constructor code
		// All the libraries,helper file are included in application/config/autoload.php
		$this->load->model('Email_templates_model','',TRUE);
		$this->load->helper('email');
	}

	public function send_query_email_to_admin($data)
	{
		$code = 'USER_QUERY_ADMIN_MAIL';
		$res_emt = $this->Email_templates_model->fetch_email_template_by_code($code);
		$subject = 'Query | '.$data['Name'] ;
		$body = $res_emt[0]->email_template_body;

		$msg = '<p>Hi,<br><br> Team you have a new Query From – ';
		$msg .= '<br><p>Name : '.$data['Name'].'</p>';
		$msg .= '<p>Email Id: '.$data['Email'].'</p>';
		$msg .= '<p>Contact Number: '.$data['Phone'].'</p>';
		// $msg .= '<p>Product : '.$data['Products'].'</p>';
		$msg .= '<p>Message : '.$data['Message'].'</p>';
		$msg .= '<p>IP Address : '.$data['Ip'].'</p>';
		$msg .= '<p>Date Query Received: '.convert_date_toreadable($data['CreatedOn']).'</p>';

		$msg .= '<p>Happy Conversion,</p>';
		$msg .= '<p>APS</p>';

		$variables = array(
			'message-placeholder' => $msg
		);

		$body = populate_email_body($variables, $body);
		$from = 'info@absolutpeoplescreen.com';
		$from_name = 'Absolute People Screen Private Limited';
		// echo '<pre>';var_dump($body);die;
		send_custom_email($data['admin_email'], $subject, $body);

		$return_result = array();
		$return_result['msg_val'] = 1;
		// echo json_encode($return_result);
		echo '1';
	}

		public function send_query_email_to_user($data,$formType)
	{
		if($formType == 'contact'){
			$code = 'USER_QUERY_CONTACT_AUTO_MAIL';
		}
		if($formType == 'landing'){
			$code = 'USER_QUERY_LANDING_AUTO_MAIL';
		}

		if($formType == 'service'){
			$code = 'USER_QUERY_LANDING_AUTO_MAIL';
		}
		
		$res_emt = $this->Email_templates_model->fetch_email_template_by_code($code);
		$subject = 'Auto Response from Absolute People Screen Pvt. Ltd. Information and Careers Mailbox';
		$body = $res_emt[0]->email_template_body;

		$variables = '';

		$body = populate_email_body($variables, $body);
		$from = 'info@absolutpeoplescreen.com';
		$from_name = 'Absolute People Screen Private Limited';
		// echo '<pre>';var_dump($body);die;
		send_custom_email($data, $subject, $body);

		$return_result = array();
		$return_result['msg_val'] = 1;
		// echo json_encode($return_result);
		echo '1';
	}

	public function send_lead_email_to_admin($data)
	{
		$code = 'USER_LEAD_ADMIN_MAIL';
		$res_emt = $this->Email_templates_model->fetch_email_template_by_code($code);
		$subject = 'Brochure Download Request | '.$data['Name'] ;
		$body = $res_emt[0]->email_template_body;

		$msg = '<p>Hi,<br><br> Team you have a new brochure download request from – ';
		$msg .= '<br><p>Name : '.$data['Name'].'</p>';
		$msg .= '<p>Email Id: '.$data['Email'].'</p>';
		$msg .= '<p>Contact Number: '.$data['Phone'].'</p>';
		$msg .= '<p>IP Address : '.$data['Ip'].'</p>';
		// $msg .= '<p>Product : '.$data['Products'].'</p>';
		// $msg .= '<p>Message : '.$data['Message'].'</p>';
		$msg .= '<p>Date Request Received: '.convert_date_toreadable($data['CreatedOn']).'</p>';

		$msg .= '<p>Happy Conversion,</p>';
		$msg .= '<p>APS</p>';

		$variables = array(
			'message-placeholder' => $msg
		);

		$body = populate_email_body($variables, $body);
		$from = 'info@absolutpeoplescreen.com';
		$from_name = 'Absolute People Screen Private Limited';

		send_custom_email($data['admin_email'], $subject, $body);

		$return_result = array();
		$return_result['msg_val'] = 1;
		// echo json_encode($return_result);
		echo '1';
	}

}
