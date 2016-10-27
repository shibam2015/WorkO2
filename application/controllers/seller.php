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
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
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
	$msg['data']         = $this->sellers->get_seller_details($session_details['seller_details'][0]['id']);	
	$msg['languages']    = $this->sellers->select_join_language_level($session_details['seller_details'][0]['id']);
	$msg['skills']       = $this->sellers->select_join_expreance_level($session_details['seller_details'][0]['id']);
	$msg['educations']   = $this->sellers->select_with_where(TBL_SELLER_EDUCATION,'user_id',$session_details['seller_details'][0]['id']);
	$msg['certificates'] = $this->sellers->select_with_where(TBL_SELLER_CERTIFICATE,'user_id',$session_details['seller_details'][0]['id']);
	$msg['portfolios']   = $this->sellers->select_with_where(TBL_SELLER_PORTFOLIO,'user_id',$session_details['seller_details'][0]['id']);
	$msg['iwtw_l']       = $this->dashboards->select_all(TBL_WANT_TO_WORK);
	$msg['icw_l']        = $this->dashboards->select_all(TBL_CAN_WORK);
	$msg['iwlte_l']      = $this->dashboards->select_all(TBL_LIKE_EARN);
	$msg['lang_l']       = $this->dashboards->select_all(TBL_LIKE_LEVEL);
	$msg['exp_l']        = $this->dashboards->select_all(TBL_EXP_LEVEL);
	$msg['title_l']      = $this->dashboards->select_all(TBL_TITLE);
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
	$data = array ("seller_description" => $this->input->post('seller_description'));
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
	$data = array ("seller_availability" =>$this->input->post('seller_availability'));
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
	"user_id"               => $this->input->post('id'),
	"seller_language"       => $this->input->post('language_name'),
	"seller_language_level" => $this->input->post('language_type'),
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
public function data_calling()
{
	$session_details = $this->session->all_userdata();	
	$get_type = $this->input->post('type');
	if($get_type == 'Language')
	{
	$languages = array();	
	$languages = $this->sellers->select_join_language_level($session_details['seller_details'][0]['id']);
    if(count($languages) > 0){
    foreach($languages as $language){	
    ?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $language['seller_language']; ?></div>
    <div class="table-data2 header-col"><?php echo $language['dropdown_value']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataLanguage('<?php echo $language['id']; ?>','Language','<?php echo $language['seller_language']; ?>','<?php echo $language['seller_language_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $language['id']; ?>','Language')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <?php
    }
    }
	}else{
	if($get_type == 'Skill'){
    $skills = array();	
	$skills = $this->sellers->select_join_expreance_level($session_details['seller_details'][0]['id']);
	if(count($skills) > 0){
	foreach($skills as $skill){	
    ?>
    <div class="table-row1">
    <div class="table-data2 header-col"><?php echo $skill['seller_skill']; ?></div>
    <div class="table-data2 header-col"><?php echo $skill['dropdown_value']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataSkill('<?php echo $skill['id']; ?>','Skill','<?php echo $skill['seller_skill']; ?>','<?php echo $skill['seller_skill_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $skill['id']; ?>','Skill')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
    </ul>
    </div>
    </div>
    </div>
    <?php
    }
    }
	}else{
	if($get_type == 'Education'){
	$educations = array();	
	$educations = $this->sellers->select_with_where(TBL_SELLER_EDUCATION,'user_id',$session_details['seller_details'][0]['id']);
	if(count($educations) > 0){
	foreach($educations as $education){	
	?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $education['seller_edu_degree']; ?></div>
    <div class="table-data2 header-col"><?php echo $education['seller_edu_from'].'-'.$education['seller_edu_to']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataEducation('<?php echo $education['id']; ?>','Education','<?php echo $education['seller_edu_country']; ?>','<?php echo $education['seller_edu_collage_name']; ?>','<?php echo $education['seller_edu_title']; ?>','<?php echo $education['seller_edu_degree']; ?>','<?php echo $education['seller_edu_from']; ?>','<?php echo $education['seller_edu_to']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $education['id']; ?>','Education')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
    </ul>
    </div>
    </div>
    </div>
	<?php
	}
	}
	}else{
	if($get_type == 'Certificate'){
	$certificates = array();	
	$certificates = $this->sellers->select_with_where(TBL_SELLER_CERTIFICATE,'user_id',$session_details['seller_details'][0]['id']);	
	if(count($certificates) > 0){
	foreach($certificates as $certificate){	
	?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $certificate['seller_cerified']; ?></div>
    <div class="table-data2 header-col"><?php echo $certificate['seller_cerified_year']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataCertificate('<?php echo $certificate['id']; ?>','Certificate','<?php echo $certificate['seller_cerified']; ?>','<?php echo $certificate['seller_cerified_from']; ?>','<?php echo $certificate['seller_cerified_year']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $certificate['id']; ?>','Certificate')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
	<?php
	}
	}
    }else{
	if($get_type == 'Portfolio'){
	$portfolios = array();	
	$portfolios = $this->sellers->select_with_where(TBL_SELLER_PORTFOLIO,'user_id',$session_details['seller_details'][0]['id']);		
	if(count($portfolios) > 0){
	foreach($portfolios as $portfolio){	
	?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $portfolio['seller_profile_web']; ?></div>
    <div class="table-data2 header-col"><?php echo $portfolio['seller_profile_web_link']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataPortfolio('<?php echo $portfolio['id']; ?>','Portfolio','<?php echo $portfolio['seller_profile_web']; ?>','<?php echo $portfolio['seller_profile_web_link']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $portfolio['id']; ?>','Portfolio')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
	<?php
	}
	}
	}
	}
	}
	}	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function data_fetch()
{
	$session_details = $this->session->all_userdata();	
	$get_type = $this->input->post('type');
	if($get_type == 'Language')
	{
	$languages = array();	
	$languages = $this->sellers->select_join_language_level($session_details['seller_details'][0]['id']);
    if(count($languages) > 0){
    foreach($languages as $language){	
    ?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $language['seller_language']; ?></div>
    <div class="table-data2 header-col"><?php echo $language['dropdown_value']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataLanguage('<?php echo $language['id']; ?>','Language2','<?php echo $language['seller_language']; ?>','<?php echo $language['seller_language_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $language['id']; ?>','Language')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <?php
    }
    }
	}else{
	if($get_type == 'Skill'){
    $skills = array();	
	$skills = $this->sellers->select_join_expreance_level($session_details['seller_details'][0]['id']);
	if(count($skills) > 0){
	foreach($skills as $skill){	
    ?>
    <div class="table-row1">
    <div class="table-data2 header-col"><?php echo $skill['seller_skill']; ?></div>
    <div class="table-data2 header-col"><?php echo $skill['dropdown_value']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataSkill('<?php echo $skill['id']; ?>','Skill2','<?php echo $skill['seller_skill']; ?>','<?php echo $skill['seller_skill_level']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $skill['id']; ?>','Skill')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
    </ul>
    </div>
    </div>
    </div>
    <?php
    }
    }
	}else{
	if($get_type == 'Education'){
	$educations = array();	
	$educations = $this->sellers->select_with_where(TBL_SELLER_EDUCATION,'user_id',$session_details['seller_details'][0]['id']);
	if(count($educations) > 0){
	foreach($educations as $education){	
	?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $education['seller_edu_degree']; ?></div>
    <div class="table-data2 header-col"><?php echo $education['seller_edu_from'].'-'.$education['seller_edu_to']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataEducation('<?php echo $education['id']; ?>','Education2','<?php echo $education['seller_edu_country']; ?>','<?php echo $education['seller_edu_collage_name']; ?>','<?php echo $education['seller_edu_title']; ?>','<?php echo $education['seller_edu_degree']; ?>','<?php echo $education['seller_edu_from']; ?>','<?php echo $education['seller_edu_to']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $education['id']; ?>','Education')"><i class="fa fa-trash" aria-hidden="true"></i></a><li>
    </ul>
    </div>
    </div>
    </div>
	<?php
	}
	}
	}else{
	if($get_type == 'Certificate'){
	$certificates = array();	
	$certificates = $this->sellers->select_with_where(TBL_SELLER_CERTIFICATE,'user_id',$session_details['seller_details'][0]['id']);	
	if(count($certificates) > 0){
	foreach($certificates as $certificate){	
	?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $certificate['seller_cerified']; ?></div>
    <div class="table-data2 header-col"><?php echo $certificate['seller_cerified_year']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataCertificate('<?php echo $certificate['id']; ?>','Certificate2','<?php echo $certificate['seller_cerified']; ?>','<?php echo $certificate['seller_cerified_from']; ?>','<?php echo $certificate['seller_cerified_year']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a><li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $certificate['id']; ?>','Certificate')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
	<?php
	}
	}
    }else{
	if($get_type == 'Portfolio'){
	$portfolios = array();	
	$portfolios = $this->sellers->select_with_where(TBL_SELLER_PORTFOLIO,'user_id',$session_details['seller_details'][0]['id']);		
	if(count($portfolios) > 0){
	foreach($portfolios as $portfolio){	
	?>
	<div class="table-row1">
    <div class="table-data2 header-col"><?php echo $portfolio['seller_profile_web']; ?></div>
    <div class="table-data2 header-col"><?php echo $portfolio['seller_profile_web_link']; ?></div>
    <div class="table-data2 data-col">
    <div class="table-icon">
    <ul>
    <li><a href="javascript:void(0)" onClick="editDataPortfolio('<?php echo $portfolio['id']; ?>','Portfolio2','<?php echo $portfolio['seller_profile_web']; ?>','<?php echo $portfolio['seller_profile_web_link']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onClick="deleteData('<?php echo $portfolio['id']; ?>','Portfolio')"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
	<?php
	}
	}
	}
	}
	}
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
	$session_details    = $this->session->all_userdata();		
	$msg['data']        = $this->sellers->get_seller_details($session_details['seller_details'][0]['id']);	
	$msg['languages']   = $this->sellers->select_join_language_level($session_details['seller_details'][0]['id']);
	$msg['skills']      = $this->sellers->select_join_expreance_level($session_details['seller_details'][0]['id']);
	$msg['educations']  = $this->sellers->select_with_where(TBL_SELLER_EDUCATION,'user_id',$session_details['seller_details'][0]['id']);
	$msg['certificates']= $this->sellers->select_with_where(TBL_SELLER_CERTIFICATE,'user_id',$session_details['seller_details'][0]['id']);
	$msg['portfolios']  = $this->sellers->select_with_where(TBL_SELLER_PORTFOLIO,'user_id',$session_details['seller_details'][0]['id']);
	$msg['iwtw_l']      = $this->dashboards->select_all(TBL_WANT_TO_WORK);
	$msg['icw_l']       = $this->dashboards->select_all(TBL_CAN_WORK);
	$msg['iwlte_l']     = $this->dashboards->select_all(TBL_LIKE_EARN);
	$msg['lang_l']      = $this->dashboards->select_all(TBL_LIKE_LEVEL);
	$msg['exp_l']       = $this->dashboards->select_all(TBL_EXP_LEVEL);
	$msg['title_l']     = $this->dashboards->select_all(TBL_TITLE);
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
public function get_subcategory()
{
	$get_cate_id = $this->input->post('getVal');
	$this->data = $this -> dashboards -> select_single(TBL_JOB_SUBCATEGORY,'category_id_FK',$get_cate_id);
	foreach($this->data as $option){
	echo '<option value='.$option['subcategory_id'].'>'.$option['subcategory_name'].'</option>'; 	
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function seller_view_job_one($id='')
{
	if($this->is_login()){
	if(!empty($id)){
	$msg['data'] = $this -> dashboards -> select_single(TBL_GIG,'gig_id',$id);
	}	
	$msg['category'] = $this->dashboards->select_all(TBL_JOB_CATEGORY);
	$this->load->view('seller/job_one',$msg);
	}else{
	$this->index();		
	}
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */	
public function job_one($id= '')
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) >= 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(!empty($id)){
	$this->status = $this->dashboards->update(TBL_GIG,$data,'gig_id',$id);
	$return_id = $id;
	}else{
	$get_return = $this->sellers->checked_gig_one($data);
	if($get_return == false){
	$this->status = $this->dashboards->insert(TBL_GIG,$data,$data['gig_title']);
	$return_id = $this->status;
	}else{
	$return_id = $get_return[0]['gig_id'];	
	}
	}
	if($this->status != 0){
	$return_id = $return_id;
	}else{
	$return_id = $return_id;
	}
	$this->seller_view_job_two($return_id);
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_view_job_two($id='')
{
	if($this->is_login()){
	$msg['id'] = $id;	
	$msg['data'] = $this -> dashboards -> select_single(TBL_GIG_PRICING,'gig_id',$id);		
	$this->load->view('seller/job_two',$msg);
	}else{
	$this->index();		
	}	
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function job_two()
{
	$get_id = $this->input->post('gig_id');
	$get_title = $this->input->post('package_name');
	$get_description = $this->input->post('package_description');
	$get_days = $this->input->post('package_revisions');
	$get_price = $this->input->post('package_price');
	for($i = 0; $i < count($get_title); $i++) {
	if((!empty($get_title[$i])) and (!empty($get_title[$i]))){	
	$data[] = array(
		'gig_id' => $get_id,
		'package_name' => $get_title[$i],
		'package_description' => $get_description[$i],
		'package_revisions' => $get_days[$i],
		'package_price' => $get_price[$i],
	);
	}
	}
	$this->dashboards->update_batch_data(TBL_GIG_PRICING,$data,'gig_id',$get_id);
	$this->seller_view_job_three($get_id);
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function seller_view_job_three($id='')
{
	if($this->is_login()){
	$msg['id'] = $id;			
	$this->load->view('seller/job_three',$msg);
	}else{
	$this->index();		
	}	
}
/* ==+++++++++++++++++++++++++++++++++++++++++++++++== */
/* ========================================================================================= */
public function job_three()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) >= 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	$this->status = $this->dashboards->insert(TBL_GIG_FAQ,$data,$data['gig_id']);
	if($this->status != 0){
	echo 'Success';	
	}else{
	echo 'Fail';	
	}	
	
}

/* ========================================================================================= */	
/* ========================================================================================= */	
}

