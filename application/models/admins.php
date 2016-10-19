<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admins extends CI_Model
{
//=============================================================	
private $username = '';
private $password = '';
private $query    = '';
//=============================================================

/*=======================================================
| Construct Methord
========================================================*/
function __construct()
{
	parent::__construct();
}
/*=======================================================
| ADMIN LOGING FUNCTION
========================================================*/
public function admin_log($username,$password)
{
	$this->username = $username;
	$this->password = $password;
	
	if(!empty( $this->username ) and !empty( $this->password ) )
	{
	$this->username = trim($this->username);
	$this->password = trim($this->password);
	$this->password = md5($this->password);
	
	$this->query = "SELECT * FROM ".TBL_ADMIN." 
								WHERE admin_username='".$this->username."' 
								AND   admin_password='".$this->password."' AND id = 1 ";
	
	$query = $this->db->query($this->query);
	if ($query->num_rows() > 0)
	return true;
	else
	return false;
	}
}

//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
//CLASS END	 
}
