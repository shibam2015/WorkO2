<?php
// TH CUSTOME HELPER
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// THE ECHO FUNCTION
function _e($value='')
{
	echo $value;
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// THE PRINT FUNCTION
function __print($value='')
{
	print $value;
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// THE PRINT R FUNCTION
function __printr($value='')
{
	print_r($value);
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// THE PRINT R PRE FUNCTION
function __printr_pre($value='')
{
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// THE STATUS FUNCTION
function _status($value='')
{
	if($value == 1){
	echo '<span class="label label-sm label-success">Active</span>';
	}else{
	echo '<span class="label label-sm label-danger">Inactive</span>';
	}
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function _duration($value='')
{
	if($value == 1){
	echo '<span class="label label-sm label-success">Fortnightly</span>';
	}elseif($value == 2){
	echo '<span class="label label-sm label-info">Weekly</span>';
	}elseif($value == 3){
	echo '<span class="label label-sm label-warning">Montly</span>';
	}elseif($value == 4){
	echo '<span class="label label-sm label-danger">Half yearly</span>';
	}elseif($value == 5){
	echo '<span class="label label-sm label-success">Yearly</span>';
	}
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// THE STATUS FUNCTION
function __page_name($value='')
{
	 $exp_arry_page = explode('/',$value);
	 return $exp_arry_page[1];
}
// THE STATUS FUNCTION
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function _explode($delimiter,$value='')
{
	return $exp_arry = explode($delimiter,$value);
}
// THE STATUS FUNCTION
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>