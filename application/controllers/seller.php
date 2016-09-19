<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Seller extends CI_Controller {
	
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
	private $status;
	private $data;
	private $bool;
	private $get_admin_username = '';
	private $get_admin_password = '';
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
	$session_details = $this->session->all_userdata();	
	if(!isset($session_details['seller_login'])){
	$this->load->view('seller/index');
	}else{
	$msg['data'] = $this->sellers->get_seller_details($session_details['seller_details'][0]['id']);	
	$this->load->view('seller/profile',$msg);	
	}	
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_description()
{
	$data = array (
		"seller_description" => $this->input->post('seller_description'),
	);
	$this->status = $this->sellers->seller_update_profile($this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_availability()
{
	$data = array (
		"seller_availability" =>$this->input->post('seller_availability'),
	);
	$this->status = $this->sellers->seller_update_profile($this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_skill()
{
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_skill" =>$this->input->post('seller_skill'),
		"seller_skill_level" =>$this->input->post('seller_skill_level'),
	);
	$this->status = $this->sellers->seller_insert_data($this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_education()
{
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_edu_country" =>$this->input->post('seller_edu_country'),
		"seller_edu_collage_name" =>$this->input->post('seller_edu_collage_name'),
		"seller_edu_title" =>$this->input->post('seller_edu_title'),
		"seller_edu_degree" =>$this->input->post('seller_edu_degree'),
		"seller_edu_from" =>$this->input->post('seller_edu_from'),
		"seller_edu_to" =>$this->input->post('seller_edu_to'),
	);
	$this->status = $this->sellers->seller_insert_data($this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_certificate()
{
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_cerified" =>$this->input->post('seller_cerified'),
		"seller_cerified_from" =>$this->input->post('seller_cerified_from'),
		"seller_cerified_year" =>$this->input->post('seller_cerified_year'),
	);
	$this->status = $this->sellers->seller_insert_data($this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_portfolio()
{
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_profile_web" =>$this->input->post('seller_profile_web'),
		"seller_profile_web_link" =>$this->input->post('seller_profile_web_link'),
	);
	$this->status = $this->sellers->seller_insert_data($this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
}

/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function seller_reg()
{
	$data = array (
		"seller_name"      => $this->input->post('seller_name',true),
		"seller_username"  => $this->input->post('seller_uname',true),
		"seller_passsword" => md5($this->input->post('seller_password',true)),
		"seller_email"     => $this->input->post('seller_email',true),
		"seller_phone"     => $this->input->post('seller_phone',true),
	);
	
	/* ========================================================================================= */	
	$this->status = $this->sellers->check_user_email_id($this->input->post('seller_uname'));
	/* ========================================================================================= */	
	if($this->status != false){
	$this->status = $this->sellers->seller_registration($data);
	if($this->status != 0){
	echo 'Thank you for registering';
	}else{
	echo 'Fail';	
	}
	}else{
	echo 'OPPS !! user already exsit';
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function login()
{
	$this->get_admin_username = $this->input->post('seller_username');
	$this->get_admin_password = $this->input->post('seller_password');
	
	if(!empty( $this->get_admin_username ) and !empty( $this->get_admin_password ) )
	{
	$this->data = $this->sellers->seller_log($this->get_admin_username,$this->get_admin_password);
	if($this->data != false)
	{
	$this->session->set_userdata('seller_details',$this->data);
	$this->session->set_userdata('seller_login', 'YES');
	redirect('seller');	
	}else
	{
	$this->index(); 	
	}
	}else
	{
	$this->index(); 
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function logout()
{
	$this->session->sess_destroy();
	redirect('seller','refresh');
}
/* ========================================================================================= */	
/* =============================== */	
/* ========================================================================================= */	
}

