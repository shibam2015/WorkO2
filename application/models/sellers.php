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
/* ==+++++++++++++++++++++++++++++++++++++++++++++++CORE== */
/* ========================================================================================= */
public function seller_insert_data($table,$id,$data)
{
	if (!empty($id)) {
	$this -> db -> insert($table, $data);
	$this->get_last_insert_id = $this -> db -> insert_id();
	return $this->get_last_insert_id;
	} else {
	return false;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++CORE== */
/* ========================================================================================= */
public function seller_update_data($table_name,$data,$fild_name,$id)
{
	if (!empty($id)) {
	$this->db->where($fild_name, $id);
	$this->db->update($table_name, $data);
	return true;
	} else {
	return false;
	}
} 
/* ==+++++++++++++++++++++++++++++++++++++++++++++++CORE== */
/* ========================================================================================= */
public function delete($table_name,$fild_name,$id)
{
	$this->db->delete($table_name, array($fild_name => $id));
	return true;
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
	//$this->db->last_query();
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
public function select_with_where($table_name,$fild_name,$id)
{
	$query = $this->db->get_where($table_name, array($fild_name => $id));
	$getData = $query->result_array();
	return $getData;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function select_join_expreance_level($id)
{
	$this->db->select('*');
	$this->db->from('work_expreance_level');
	$this->db->join('work_seller_skill', 'work_expreance_level.id = work_seller_skill.seller_skill_level', 'inner');
	$this->db->where('work_seller_skill.user_id', $id);
	$query = $this->db->get();
	$getData = $query->result_array();
	return $getData;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function select_join_language_level($id)
{
	$this->db->select('*');
	$this->db->from('work_language_level');
	$this->db->join('work_seller_language', 'work_language_level.id = work_seller_language.seller_language_level', 'inner');
	$this->db->where('work_seller_language.user_id', $id);
	$query = $this->db->get();
	$getData = $query->result_array();
	return $getData;
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function checked_gig_one($data)
{
	$this -> db -> where('gig_title', $data['gig_title']);
	$this -> db -> where('category_id', $data['category_id']);
	$this -> db -> where('subcategory_id', $data['subcategory_id']);
	$this -> db -> where('gig_tags', $data['gig_tags']);
	$query = $this -> db -> get(TBL_GIG);
	if ($query -> num_rows() > 0){
	$getData = $query->result_array();
	return $getData;
	}else{
	return false;
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
//CLASS END	 
}
