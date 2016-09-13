<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
	private $get_username;
	private $get_password;
	private $get_telephone;
	private $get_email;
	private $status;
	private $bool;
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function __construct()
{
	parent::__construct();
	//LODING THE MODULE
	$this->load->model('users');	
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function index()
{
	$this->load->view('index');
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function buyers_reg()
{
	$this->get_email     = $this->input->post('email');
	$this->get_password  = $this->input->post('password');
	$this->get_telephone = empty($this->input->post('tel'))? '' : $this->input->post('tel');
	
	$this->status = $this->users->check_user_email_id($this->get_email);
	
	if($this->status != false){
	$this->status = $this->users->buyers_registration($this->get_email,$this->get_password,$this->get_telephone);
	if($this->status != 0){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
	}else{
	echo 'Fail';
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function buyers_login()
{
	$this->get_username = $this->input->post('email');
	$this->get_password = $this->input->post('password');
	
	if(!empty( $this->get_username ) and !empty( $this->get_password ) )
	{
	$this->status = $this->users->buyers_authentication($this->get_username,$this->get_password);
	if($this->status != false)
	{
	$this->session->set_userdata('user_details',$this->status);
	echo 'Success';	
	}else{
	echo 'Fail';
	}
	}else{
	echo 'Fail';
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function logout()
{
	$this->session->sess_destroy();
	redirect('user','refresh');
}
/* ========================================================================================= */	
/* =============================== */	
/* ========================================================================================= */	
}

