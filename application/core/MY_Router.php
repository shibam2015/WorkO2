<?php
defined('BASEPATH') || exit('No direct script access allowed');
class MY_Router extends CI_Router 
{
	
// CHNAGING THE LINK FROM _ TO - eg: view_list_request to view-list-request STRAT
public function _set_request ($seg = array())
{
	// The str_replace() below goes through all our segments
	// and replaces the hyphens with underscores making it
	// possible to use hyphens in controllers, folder names and
	// function names
	parent::_set_request(str_replace('-', '_', $seg));
}
// CHNAGING THE LINK FROM _ TO - eg: view_list_request to view-list-request END

}
?>