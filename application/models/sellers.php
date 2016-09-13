<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sellers extends CI_Model
{

private $username = '';
private $password = '';
private $get_last_insert_id = '';


/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
function __construct()
{
	parent::__construct();
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function check_user_email_id($data)
{
	$this -> db -> where('seller_email', $data);
	$query = $this -> db -> get(TBL_SELLER);
	if ($query -> num_rows() > 0)
	return false;
	else
	return true;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_registration($email,$username)
{
	if (!empty($email)) {
	$data = array( 
		"seller_email" => $email, 
		"seller_username" => $username
	);	
	$this -> db -> insert(TBL_SELLER, $data);
	$this->get_last_insert_id = $this -> db -> insert_id();
	return $this->get_last_insert_id;
	} else {
	return $this->get_last_insert_id = 0;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
//CLASS END	 
}
