<?php
// THE MESSAGE HELPER SECTION 
function message_display($msgKey){
	$array_msg = array(
			
			"invalid-login"           => 'Wrong username and password',
			"insert"                  => 'The Data Has Been Successfully Insert',
			"update"                  => 'The Data Has Been Successfully Update',
			"password-change"         => 'Password Has Been Updated Successfully',
			"delete"                  => 'The Data Has Been Successfully Deleted',
			"uprequired"              => 'Username And Password Filds Required',
			"sorry"                   => 'Sorry !! Something Went Wrong. Try After Some Time',
			"user-exsit"              => 'OPPS !! the email id already exsit.',
			"user-created"            => 'The user successfully created',
			"old-password-not-match"  => 'Old Password did not match',
	);	
	foreach($array_msg as $key=>$value){
	if($key == $msgKey){
	$msgData = $value;
	break;		
	}
	}
	return $msgData;

}
// THE MESSAGE HELPER SECTION 
?>