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
	$this->load->model('dashboards');	
}

public function is_login()
{
	$session_details = $this->session->all_userdata();
	if(!isset($session_details['seller_login'])){
	return false;
	}else{
	return true;	
	}	
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
	$msg['languages'] = $this->sellers->select_with_where(TBL_SELLER_LANGUAGE,'user_id',$session_details['seller_details'][0]['id']);
	$msg['skills'] = $this->sellers->select_with_where(TBL_SELLER_SKILL,'user_id',$session_details['seller_details'][0]['id']);
	$msg['educations'] = $this->sellers->select_with_where(TBL_SELLER_EDUCATION,'user_id',$session_details['seller_details'][0]['id']);
	$msg['certificates'] = $this->sellers->select_with_where(TBL_SELLER_CERTIFICATE,'user_id',$session_details['seller_details'][0]['id']);
	$msg['portfolios'] = $this->sellers->select_with_where(TBL_SELLER_PORTFOLIO,'user_id',$session_details['seller_details'][0]['id']);
	$msg['iwtw_l']  = $this->dashboards->select_all(TBL_WANT_TO_WORK);
	$msg['icw_l']   = $this->dashboards->select_all(TBL_CAN_WORK);
	$msg['iwlte_l'] = $this->dashboards->select_all(TBL_LIKE_EARN);
	$msg['lang_l']  = $this->dashboards->select_all(TBL_LIKE_LEVEL);
	$msg['exp_l']   = $this->dashboards->select_all(TBL_EXP_LEVEL);
	$msg['title_l'] = $this->dashboards->select_all(TBL_TITLE);
	$this->load->view('seller/profile',$msg);	
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
public function update_language()
{
	$get_fild_id = $this->input->post('fild_id');
	
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_language" =>$this->input->post('language_name'),
		"seller_language_level" =>$this->input->post('language_type'),
	);
	if(($get_fild_id != 0) or ($get_fild_id != '0')){
	$this->status = $this->sellers->seller_update_data(TBL_SELLER_LANGUAGE,$data,'id',$get_fild_id);
	if($this->status != false){
	echo 'Updated';	
	}else{
	echo 'Fail';	
	}
	}else{
	$this->status = $this->sellers->seller_insert_data(TBL_SELLER_LANGUAGE,$this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_skill()
{
	$get_fild_id = $this->input->post('fild_id');
	
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_skill" =>$this->input->post('seller_skill'),
		"seller_skill_level" =>$this->input->post('seller_skill_level'),
	);
	if(($get_fild_id != 0) or ($get_fild_id != '0')){
	$this->status = $this->sellers->seller_update_data(TBL_SELLER_SKILL,$data,'id',$get_fild_id);
	if($this->status != false){
	echo 'Updated';	
	}else{
	echo 'Fail';	
	}	
	}else{
	$this->status = $this->sellers->seller_insert_data(TBL_SELLER_SKILL,$this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_education()
{
	$get_fild_id = $this->input->post('fild_id');
	
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_edu_country" =>$this->input->post('seller_edu_country'),
		"seller_edu_collage_name" =>$this->input->post('seller_edu_collage_name'),
		"seller_edu_title" =>$this->input->post('seller_edu_title'),
		"seller_edu_degree" =>$this->input->post('seller_edu_degree'),
		"seller_edu_from" =>$this->input->post('seller_edu_from'),
		"seller_edu_to" =>$this->input->post('seller_edu_to'),
	);
	if(($get_fild_id != 0) or ($get_fild_id != '0')){
	$this->status = $this->sellers->seller_update_data(TBL_SELLER_EDUCATION,$data,'id',$get_fild_id);
	if($this->status != false){
	echo 'Updated';	
	}else{
	echo 'Fail';	
	}		
	}else{
	$this->status = $this->sellers->seller_insert_data(TBL_SELLER_EDUCATION,$this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_certificate()
{
	$get_fild_id = $this->input->post('fild_id');
	
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_cerified" =>$this->input->post('seller_cerified'),
		"seller_cerified_from" =>$this->input->post('seller_cerified_from'),
		"seller_cerified_year" =>$this->input->post('seller_cerified_year'),
	);
	if(($get_fild_id != 0) or ($get_fild_id != '0')){
	$this->status = $this->sellers->seller_update_data(TBL_SELLER_CERTIFICATE,$data,'id',$get_fild_id);
	if($this->status != false){
	echo 'Updated';	
	}else{
	echo 'Fail';	
	}			
	}else{
	$this->status = $this->sellers->seller_insert_data(TBL_SELLER_CERTIFICATE,$this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function update_portfolio()
{
	$get_fild_id = $this->input->post('fild_id');
	
	$data = array (
		"user_id" => $this->input->post('id'),
		"seller_profile_web" =>$this->input->post('seller_profile_web'),
		"seller_profile_web_link" =>$this->input->post('seller_profile_web_link'),
	);
	if(($get_fild_id != 0) or ($get_fild_id != '0')){
	$this->status = $this->sellers->seller_update_data(TBL_SELLER_PORTFOLIO,$data,'id',$get_fild_id);
	if($this->status != false){
	echo 'Updated';	
	}else{
	echo 'Fail';	
	}			
	}else{
	$this->status = $this->sellers->seller_insert_data(TBL_SELLER_PORTFOLIO,$this->input->post('id'),$data);
	if($this->status != false){
	echo 'Success';
	}else{
	echo 'Fail';	
	}
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function delete_seller_data()
{
	$id   = $this->input->post('id');
	$type = $this->input->post('type');	
	if(!empty($id)){
	if($type == 'Language'){
	$table_name = TBL_SELLER_LANGUAGE;	
	}else{
	if($type == 'Skill'){
	$table_name = TBL_SELLER_SKILL;		
	}else{
	if($type == 'Education'){
	$table_name = TBL_SELLER_EDUCATION;	
	}else{
	if($type == 'Certificate'){
	$table_name = TBL_SELLER_CERTIFICATE;
	}else{
	if($type == 'Portfolio'){
	$table_name = TBL_SELLER_PORTFOLIO;
	}	
	}	
	}	
	}	
	}	
	$this->status = $this->sellers->delete($table_name,'id',$id);
	if($this->status != false){
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
public function seller_view_profile_two()
{
	if($this->is_login()){
	$session_details = $this->session->all_userdata();		
	$msg['data'] = $this->sellers->get_seller_details($session_details['seller_details'][0]['id']);	
	$msg['languages'] = $this->sellers->select_with_where(TBL_SELLER_LANGUAGE,'user_id',$session_details['seller_details'][0]['id']);
	$msg['skills'] = $this->sellers->select_with_where(TBL_SELLER_SKILL,'user_id',$session_details['seller_details'][0]['id']);
	$msg['educations'] = $this->sellers->select_with_where(TBL_SELLER_EDUCATION,'user_id',$session_details['seller_details'][0]['id']);
	$msg['certificates'] = $this->sellers->select_with_where(TBL_SELLER_CERTIFICATE,'user_id',$session_details['seller_details'][0]['id']);
	$msg['portfolios'] = $this->sellers->select_with_where(TBL_SELLER_PORTFOLIO,'user_id',$session_details['seller_details'][0]['id']);
	$msg['iwtw_l']  = $this->dashboards->select_all(TBL_WANT_TO_WORK);
	$msg['icw_l']   = $this->dashboards->select_all(TBL_CAN_WORK);
	$msg['iwlte_l'] = $this->dashboards->select_all(TBL_LIKE_EARN);
	$msg['lang_l']  = $this->dashboards->select_all(TBL_LIKE_LEVEL);
	$msg['exp_l']   = $this->dashboards->select_all(TBL_EXP_LEVEL);
	$msg['title_l'] = $this->dashboards->select_all(TBL_TITLE);
	$this->load->view('seller/profile_2',$msg);	
	}else{
	$this->index();		
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function update_seller_details()
{
	if($this->is_login()){
	$posts = $this->input->post();
	$user_id = $this->input->post('user_id');
	if(!empty($user_id)){
	$get_seller_availability_type = $this->input->post('seller_availability_type');
	$get_seller_availability_time = $this->input->post('seller_availability_time');
	$get_seller_availability_amount = $this->input->post('seller_availability_amount');
	$get_seller_description = $this->input->post('seller_description');	
	$data = array(
		'seller_availability_type'=> $get_seller_availability_type,
		'seller_availability_time'=> $get_seller_availability_time,
		'seller_availability_amount'=> $get_seller_availability_amount,
		'seller_description' => $get_seller_description
	);
	$this->status = $this->sellers->seller_update_data(TBL_SELLER,$data,'id',$user_id);
	if($this->status != false){
	unset($posts);	
	$this->seller_view_profile_two();		
	}else{
	$this->index();		
	}
	}else{
	unset($posts);	
	$this->seller_view_profile_two();
	}
	}else{
	$this->index();		
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function profile_picture()
{
	if(!empty($_FILES)){
	$id = $this->input->post('user_id');
	$preFix = time();
	$targetDir = "upload/";
	$fileName = $preFix.'_'.$_FILES['file']['name'];
	$targetFile = $targetDir.$fileName;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
	$data = array(
		"seller_profile_pic"  => $fileName,
	);		
	$this->status = $this->sellers->seller_update_profile($id,$data);
	}
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function seller_view_job_one()
{
	if($this->is_login()){
	$this->load->view('seller/job_one');
	}else{
	$this->index();		
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	


/* ========================================================================================= */	
/* =============================== */	
/* ========================================================================================= */	
}

