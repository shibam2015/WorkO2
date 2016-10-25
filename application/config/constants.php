<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| MY DEFINE
|--------------------------------------------------------------------------
|
*/

//================================================================
define('ADMIN_TITLE',   'WORKO2 ADMIN');
define('SITE_TITLE',    'WORKO2');
//================================================================

define('TBL_ADMIN',                    'work_admin');
define('TBL_SETTING',                  'work_setting');
define('TBL_PAGE',                     'work_page');
define('TBL_USER',                     'work_users');
define('TBL_SELLER',                   'work_seller');
define('TBL_SELLER_SKILL',             'work_seller_skill');
define('TBL_SELLER_EDUCATION',         'work_seller_education');
define('TBL_SELLER_CERTIFICATE',       'work_seller_certification');
define('TBL_SELLER_PORTFOLIO',         'work_seller_portfolio');
define('TBL_SELLER_LANGUAGE',          'work_seller_language');

define('TBL_WANT_TO_WORK',             'work_want_to_work');
define('TBL_CAN_WORK',                 'work_can_work');
define('TBL_LIKE_EARN',                'work_like_earn');
define('TBL_LIKE_LEVEL',               'work_language_level');
define('TBL_EXP_LEVEL',                'work_expreance_level');
define('TBL_TITLE',                    'work_title');

define('TBL_GIG',          			   'work_gig');
define('TBL_GIG_FAQ',                  'work_gig_faq');
define('TBL_GIG_PRICING',              'work_gig_pricing');
define('TBL_JOB_CATEGORY',             'work_gig_category');
define('TBL_JOB_SUBCATEGORY',          'work_gig_subcategory');


/* End of file constants.php */
/* Location: ./application/config/constants.php */