<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class someclass{
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// GENERATING THE POST DATA
public function post_array_generate($post_data)
{
	$data = array();
	
	if(count($post_data) > 1)
	{
	foreach($post_data as $key => $value)
	{
	$data[$key] = $value;	
	}
	return $data;
	}
}
// GENERATING THE POST DATA
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//END 
}

