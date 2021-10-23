<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends MX_Controller {

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

       public $settings;

       function __construct()
       {
              parent::__construct();
              $this->load->model('General_model');
       }

       public function get_all_countries(){
              $countries = $this->General_model->get_country_list();        
              echo json_encode($countries); 
       }

       public function get_subject_by_class($class_id){
              $subjects = $this->General_model->get_subject_by_class($class_id);        
              echo json_encode($subjects); 
       }

       public function get_topics_by_subject($subject_id){
              $topics = $this->General_model->get_topics_by_subject($subject_id);        
              echo json_encode($topics); 
       }

}
