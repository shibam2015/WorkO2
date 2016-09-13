<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Seller extends CI_Controller {
	
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
	private $get_username;
	private $get_email;
	private $status;
	private $bool;
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function __construct()
{
	parent::__construct();
	//LODING THE MODULE
	$this->load->model('sellers');	
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function index()
{
	$this->load->view('seller/index');
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function seller_reg()
{
	$this->get_email     = $this->input->post('email');
	$this->get_username  = $this->input->post('username');
	/* ========================================================================================= */	
	$this->status = $this->sellers->check_user_email_id($this->get_email);
	/* ========================================================================================= */	
	if($this->status != false){
	$this->status = $this->sellers->seller_registration($this->get_email,$this->get_username);
	if($this->status != 0){
	echo 'Thank you for registering';
	}else{
	echo 'Fail';	
	}
	}else{
	echo 'OPPS !! user already exsit';
	}
}
/* ========================================================================================= */	
/* =============================== */	
/* ========================================================================================= */	
}

