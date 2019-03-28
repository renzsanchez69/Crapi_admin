<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| Custom Constants (added by CI Bootstrap)
|--------------------------------------------------------------------------
| Constants to be used in both Frontend and other modules
|
*/

define('UPLOADS_DIR',	'assets/uploads/');
define('IMAGES_DIR',	'assets/images/');
define('LOGO_DIR', 'assets/images/logo.png');
define('ICON_DIR', 'assets/images/logo.ico');

// - NEXMO Settings
define('NEXMO_API_KEY', 'b158e99b');
define('NEXMO_API_SECRET', 'Z1HiKfXZ6LTQpg6w');
define('NEXMO_FROM', 'CEBU2CEBU');

// - gender 
define('GENDER_MALE', 'male');
define('GENDER_FEMALE', 'female');
define('GENDER_SELECTION', serialize(array('' => '---', 'male' => 'Male', 'female' => 'Female')));

define('ROLE_USER', 'user');
define('ROLE_SELLER', 'seller');
define('ROLE_ADMIN', 'admin');

// - user status 
define('USER_ACTIVE', 1);
define('USER_STOP', 2);
define('USER_STATUS_SELECTION', serialize(array('' => '---', 1 => 'Active', 2 => 'Deactivated')));

// - ajax response status
define('REQUEST_RESULT_OK', 'OK');
define('REQUEST_RESULT_NG', 'NG');

// - properties status 
define('POST_STATUS_PENDING', 'pending');
define('POST_STATUS_APPROVED', 'approved');
define('POST_STATUS_REJECTED', 'rejected');
define('POST_STATUS_SELECTION', serialize(
	array(
		'' => '---', 
		'pending' => 'Pending',
		'approved' => 'Approved',
		'rejected' => 'Rejected'
	))
);

// - properties is sold 
define('IS_SOLD_FALSE', 0);
define('IS_SOLD_TRUE', 1);
define('IS_SOLD_SELECTION', serialize(
	array(
		'' => '---',
		1 => 'Sold',
		0 => 'Not Sold'
	))
);

// - property type
define('PROPERTY_TYPE_SELECTION', serialize(
	array(
		'' => '---', 
		'house' => 'House',
		'townhouse' => 'Townhouse',
		'condo' => 'Condo',
		'apartment' => 'Apartment',
		'lot' => 'Lot',
		'others' => 'Others'
	))
);
// - transaction type
define('TRANSACTION_TYPE_SALE', 'sale');
define('TRANSACTION_TYPE_RENT', 'rent');
define('TRANSACTION_TYPE_SELECTION', serialize(
	array(
		'' => '---', 
		'sale' => 'Sale',
		'rent' => 'Rent'
	))
);

// - property condition
define('PROPERTY_CONDITION_SELECTION', serialize(
	array(
		'' => '---', 
		'fully_furnished' => 'Fully Furnished', 
		'semi_furnished' => 'Semi Furnished', 
		'others' => 'Others', 
		'n/a' => 'n/a'
	))
);
