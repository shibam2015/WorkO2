<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class users extends CI_Model
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
	$this -> db -> where('user_email', $data);
	$query = $this -> db -> get(TBL_USER);
	if ($query -> num_rows() > 0)
	return false;
	else
	return true;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function buyers_authentication($username,$password)
{
	$this->username = $username;
	$this->password = $password;
	
	if(!empty( $this->username ) and !empty( $this->password ) )
	{
		
	$this->username = trim($this->username);
	$this->password = trim($this->password);
	$this->password = md5($this->password);
	
	$this->query = "SELECT * FROM ".TBL_USER." 
								WHERE user_email='".$this->username."' 
								AND   user_password='".$this->password."'";
	
	$query = $this->db->query($this->query);
	if ($query->num_rows() > 0)
	return $query -> result_array();
	else
	return false;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function buyers_registration($email,$password,$telephone)
{
	$this->password = $password;
	$this->password = md5($this->password);	
	if (!empty($email)) {
	$data = array( 
		"user_email" => $email , 
		"user_password" => $this->password, 
		"user_tel_no" => $telephone
	);	
	$this -> db -> insert(TBL_USER, $data);
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
