<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER (module-specific)
| -------------------------------------------------------------------
| For detailed usage, please check the comments from original file:
| application/config/autoload.php
|
*/

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'crud', 'form_builder','pagination');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'adminlte');

$autoload['config'] = array('site');

$autoload['language'] = array();

// $autoload['model'] = array('Menu_model'=>'menu');
