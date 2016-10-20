<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller 
{
	
//=============================================================
private $get_admin_username = '';
private $get_admin_password = '';
private $status = '';
private $session_details = ''; 
private $message = '';
//=============================================================

/*=======================================================
| Construct Methord
========================================================*/
public function __construct()
{
	parent::__construct();
	//__LODING THE MODEL
	$this->load->model('admins');	
}

/*=======================================================
| Index Methord
========================================================*/
public function index($message_transfer='')
{
	$this->session_details = $this->session->all_userdata();	
	if(isset($this->session_details['admin_login']) and $this->session_details['admin_login'] == 'YES'){
	redirect('dashboard');
	}	
	if(isset($message_transfer) and !empty($message_transfer))
	{
	$msg['msg'] = $message_transfer;
	$this->load->view('admin/index',$msg);
	}else{
	$this->load->view('admin/index');
	}
}
/*=======================================================
|
========================================================*/
public function admin_login()
{
	$this->get_admin_username = $this->input->post('admin_username');
	$this->get_admin_password = $this->input->post('admin_password');
	
	if(!empty( $this->get_admin_username ) and !empty( $this->get_admin_password ) )
	{
	$this->status = $this->admins->admin_log($this->get_admin_username,$this->get_admin_password);
	if($this->status)
	{
	$this->session->set_userdata('admin_login', 'YES');
	redirect('dashboard');	
	}else
	{
	$this->message = message_display('invalid-login');
	$this->index($this->message); 	
	}
	}else
	{
	$this->message = message_display('required');
	$this->index($this->message); 
	}
}
/*=======================================================
|
========================================================*/
public function logout()
{
	$this->session->sess_destroy();
    redirect('admin','refresh');
}
//=======================================================
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
//CLASS END	 
}
