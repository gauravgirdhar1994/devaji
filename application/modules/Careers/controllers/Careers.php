<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends MX_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
    $this->load->model('Careers_model');
  }

  public function career(){
    $data['jobData'] = $this->Careers_model->fetch_job_data();
    $data['careerData'] = $this->Careers_model->fetch_career_data();
    $data['careerFeatures'] = $this->Careers_model->fetch_career_features($data['careerData'][0]->Id);

    $data['view_name'] = 'careers';
    $this->load->view('template',$data);

  }

  public function apply_now(){

    $data['jobs'] = $this->Careers_model->fetch_all_jobs();
    // echo '<pre>';
    // var_dump($data);die;
    $data['view_name'] = 'apply_now';
    $this->load->view('template',$data);

  }

  public function submit_job_application(){

    $data = $this->input->post();


    // var_dump($_FILES);die;
    if(!empty($_FILES['Resume']['name']))
    {
      $config['upload_path'] = './uploads/resume/';
      $config['allowed_types'] = 'pdf|docx|doc';
      $config['max_size'] = '50000';
      $config['max_width']  = '3000';
      $config['max_height']  = '3000';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('Resume'))
      {
        $error = array('error' => $this->upload->display_errors());
        $errorMsg = $error['error'];
        $this->session->set_flashdata('error',$errorMsg);
        // print_r($errorMsg);exit; 
      }
      else
      {
        $rest = array('upload_data' => $this->upload->data());
        $data['Resume'] = $rest['upload_data']['file_name'];
        $res = $this->Careers_model->add_job_application($data);
        $data['admin_email'] = '"linear"';
        $data['Profile'] = $this->Careers_model->get_profile_name($data['Profile']);
        $result = modules::run('Send_emails/Send_emails/send_job_application_email',$data);
        $result1 = modules::run('Send_emails/Send_emails/send_job_application_email_to_admin',$data);
        $this->session->set_flashdata('success','Thank you for submitting the application. We will get back to you soon.');
        // var_dump($rest);die;
      }


    }

    redirect('apply-now');
  }


  public function refer_a_friend(){

   $data['sources'] = $this->Careers_model->fetch_all_sources();
   $data['view_name'] = 'refer-a-friend';
   $this->load->view('template',$data);

 }


 public function submit_friend_reference(){

  // $data = $this->input->post();
   $data['Name'] = $this->input->post('Name');
   $data['Phone'] = $this->input->post('Phone');
   $data['Email'] = $this->input->post('Email');
   $data['Source'] = $this->input->post('Source');
   $data['EmployeeName'] = $this->input->post('EmployeeName');
   $data['EmployeeId'] = $this->input->post('EmployeeId');
   $data['Message'] = $this->input->post('Message');
   $data['OtherSource'] = $this->input->post('OtherSource');

   // var_dump($data);die;
    // var_dump($_FILES);die;
   if(!empty($_FILES['Resume']['name']))
   {
    $config['upload_path'] = './uploads/resume/';
    $config['allowed_types'] = 'pdf|docx|doc';
    $config['max_size'] = '50000';
    $config['max_width']  = '3000';
    $config['max_height']  = '3000';
    $this->load->library('upload', $config);
    
    if( ! $this->upload->do_upload('Resume'))
    {
      $error = array('error' => $this->upload->display_errors());
      $errorMsg = $error['error'];
      $this->session->set_flashdata('error',$errorMsg);
      // print_r($errorMsg);exit; 
    }
    else
    {
      $rest = array('upload_data' => $this->upload->data());
      $data['Resume'] = $rest['upload_data']['file_name'];
      $res = $this->Careers_model->add_friend_reference($data);
      $data['admin_email'] = '"linear"';
      $result = modules::run('Send_emails/Send_emails/send_job_reference_email',$data);
      $result1 = modules::run('Send_emails/Send_emails/send_job_reference_email_to_admin',$data);
      $this->session->set_flashdata('success','Thank you for submitting the reference. We will get back to you soon.');
        // var_dump($rest);die;
    }


  }

  redirect('refer-a-friend');
}

}