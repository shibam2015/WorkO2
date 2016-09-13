<script type="text/javascript">
// JavaScript Document
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Image Scaler
$(function(){
  $('#finish').hide();
  $('#seller_reg2').hide();	
  $(".scale").imageScale({ 
  rescaleOnResize: true
});
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function()
{
	$("#next").click(function(){
	var output = validate();
	if(output) {
	jQuery('#signup').modal('hide');
	jQuery('#signup2').modal('show');					
	}
	});
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*2nd Step*/
$(function()
{
	$('#finish').click(function(){
	var captcha_response = grecaptcha.getResponse();		
	if(!($("#user-password").val())) {
	$("#password-error").html("Password required!");
	return false;
	}else{$("#password-error").html("");}	
	if(!($("#confirm-password").val())) {		
	$("#confirm-password-error").html("Confirm password required!");
	return false;
	}else {$("#confirm-password-error").html(" ");	}
	if($("#user-password").val() != $("#confirm-password").val()) {
	$("#confirm-password-error").html("Password not matched!");
	return false;
	}	
	if(captcha_response.length == 0){
	$("#captcha-password-error").html("Checked Captcha");
	return false;
	}else{
	$('#tel').val($('#mobile-number').val())
	jQuery('#signup2').modal('hide');
	jQuery('#signup3').modal('show');			
	}
	});
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function phoneNoContinue(e)
{
	var number = e;
	if(number == null || number == ""){ 
	$('#finish').hide();
	$('#tfinishp').show();
	}else{
	$('#finish').show();
	$('#tfinishp').hide();
	}
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*3rd Step*/
$(function() 
{
	$('#tfinishp').click(function(){
	var captcha_response = grecaptcha.getResponse();		
	if(!($("#user-password").val())) {
	$("#password-error").html("Password required!");
	return false;
	}else{$("#password-error").html("");}	
	if(!($("#confirm-password").val())) {		
	$("#confirm-password-error").html("Confirm password required!");
	return false;
	}else {$("#confirm-password-error").html(" ");	}
	if($("#user-password").val() != $("#confirm-password").val()) {
	$("#confirm-password-error").html("Password not matched!");
	return false;
	}	
	if(captcha_response.length == 0)
	{
	$("#captcha-password-error").html("Checked Captcha");
	return false;
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('user/buyers_reg'); ?>",
	data: 'email='+ $('#email').val()+'&password='+ $('#user-password').val(),
	success: function (res) {					 
	if(res=='Success'){
	jQuery('#signup').modal('hide');
	jQuery('#signup2').modal('show');
	jQuery('#signup3').modal('hide');
	jQuery('#sssmsg').css('display','block');
	jQuery('#sssmsg').html('Thank you for registering');						 
	setTimeout(function(){$('#signup2').modal('hide')},3000);						 
	}else{
	jQuery('#signup2').modal('hide');
	jQuery('#signup3').modal('hide');
	jQuery('#signup').modal('show');
	jQuery('#signmsg').css('display','block');
	jQuery('#signmsg').html('Record Alreay Exists');
	}
	}
	});			
	}
	});
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*3rd Step*/
$(function() 
{
	$('#tfinish').click(function(){
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('user/buyers_reg'); ?>",
	data: 'email='+ $('#email').val()+'&password='+ $('#user-password').val()+'&tel='+$('#tel').val(),
	success: function (res) {					 
	if(res=='Success'){
	jQuery('#signup').modal('hide');
	jQuery('#signup2').modal('hide');
	jQuery('#signup3').modal('show');
	jQuery('#ssmsg').css('display','block');
	jQuery('#ssmsg').html('Thank you for registering');						 
	setTimeout(function(){$('#signup3').modal('hide')},3000);						 
	}else{
	jQuery('#signup2').modal('hide');
	jQuery('#signup3').modal('hide');
	jQuery('#signup').modal('show');
	jQuery('#signmsg').css('display','block');
	jQuery('#signmsg').html('Record Alreay Exists');
	}
	}
	});		
	});
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function validate()
{
	var output = '';
	$(".signup-error").html('');
	if(!($("#email").val())) {
	output = false;
	$("#email-error").html("Email required!");
	}else{
	output = true;
	}	
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
	$("#email-error").html("Invalid Email!");
	output = false;
	}	
	if(!($("#conf-email").val())) {
	output = false;
	$("#confirm-email-error").html("Confirm Email required!");
	}else{
	output = true;
	}	
	if(!$("#conf-email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
	$("#confirm-email-error").html("Invalid Email!");
	output = false;
	}
	if($("#email").val() !=$("#conf-email").val())
	{
	output = false;
	$("#confirm-email-error").html("Emai Id not matched!");
	}        
	return output;
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var login = function(){
	if(!($("#login-email").val())) {		
	$("#email-lerror").html("Email required!");
	return false;
	}		
	if(!$("#login-email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
	$("#email-lerror").html("Invalid Email!");
	return false;
	}
	if($("#login-email").val().length > 0)
	{
	$("#email-lerror").html("");
	}
	if(!($("#login-password").val())) {			
	$("#password-lerror").html("Password required!");
	return false;
	}else{
	jQuery.ajax({
	type: "POST",
	url:  "<?php echo site_url('user/buyers_login'); ?>",
	data: 'email='+ $('#login-email').val()+'&password='+ $('#login-password').val(),
	success: function (res) {		
	if(res == 'Fail'){
	jQuery('#login').modal('show');
	jQuery('#logmsg').css('display','block');
	jQuery('#logmsg').html('OPPS ! Wrong Username Or Password');
	}else{
	window.location.href = '<?php echo site_url('user'); ?>'	
	}
	}
	}); 
	}
		
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
var sellerRegister1 = function()
{
	
	var seller_uname    =  document.getElementById('seller_username').value ;
	var seller_email    =  document.getElementById('seller_email').value ;
	var seller_phone    =  document.getElementById('seller_phone').value ;
	
	if (seller_uname == null || seller_uname == ""){
	document.getElementById('error_seller_username').innerHTML = 'Username is required'; 
	return false;
	}else{
	document.getElementById('error_seller_username').innerHTML = ''; 	
	if (seller_email == null || seller_email == "" || !seller_email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
	document.getElementById('error_seller_email').innerHTML = 'Please enter a valid Email Id'; 
	return false;
	}else{
	document.getElementById('error_seller_email').innerHTML = '';	
	if (seller_phone == null || seller_phone == ""){
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/seller_reg'); ?>",
	data: 'email='+ seller_email +'&username='+ seller_uname,
	success: function (res) {
	document.getElementById('error_seller_phone').innerHTML = res; 			
	}
	}); 	
	}else{
	document.getElementById('seller_reg1').style.display = 'none' ;
	document.getElementById('seller_reg2').style.display = 'block' ;
	}
	}
	}
//END	
} 
 
var sellerRegister45 = function()
{
	
	var seller_name      =  document.getElementById('seller_name').value ;
	var seller_email     =  document.getElementById('seller_email').value ;
	var seller_password  =  document.getElementById('seller_password').value ;
	var seller_cpassword =  document.getElementById('seller_cpassword').value ;	
	
	if (seller_name == null || seller_name == "") {
	document.getElementById('error_seller_name').innerHTML = 'Name is required'; 
	return false;
	}else{
	document.getElementById('error_seller_name').innerHTML = ''; 	
	if (seller_email == null || seller_email == "" || !seller_email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
	document.getElementById('error_seller_email').innerHTML = 'Please enter a valid Email Id'; 
	return false;
	}else{
	document.getElementById('error_seller_email').innerHTML = '';	
	if (seller_password == null || seller_password == ""){
	document.getElementById('error_seller_password').innerHTML = 'Password is required'; 
	return false;
	}else{
	document.getElementById('error_seller_password').innerHTML = ''; 	
	if (seller_cpassword == null || seller_cpassword == ""){
	document.getElementById('error_seller_cpassword').innerHTML = 'Confirm password is required'; 
	return false;
	}else{
	document.getElementById('error_seller_cpassword').innerHTML = ''; 	
	if (seller_cpassword != seller_password){
	document.getElementById('error_seller_cpassword').innerHTML = 'Both password should match'; 
	return false;
	}else{
	document.getElementById('error_seller_cpassword').innerHTML = ''; 	
	}
	} 
	}
	} 
	}
//END	
}
</script>
