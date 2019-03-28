<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Site (by CI Bootstrap 3)
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views when calling 
| MY_Controller's render() function. 
|
| Each of them can be overrided from child controllers.
|
*/

$config['site'] = array(

	// Site name
	'name' => 'GoEstate',

	// Default page title
	// (set empty then MY_Controller will automatically generate one according to controller / action)
	'title' => 'GoEstate',

	// Multilingual settings (set empty array to disable this)
	'multilingual' => array(),

	// AdminLTE settings
	'adminlte' => array(
		'skins' => array(
			// change skin according to login user's role
			'admin'		=> 'skin-gray',
			'staff'		=> 'skin-gray',
		)
	),

	// Menu items which support icon fonts, e.g. Font Awesome
	// (or directly update view file: /application/modules/admin/views/_partials/sidemenu.php)
	'menu' => array(

		// [Admin role]
		'admin' => array(
			'home' => array(
				'name'		=> 'Home',
				'url'		=> '',
				'icon'		=> 'fa fa-home',
			),
			'request' => array(
				'name'		=> 'Request Management',
				'url'		=> 'request',
				'icon'		=> 'fa fa-book',	// use Ionicons (instead of FontAwesome)
				'children'  => array(
					'Pending'	=> 'request/pending',
					'Approved'	=> 'request/approved',
					'Archived List'	=> 'request/archive'
				)
			),
			'menu' => array(
				'name'		=> 'Menu Management',
				'url'		=> 'menu',
				'icon'		=> 'fa fa-list-alt',
				'children'  => array(
					'Adding Catering Category'	=> 'menu/add_category',
					'Category Table'	=> 'menu/category_list',
					'Category Archived List'	=> 'menu/archived_category',
					'Add Menu'	=> 'menu/create',
					'Menu Table'	=> 'menu/records',
					'Menu Archived List'	=> 'menu/archive',
				)
			),
			'employee' => array(
				'name'		=> 'Employee Management',
				'url'		=> 'employee',
				'icon'		=> 'fa fa-users',	// use Ionicons (instead of FontAwesome)
				'children'  => array(
					'Add New Employee'	=> 'employee/register',
					'Employee List'	=> 'employee/records',
					'Archived List'	=> 'employee/archive'
				)
			),
			'equipment' => array(
				'name'		=> 'Equipment Management',
				'url'		=> 'equipment',
				'icon'		=> 'fa fa-cutlery',	// use Ionicons (instead of FontAwesome)
				'children'  => array(
					'Add New Equipment'	=> 'equipment/add_new',
					'Owned Equipment'	=> 'equipment/inventory',
					'Rented Equipment'	=> 'equipment/rented',
					'Archived List'	=> 'equipment/archive'
				)
			),
			// 'reservation' => array(
			// 	'name'		=> 'Reservation',
			// 	'url'		=> 'reservation',
			// 	'icon'		=> 'fa fa-list-alt',
			// ),
			// 'user' => array(
			// 	'name'		=> 'Users',
			// 	'url'		=> 'user',
			// 	'icon'		=> 'fa fa-users',
			// ),
			// 'cover_photo' => array(
			// 	'name'		=> 'Cover Photos',
			// 	'url'		=> 'cover_photo',
			// 	'icon'		=> 'fa fa-photo',
			// ),
			// 'blog' => array(
			// 	'name'		=> 'Blog',
			// 	'url'		=> 'blog',
			// 	'icon'		=> 'fa fa-pencil',
			// 	'children'  => array(
			// 		'Posts'			=> 'blog/post',
			// 		'Categories'	=> 'blog/category',
			// 		'Tags'			=> 'blog/tag',
			// 	)
			// ),
			// 'demo' => array(
			// 	'name'		=> 'Demo',
			// 	'url'		=> 'demo',
			// 	'icon'		=> 'ion ion-gear-b',	// use Ionicons (instead of FontAwesome)
			// 	'children'  => array(
			// 		'Pagination'	=> 'demo/pagination',
			// 		'Sortable'		=> 'demo/sortable',
			// 		'Item 1'		=> 'demo/item/1',
			// 		'Item 2'		=> 'demo/item/2',
			// 		'Item 3'		=> 'demo/item/3',
			// 	)
			// ),
			// end of demo
			/*
			'admin_user' => array(
				'name'		=> 'Admin Users',
				'url'		=> 'admin_user',
				'icon'		=> 'fa fa-cogs'
			),*/
			'logout' => array(
				'name'		=> 'Sign Out',
				'url'		=> 'account/logout',
				'icon'		=> 'fa fa-sign-out',
			),
		),

		// [Staff role]
		'staff' => array(
			'home' => array(
				'name'		=> 'Home',
				'url'		=> '',
				'icon'		=> 'fa fa-home',
			),
			'demo' => array(
				'name'		=> 'Demo',
				'url'		=> 'demo',
				'icon'		=> 'ion ion-gear-b',
				'children'  => array(
					'Item 1'		=> 'demo/item/1',
					'Item 2'		=> 'demo/item/2',
					'Item 3'		=> 'demo/item/3',
				)
			),
			'logout' => array(
				'name'		=> 'Sign Out',
				'url'		=> 'account/logout',
				'icon'		=> 'fa fa-sign-out',
			),
		),
	),

	// User authenication (to be completed)
	'auth' => array(
		
		// Field name for logging in (e.g. email, username)
		'login_field'		=> 'username',
		
		// Reset Password settings
		/*
		'reset_password'	=> array(
			'enabled'		=> TRUE,
			'email'			=> 'reset_password',
		),*/
	),

	// For debug purpose (available only when ENVIRONMENT = 'development')
	'debug' => array(
		'view_data'		=> FALSE,	// whether to display MY_Controller's mViewData at page end
		'profiler'		=> FALSE,	// whether to display CodeIgniter's profiler at page end
	),
);