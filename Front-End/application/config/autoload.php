<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTOLOADER
| -------------------------------------------------------------------
| This file lets you define which systems are loaded by default
| during every request.
|
| Please see the user guide for info:
| https://codeigniter.com/user_guide/general/core_classes.html
|
*/

$autoload['packages'] = array();

// List of libraries to load automatically
$autoload['libraries'] = array('session', 'form_validation', 'curl');

// List of drivers to load automatically
$autoload['drivers'] = array();

// List of helper files to load automatically
$autoload['helper'] = array('url', 'form'); // Add 'form' if you need form helper

// List of config files to load automatically
$autoload['config'] = array();

// List of language files to load automatically
$autoload['language'] = array();

// List of models to load automatically
$autoload['model'] = array();
