<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sellers extends CI_Model
{

private $username = '';
private $password = '';
private $get_last_insert_id = '';
private $status   = '';
private $query    = '';


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
	$this -> db -> where('seller_username', $data);
	$query = $this -> db -> get(TBL_SELLER);
	if ($query -> num_rows() > 0)
	return false;
	else
	return true;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_registration($data)
{
	if (!empty($data['seller_username'])) {
	$this -> db -> insert(TBL_SELLER, $data);
	$this->get_last_insert_id = $this -> db -> insert_id();
	return $this->get_last_insert_id;
	} else {
	return $this->get_last_insert_id = 0;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_update_profile($id,$data)
{
	if (!empty($id)) {
	$this -> db -> where('id', $id);
	$this -> db -> update(TBL_SELLER, $data);
	return true;
	} else {
	return false;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_insert_data($id,$data)
{
	if (!empty($id)) {
	$this -> db -> insert(TBL_SELLER_DATA, $data);
	$this->get_last_insert_id = $this -> db -> insert_id();
	return true;
	} else {
	return false;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_log($username,$password)
{
	$this->username = $username;
	$this->password = $password;
	
	if(!empty( $this->username ) and !empty( $this->password ) )
	{
	$this->username = trim($this->username);
	$this->password = trim($this->password);
	$this->password = md5($this->password);
	
	$this->query = "SELECT * FROM ".TBL_SELLER." 
								WHERE seller_username='".$this->username."' 
								AND   seller_passsword='".$this->password."'";
	
	$query = $this->db->query($this->query);
	if ($query->num_rows() > 0)
	return $query -> result_array();
	else
	return false;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function get_seller_details($id)
{
	$query = $this -> db -> get_where(TBL_SELLER, array('id' => $id));
	$getData = $query -> result_array();
	return $getData;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
//CLASS END	 
}
