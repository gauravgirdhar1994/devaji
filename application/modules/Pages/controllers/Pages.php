<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Pages
	 *	- or -
	 * 		http://example.com/index.php/Pages/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Pages/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pages_model');
	}
	public function load_page($page)
	{
		// echo $page;die;
		if($page == 'about'){
			// echo 'about';die;
			if(!empty($this->session->userdata('language'))){
				$data['language'] = $this->session->userdata('language');
			}
			else{
				$data['language'] = 'en';
			}
			$data['aboutUsData'] = $this->Pages_model->fetch_aboutus_data($data['language']);
			$data['whyUsData'] = $this->Pages_model->fetch_whyus_data($data['language']);
			$data['logoData'] = $this->Pages_model->fetch_logo_data($data['language']);
			$data['values'] = $this->Pages_model->fetch_values($data['language']);
			// var_dump($data['values']);die;
			$data['operationsTeamData'] = $this->Pages_model->fetch_operations_team_data('en');
			// var_dump($data['operationsTeamData']);die;
			$data['businessTeamData'] = $this->Pages_model->fetch_business_team_data('en');


		}

		if($page == 'career'){
			// echo 'about';die;
			if(!empty($this->session->userdata('language'))){
				$data['language'] = $this->session->userdata('language');
			}
			else{
				$data['language'] = 'en';
			}
			$data['operationsTeamData'] = $this->Pages_model->fetch_operations_team_data('en');
			$data['businessTeamData'] = $this->Pages_model->fetch_business_team_data('en');
			$data['careerData'] = $this->Pages_model->fetch_career_data($data['language']);
			$data['teamMemberData'] = $this->Pages_model->fetch_team_members('en');

		}

		if($page == 'contact'){
			// echo 'about';die;
			if(!empty($this->session->userdata('language'))){
				$data['language'] = $this->session->userdata('language');
			}
			else{
				$data['language'] = 'en';
			}
			$data['contactData'] = $this->Pages_model->fetch_contact_data($data['language']);

		}

		if($page == 'code-of-conduct' || $page == 'terms-and-conditions' || $page == 'whistle-blower-policy' || $page == 'privacy-policy'){
			// echo $page;die;
			// if(!empty($this->session->userdata('language'))){
			// 	$data['language'] = $this->session->userdata('language');
			// }
			// else{
			// 	$data['language'] = 'en';
			// }
			$data['codeofconductData'] = $this->Pages_model->fetch_page_data_by_slug($page,'en');
			// var_dump($data);die;
		}

		$data['view_name'] = $page;
		$this->load->view('template', $data);
	}

	public function testimonials(){
		$data['testimonials'] = $this->Pages_model->fetch_testimonials();
		// $data['view_name'] = 'testimonials';
		$this->load->view('testimonials', $data);
	}

	public function payment(){
		$data = '';
		$this->load->view('payment', $data);
	}

	public function contact_submit(){
		$data['Name'] = $_POST['Name'];
		$data['Phone'] = $_POST['Phone'];
		$data['Email'] = $_POST['Email'];
		$data['Message'] = $_POST['Message'];
		$data['Ip'] = $this->input->ip_address();
		$data['CreatedOn'] = date('Y-m-d h:i:s');
		
		// var_dump($_POST);die;
		$result = $this->Pages_model->save_query($data);
		
                //var_dump($result);die;
		if($result){
			//$admin_email = "gauravgirdhar1994@gmail.com";
			$admin_email = array(
				'0' => "gauravgirdhar1994@gmail.com",
				'1' => "jatingug16695@gmail.com",
				'2' => "info@absolutepeoplescreen.com",
				'3' => "surinder.ankesh@gmail.com"
			);
			
			for($i=0;$i<count($admin_email);$i++){
				$data['admin_email'] = $admin_email[$i];
				
				$result = modules::run('Send_emails/Send_emails/send_query_email_to_admin',$data);
			}

			$msg = "Hi ".$data['Name'].", Thank you for submitting your query at Absolute People Screen. We will connect to you soon. ";

			// $this->session->set_flashdata('success','Sales enquiry added successfully');

			$user_mail = $data['Email'];
			$formType = $_POST['FormType'];
			$result = modules::run('Send_emails/Send_emails/send_query_email_to_user',$user_mail,$formType);

			$response = 'Thank you for submitting the query. We will get back to you soon.';
			echo json_encode($response);
		}
	}

	
}
