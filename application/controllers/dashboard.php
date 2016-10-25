<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{
//=============================================================
private $status = '';
private $data = '';
private $session_details = ''; 
private $get_data_single = '';
private $get_return = '';
//=============================================================

/*=======================================================
| Construct Methord
========================================================*/
public function __construct()
{
	parent::__construct();
	
	//__LODING THE MODEL
	$this->load->model('dashboards');	
	
	$this->session_details = $this->session->all_userdata();
	if(!isset($this->session_details['admin_login']) and $this->session_details['admin_login'] != 'YES'){
	redirect('admin');
	}
}
/*=======================================================
| Index Methord
========================================================*/
public function index()
{
	$this->load->view('admin/dashboard');	
}
/*=======================================================
| Redirect Methord
========================================================*/
public function redirectToDashboard()
{
	redirect('dashboard','refresh');
}
/*=======================================================
|
========================================================*/
public function my_profile($id='',$custome_msg = '')
{
	if(!empty($id)){
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->get_my_profile_data($id);
	$msg['data'] = $this->data;
	$this->load->view('admin/profile',$msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function change_password($id='',$custome_msg = '')
{
	if(!empty($id)){
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->get_my_profile_data($id);
	$msg['data'] = $this->data;
	$this->load->view('admin/chanage-password',$msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function setting($id='',$custome_msg = '')
{
	if(!empty($id)){
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->get_my_setting_data($id);
	$msg['data'] = $this->data;
	$this->load->view('admin/setting',$msg);
	}else{
	$this->redirectToDashboard();
	}
}
/*=======================================================
|
========================================================*/
public function my_setting_update($id='')
{
	if(!empty($id)){
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	$this->status = $this->dashboards->setting_update($data,$id);
	$custome_msg = message_display('update');
	}else{
	$custome_msg = '';
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->setting($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function my_profile_update($id='')
{
	if(!empty($id)){
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->profile_update($data,$id);
	$custome_msg = message_display('update');
	$this->my_profile($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function my_password_update($id='')
{
	if(!empty($id)){
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(!empty($data['old_password_db']) and !empty($data['old_password'])){
	if($data['old_password_db'] == md5($data['old_password'])){
	$this->status = $this->dashboards->password_update($data,$id);
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('old-password-not-match');
	}
	}else{
	$custome_msg = '';
	}
	$this->change_password($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function view_list_page($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all_p();
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-page',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_page($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-page',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_page($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single_p($id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-page', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_page()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->create_p($data);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_page($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_page($id)
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;				
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update_p($id,$data);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_page($id,$custome_msg);
}
/*=======================================================
|
========================================================*/
public function delete_page($id)
{
	$this->get_return = $this->dashboards->delete_p($id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_page($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_page($custom_msg);
	}
}
//=======================================================
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

/*=======================================================
|IWTW
========================================================*/
public function view_list_iwtw($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_WANT_TO_WORK);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-iwtw',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_iwtw($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-iwtw',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_iwtw($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_WANT_TO_WORK,'id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-iwtw', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_iwtw()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->insert(TBL_WANT_TO_WORK,$data,$data['dropdown_value']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_iwtw($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_iwtw($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('dropdown_value');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"dropdown_value" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_WANT_TO_WORK,$data,'id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_iwtw($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_iwtw($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_WANT_TO_WORK,'id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_iwtw($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_iwtw($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}

/*=======================================================
|ICW
========================================================*/
public function view_list_icw($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_CAN_WORK);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-icw',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_icw($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-icw',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_icw($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_CAN_WORK,'id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-icw', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_icw()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->insert(TBL_CAN_WORK,$data,$data['dropdown_value']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_icw($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_icw($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('dropdown_value');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"dropdown_value" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_CAN_WORK,$data,'id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_icw($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_icw($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_CAN_WORK,'id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_icw($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_icw($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}

//=======================================================
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

/*=======================================================
|IWLTE
========================================================*/
public function view_list_iwlte($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_LIKE_EARN);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-iwlte',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_iwlte($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-iwlte',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_iwlte($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_LIKE_EARN,'id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-iwlte', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_iwlte()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->insert(TBL_LIKE_EARN,$data,$data['dropdown_value']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_iwlte($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_iwlte($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('dropdown_value');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"dropdown_value" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_LIKE_EARN,$data,'id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_iwlte($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_iwlte($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_LIKE_EARN,'id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_iwlte($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_iwlte($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}


/*=======================================================
|LL
========================================================*/
public function view_list_ll($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_LIKE_LEVEL);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-ll',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_ll($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-ll',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_ll($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_LIKE_LEVEL,'id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-ll', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_ll()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->insert(TBL_LIKE_LEVEL,$data,$data['dropdown_value']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_ll($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_ll($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('dropdown_value');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"dropdown_value" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_LIKE_LEVEL,$data,'id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_ll($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_ll($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_LIKE_LEVEL,'id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_ll($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_ll($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}

/*=======================================================
|EL
========================================================*/
public function view_list_el($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_EXP_LEVEL);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-el',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_el($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-el',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_el($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_EXP_LEVEL,'id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-el', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_el()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->insert(TBL_EXP_LEVEL,$data,$data['dropdown_value']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_el($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_el($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('dropdown_value');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"dropdown_value" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_EXP_LEVEL,$data,'id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_el($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_el($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_EXP_LEVEL,'id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_el($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_el($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}

/*=======================================================
|TITLE LEVEL
========================================================*/
public function view_list_title($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_TITLE);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-title',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_title($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-title',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_title($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_TITLE,'id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-title', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_title()
{
	$data = array();
	$this->data  = $this->input->post();
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	if(count($this->data) > 1)
	{
	foreach($this->data as $key => $val)
	{
		$data[$key] = $val;
	}
	}
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->insert(TBL_TITLE,$data,$data['dropdown_value']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_title($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_title($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('dropdown_value');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"dropdown_value" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_TITLE,$data,'id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_title($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_title($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_TITLE,'id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_title($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_title($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}


/*=======================================================
|CATEGORY 
========================================================*/
public function view_list_jobc($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_JOB_CATEGORY);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-jobc',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_jobc($custome_msg = '')
{
	if(!empty($custome_msg))
	$msg['msg'] = $custome_msg;
	else
	$msg = '';
	
	$this->load->view('admin/create-jobc',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_jobc($id='',$custom_msg = '')
{
	if(!empty($id)){
	if (!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_JOB_CATEGORY,'category_id',$id);
	$msg['data'] = $this->get_data_single;
	$this -> load -> view('admin/edit-jobc', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_jobc()
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
	$this->status = $this->dashboards->insert(TBL_JOB_CATEGORY,$data,$data['category_name']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_jobc($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_jobc($id='')
{
	if(!empty($id)){
	//$data = array();
	$this->data  = $this->input->post('category_name');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"category_name" => $this->data,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_JOB_CATEGORY,$data,'category_id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_jobc($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_jobc($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_JOB_CATEGORY,'category_id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_jobc($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_jobc($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}

/*=======================================================
|SUBCATEGORY 
========================================================*/
public function view_list_jobsc($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	$this->data = $this->dashboards->select_all(TBL_JOB_SUBCATEGORY);
	$msg['data'] = $this->data;	
	$this->load->view('admin/list-jobsc',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_create_jobsc($custome_msg = '')
{
	if(!empty($custome_msg)){
	$msg['msg'] = $custome_msg;
	}
	
	$this->data = $this->dashboards->select_all(TBL_JOB_CATEGORY);
	$msg['data'] = $this->data;	
	$this->load->view('admin/create-jobsc',$msg);	
}
/*=======================================================
|
========================================================*/
public function view_edit_jobsc($id='',$custom_msg = '')
{
	if(!empty($id)){
	if(!empty($custom_msg)){
	$msg['msg'] = $custom_msg;
	}
	$this->get_data_single = $this -> dashboards -> select_single(TBL_JOB_SUBCATEGORY,'subcategory_id',$id);
	$msg['data'] = $this->get_data_single;
	$this->data = $this->dashboards->select_all(TBL_JOB_CATEGORY);
	$msg['category'] = $this->data;	
	$this -> load -> view('admin/edit-jobsc', $msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function create_jobsc()
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
	$this->status = $this->dashboards->insert(TBL_JOB_SUBCATEGORY,$data,$data['subcategory_name']);
	if($this->status != 0){
	$custome_msg = message_display('insert');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_create_jobsc($custome_msg);
}
/*=======================================================
|
========================================================*/
public function update_jobsc($id='')
{
	if(!empty($id)){
	//$data = array();
	$subcategory_name  = $this->input->post('subcategory_name');
	$category_id       = $this->input->post('category_id_FK');
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$data = array(
		"subcategory_name" => $subcategory_name,
		"category_id_FK" => $category_id,
	);
	//GENERATING THE DYNAMIC ARRAY FROM THE POST 
	$this->status = $this->dashboards->update(TBL_JOB_SUBCATEGORY,$data,'subcategory_id',$id);
	if($this->status){
	$custome_msg = message_display('update');
	}else{
	$custome_msg = message_display('sorry');	
	}
	$this->view_edit_jobsc($id,$custome_msg);
	}else{
	$this->redirectToDashboard();	
	}
}
/*=======================================================
|
========================================================*/
public function delete_jobsc($id='')
{
	if(!empty($id)){
	$this->get_return = $this->dashboards->delete(TBL_JOB_SUBCATEGORY,'subcategory_id',$id);
	if ($this->get_return == true) {
	$custom_msg = message_display('delete');
	$this -> view_list_jobsc($custom_msg);
	} else {
	$custom_msg = message_display('sorry');
	$this -> view_list_jobsc($custom_msg);
	}
	}else{
	$this->redirectToDashboard();	
	}
}

//=======================================================
//=+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
//CLASS END	 
}
