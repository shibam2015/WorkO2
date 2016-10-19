<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dashboards extends CI_Model
{

private $get_rows  = '';
private $data_arry = '';
private $get_last_insert_id = '';

/*=======================================================
| Construct Methord
========================================================*/
function __construct()
{
	parent::__construct();
}

/*================================================== CORE =============================================*/
/*===============================================================================================*/

/*=======================================================
| IS DATA EXSIT CODE 
========================================================*/
public function check_exsit($table_name,$fild_name,$data)
{
	$this -> db -> where($fild_name, $data);
	$query = $this -> db -> get($table_name);
	if ($query -> num_rows() > 0)
	return false;
	else
	return true;
}
/*=======================================================
| INSERT CODE 
========================================================*/
public function insert($table_name,$data,$empty_id)
{
	if (!empty($empty_id)) {
	$this->db->insert($table_name, $data);
	$this->get_last_insert_id = $this->db->insert_id();
	return $this->get_last_insert_id;
	} else {
	return $this->get_last_insert_id = 0;
	}
} 
/*=======================================================
| INSERT BATCH CODE 
========================================================*/
public function insert_batch_data($table_name,$data)
{
	$this->db->insert_batch($table_name, $data);
	$this->get_last_insert_id = $this->db->insert_id();
	if(!empty($this->get_last_insert_id)){
	return $this->get_last_insert_id;
	}else{
	return $this->get_last_insert_id = 0;
	}
} 
/*=======================================================
| UPDATE BATCH CODE 
========================================================*/
public function update_batch_data($table_name,$data,$fild_name,$id)
{
	$this->db->delete($table_name, array($fild_name => $id));
	$this->db->insert_batch($table_name, $data);
	$this->get_last_insert_id = $this->db->insert_id();
	if(!empty($this->get_last_insert_id)){
	return $this->get_last_insert_id;
	}else{
	return $this->get_last_insert_id = 0;
	}
} 
/*=======================================================
| UPDATE CODE 
========================================================*/
public function update($table_name,$data,$fild_name,$id)
{
	if (!empty($id)) {
	$this->db->where($fild_name, $id);
	$this->db->update($table_name, $data);
	return true;
	} else {
	return false;
	}
} 
/*=======================================================
| SELECT SINGLE DATA CODE 
========================================================*/
public function select_single($table_name,$fild_name,$id)
{
	$query = $this->db->get_where($table_name, array($fild_name => $id));
	$getData = $query->result_array();
	return $getData;
}
/*=======================================================
| SELECT FULL DATA CODE 
========================================================*/
public function select_all($table_name)
{
	$query = $this->db->get($table_name);
	return $query->result_array();
}
/*=======================================================
| DELETE CODE 
========================================================*/
public function delete($table_name,$fild_name,$id)
{
	$this->db->delete($table_name, array($fild_name => $id));
	return true;
}
/*================================================== CORE =============================================*/
/*===============================================================================================*/

/*=======================================================
| Profile Data
========================================================*/
public function get_my_profile_data($id)
{
	$query = $this->db->query("SELECT * FROM ".TBL_ADMIN." WHERE id='".$id."'");
	$this->get_rows = $query->result_array();
	return $this->get_rows;
}
/*=======================================================
| Selecting the data
========================================================*/
public function get_my_setting_data($id)
{
	$query = $this->db->query("SELECT * FROM ".TBL_SETTING." WHERE id='".$id."'");
	$this->get_rows = $query->result_array();
	return $this->get_rows;
}
/*=======================================================
| Setting Update Admin
========================================================*/
public function setting_update($data,$id)
{
	if (!empty($id)) {
	$this -> db -> where('id', $id);
	$this -> db -> update(TBL_SETTING, $data);
	return true;
	} else {
	return false;
	}
}
/*=======================================================
| Profile Update Admin
========================================================*/
public function profile_update($data,$id)
{
	if (!empty($data['admin_username'])) {
	$this -> db -> where('id', $id);
	$this -> db -> update(TBL_ADMIN, $data);
	return true;
	} else {
	return false;
	}
}
/*=======================================================
| Password Change Admin
========================================================*/
public function password_update($data,$id)
{
	if (!empty($data['admin_password'])) {
	$this->data_arry = array('admin_password'=> md5($data['admin_password']));	
	$this -> db -> where('id', $id);
	$this -> db -> update(TBL_ADMIN, $this->data_arry);
	return true;
	} else {
	return false;
	}
}
/*=======================================================
| PAGE
========================================================*/
public function create_p($data)
{
	if (!empty($data['page_title'])) {
	$this -> db -> insert(TBL_PAGE, $data);
	$this->get_last_insert_id = $this -> db -> insert_id();
	return $this->get_last_insert_id;
	} else {
	return $this->get_last_insert_id = 0;
	}
} 
/*=======================================================
| PAGE
========================================================*/
public function select_all_p()
{
	$query = $this -> db -> get(TBL_PAGE);
	return $query -> result_array();
}
/*=======================================================
| PAGE
========================================================*/
public function select_single_p($id)
{
	$query = $this -> db -> get_where(TBL_PAGE, array('page_id' => $id));
	$getData = $query -> result_array();
	return $getData;
}
/*=======================================================
| PAGE
========================================================*/
public function delete_p($id)
{
	$this -> db -> delete(TBL_PAGE, array('page_id' => $id));
	return true;
}
/*=======================================================
| PAGE
========================================================*/
public function update_p($id,$data)
{
	if (!empty($data['page_title'])) {
	$this -> db -> where('page_id', $id);
	$this -> db -> update(TBL_PAGE, $data);
	return true;
	} else {
	return false;
	}
} 
//=======================================================
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//CLASS END	 
}
