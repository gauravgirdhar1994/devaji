<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_actions extends MX_Controller {
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
		// $this->output->enable_profiler(TRUE);
		$this->load->model('Admin_actions_model');
		$this->admin_session_check();
	} 

	public function fetch_members(){
		// echo 'upload';die;
		$data['pagename'] = 'Members List';
		$data['content'] = 'admin-members-list';
		$this->load->view('admin-template', $data);
	}

	public function fetch_feedback(){
		// echo 'upload';die;
		$data['pagename'] = 'Feedback List';
		$data['content'] = 'admin-feedback-list';
		$this->load->view('admin-template', $data);
	}

	
	public function members_list()
	{

		$data['members'] = $this->Admin_actions_model->fetch_all_members();

		echo json_encode($data);
	}

	public function feedback_list()
	{

		$data['feedback'] = $this->Admin_actions_model->fetch_all_feedbacks();

		echo json_encode($data);
	}

	public function upload_files(){
		// echo 'upload';die;
		$data['sections'] = $this->Admin_actions_model->fetch_all_tabs();
		$data['pagename'] = 'Upload Files';
		$data['content'] = 'admin-upload-files';
		$this->load->view('admin-template', $data);
	}

	public function youtube_link(){
		// echo 'upload';die;
		$data['pagename'] = 'Add Youtube Link';
		$data['content'] = 'admin-youtube-link';
		$this->load->view('admin-template', $data);
	}



	public function upload_files_submit(){
		
		// var_dump($this->input->post());die;
		$data['TabAlias'] = $this->input->post('TabAlias');
		$data['MediaTitle'] = $this->input->post('Title');
		// var_dump($_FILES);die;

		if($data['TabAlias'] == 'rem'){
			$data['MediaUrl'] = $this->input->post('EmbedCode');
		}
		else{


			$filetype = $_FILES['MediaFile']['type'];
			// echo $filetype;die;
			$allowed_types = 'gif|jpg|png|mp3|xlsx|pdf|ppt|pptx|doc|docx|xls|jpeg';

			if($filetype == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
				$path = 'uploads/media/excel';
				$data['FileType'] = 'excel';
			}

			if($filetype == 'application/msword'){
				$path = 'uploads/media/word';
				$data['FileType'] = 'word';
			}

		// echo stripos($filetype,'image/');die;

			if($filetype == 'image/png' || $filetype == 'image/jpg' || $filetype == 'image/jpeg' || $filetype == 'image/gif' ){
				$path = 'uploads/media/images';
			// echo $path;die;
				$data['FileType'] = 'image';
			}


			if($filetype == 'application/pdf'){
				$path = 'uploads/media/pdf';
				$data['FileType'] = 'pdf';
			}

			if($filetype == 'application/ppt'){
				$path = 'uploads/media/ppt';
				$data['FileType'] = 'ppt';
			}

			if($filetype == 'audio/mp3'){
				$path = 'uploads/media/audio';
				$data['FileType'] = 'audio';
			}

			if($filetype == 'application/vnd.ms-powerpoint'){
				$path = 'uploads/media/ppt';
				$data['FileType'] = 'ppt';
			}
			// var_dump($data);die;
			$res_upload = $this->do_upload($path, 'MediaFile', $allowed_types);
			// var_dump($res_upload);die;	
			if(isset($res_upload)) {
				$data['MediaFile'] = $res_upload[0]['file_name'];
				if(stripos($filetype,'image/')){
					$this->create_thumb_from_image('./uploads/media/images'.'/'.$data['MediaFile'], './uploads/media/images/thumbs/'.$data['MediaFile']);
				}
			} elseif($res_upload['error']) {
				$this->session->set_flashdata('error', $res_upload['error']);
			}        

			$data['MediaUrl'] = base_url().$path.'/'.$data['MediaFile'];
			unset($data['MediaFile']);
		// var_dump($data);die;
		}


		$result = $this->Admin_actions_model->save_uploaded_file($data);

		if($result){
			$this->session->set_flashdata('success','Media File saved');
		}

		redirect('upload-files');
	}

	public function post_notification(){
		// echo 'upload';die;
		$data['pagename'] = 'Post Notificaiton';
		$data['content'] = 'admin-post-notifications';
		$this->load->view('admin-template', $data);
	}

	public function post_notification_submit(){
		$data['Title'] = $this->input->post('Title');
		$data['Description'] = $this->input->post('Description');

		$result = $this->Admin_actions_model->save_notification($data);

		if($result){

			$registration_id = $this->Admin_actions_model->fetchDeviceIds();
			// var_dump($registration_id);die;
			$i=0;
			foreach ($registration_id as $device) {
				$json_data['registration_ids'][$i] = $device->DeviceId;
				$i++;
			}
			
			$json_data['notification']['title'] = $data['Title'];
			$json_data['notification']['body'] = $data['Description'];

			$data = json_encode($json_data);

			// echo '<pre>';var_dump($data);die;
//FCM API end-point
			$url = 'https://fcm.googleapis.com/fcm/send';
//api_key in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
			$server_key = 'AAAA8gKkNGg:APA91bEQyhQ82X3V8j6Fz218AV4MMkJbngh5j522AE-zMAuT162Np0Wd1DQJAlB8HSFNy89Z2JlifwRaqO6XOFhxub4qfnMTt8fnaU69B44bnFZPbzx6Bx30dWYgv7g6o_6Ji0ypSd2ADiUL7QLZLmLRDMXDFaCeiw';
//header with content_type api key
			$headers = array(
				'Content-Type:application/json',
				'Authorization:key='.$server_key
			);
//CURL request to route notification to FCM connection server (provided by Google)
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$result = curl_exec($ch);
			// echo '<pre>';var_dump($result);die;
			if ($result === FALSE) {
				die('Oops! FCM Send Error: ' . curl_error($ch));
			}
			curl_close($ch);
			$this->session->set_flashdata('success','Notification posted');
		}

		redirect('post-notification');

	}

	public function youtube_link_submit(){
		$data['Title'] = $this->input->post('Title');
		$data['VideoLink'] = $this->input->post('VideoLink');
		$data['EmbedCode'] = $this->input->post('EmbedCode');

		$res = $this->Admin_actions_model->delete_youtube_link();
		$result = $this->Admin_actions_model->save_youtube_link($data);

		if($result){
			$this->session->set_flashdata('success','Link Updated');
		}

		redirect('youtube-link');
	}

}
