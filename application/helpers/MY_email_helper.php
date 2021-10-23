<?php

function send_custom_email($email_to, $subject, $body)
{
	// echo $email_to, $subject, $body; die;
	$CI =& get_instance();
    $CI->load->library('email'); // load library

    $CI->email->from('info@absolutepeoplescreen.com','Absolute People Screen Private Limited');
    $CI->email->to($email_to);
	// $this->email->cc('another@another-example.com');
    $CI->email->bcc('gauravgirdhar1994@gmail.com');

    $CI->email->subject($subject);
    $CI->email->message($body);
    $CI->email->set_mailtype("html");
    $CI->email->send();
// 		$fp = fsockopen("smtp.gmail.com", 465, $errno, $errstr, 10);
// if (!$fp)
	// echo "smtp.gmail.com 465  -".$errstr($errno)<br>\n";
  // echo $CI->email->print_debugger();
    //die;
	// return 'in helper email function';
    return true;

}

function populate_email_body($variables, $template)
{
	if(!empty($variables))
	{
		foreach($variables as $key => $value)
		{
			$template = str_replace('{{'.$key.'}}', $value, $template);
		}
	}
	return $template;
}

?>
