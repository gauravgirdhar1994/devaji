<?php

function rename_files($source_name, $append_str)
{
	$img_ext_arr = explode('.', $source_name);
	$img_renaming_arr = explode(' ', $img_ext_arr[0]);
	$img_renaming_str = strtolower(implode('-', $img_renaming_arr));
	if($append_str == '')
	{
		return $img_renaming_str;
	}
	else
	{
		return $img_renaming_str.$append_str.'.'.$img_ext_arr[1];
	}
}

function convert_date_toreadable($mysqldate)
{
	$dt_arr = explode(' ', strtotime($mysqldate));
	return date("j F Y", $dt_arr[0]);
}

function convert_date_toreadableday($mysqldate)
{
	$dt_arr = explode(' ', strtotime($mysqldate));
	return date("l", $dt_arr[0]);
}

function convert_date_toreadabletime($mysqldate)
{
	$dt_arr = explode(' ', strtotime($mysqldate));
	return date("h:i A", $dt_arr[0]);
}

function convert_to_url_format($str)
{
	$str = str_replace('%20', ' ', $str);
	$str = str_replace('&', ' ', $str);
	$str = str_replace(',', ' ', $str);
	$str = str_replace('/', ' ', $str);
	$str = str_replace('ç', 'c', $str);
	$str_arr = explode(' ', $str);
	foreach($str_arr as $s)
	{
		if($s != '' && $s != '-')
		{
			$st[] = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
		}
	}
	$str = strtolower(implode('-', $st));
	return $str;
}

function convert_from_url_format($str)
{
	$str_arr = explode('-', $str);
	$str = ucwords(strtolower(implode(' ', $str_arr)));
	return $str;
}

// Sorting helper function for products array
function cmp_product_name($a, $b)
{
	return strcasecmp($a->prd_name, $b->prd_name);
}

function cmp_mf_name($a, $b)
{
	return strcasecmp($a->mf_brand_name, $b->mf_brand_name);
}

function get_page_no_from_var($str)
{
	$str_arr = explode('.', $str);
	$str_arr = explode('-', $str_arr[0]);
	return str_replace('p', '', end($str_arr));
}

function get_page_url_name_from_var($str)
{
	$str_arr = explode('.', $str);
	$str_arr = explode('-', $str_arr[0]);
	array_pop($str_arr);
	return implode('-', $str_arr);
}

function get_date_diff($dt1, $dt2)
{
	$date1 = new DateTime($dt1);
	$date2 = new DateTime($dt2);

	$diff = $date2->diff($date1)->format("%a");
	
	return $diff;
}

function multiexplode ($delimiters,$string) {

	$ready = str_replace($delimiters, $delimiters[0], $string);
	$launch = explode($delimiters[0], $ready);
	return  $launch;
}

function getInnerSubstring($string, $start, $end){
	$temp_arr = explode($start, $string);
	if(!empty($temp_arr[1])){
		$temp_arr = explode($end, $temp_arr[1]);
		if(!empty($temp_arr[0]))
			return $temp_arr[0];
		else 
			return false;
	}
}

function unique_multidim_array($array, $key) { 
	$temp_array = array(); 
	$i = 0; 
	$key_array = array(); 
	
	foreach($array as $val) { 
		if (!in_array($val[$key], $key_array)) { 
			$key_array[$i] = $val[$key]; 
			$temp_array[$i] = $val; 
		} 
		$i++; 
	} 
	return $temp_array; 
} 

function check_image($url){

	// echo $url;
	if (@getimagesize($url)) {
		$res = 0;
	} else {
		$res = 1;
	}
	// var_dump($res);die;
	return $res;

}

function calculateOffset($page_no, $limit) {
	if($page_no == 1)
		$offset = 0;
	else
		$offset = (((int) $page_no - 1)  * $limit);
	
	return $offset;
}

function calculateOppositeOffset($page_no, $limit, $totalRecords) {
	if($page_no == 1)
		$offset = 0;
	else
		$offset = (((int) $page_no - 1)  * $limit);
	
	//calculate difference of total records and offset
	$diff = $totalRecords - $offset;
	
	if($diff < $limit) {
		$offset = $offset - (6 - $diff);
	}
	
	return $offset;
}

function lchar($str,$val)
{
	return strlen($str)<=$val?$str:substr($str,0,$val).'...';
}

function time_elapsed_string($time_ago) {
	$time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
	$time  = time() - $time_ago;

	switch($time):
// seconds
	case $time <= 60;
	return 'less than a minute ago';
// minutes
	case $time >= 60 && $time < 3600;
	return (round($time/60) == 1) ? 'a minute' : round($time/60).' minutes ago';
// hours
	case $time >= 3600 && $time < 86400;
	return (round($time/3600) == 1) ? 'a hour ago' : round($time/3600).' hours ago';
// days
	case $time >= 86400 && $time < 604800;
	return (round($time/86400) == 1) ? 'a day ago' : round($time/86400).' days ago';
// weeks
	case $time >= 604800 && $time < 2600640;
	return (round($time/604800) == 1) ? 'a week ago' : round($time/604800).' weeks ago';
// months
	case $time >= 2600640 && $time < 31207680;
	return (round($time/2600640) == 1) ? 'a month ago' : round($time/2600640).' months ago';
// years
	case $time >= 31207680;
	return (round($time/31207680) == 1) ? 'a year ago' : round($time/31207680).' years ago' ;

	endswitch;
}

function generate_ticket_id()
{
	$chars = "0123456789";
	$res = "";
	for ($i = 0; $i < 6; $i++) {
		$res .= $chars[mt_rand(0, strlen($chars)-1)];
	}

	return $res;
}


?>