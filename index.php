<?php
session_start();
ob_start();
$start = microtime(true); 
require('config.php');
if($config['server_name'] == "%SERVER_NAME%") {
header("Location: install/");
exit;
}
if(USING_WINDOWS && $config['engine']['loadManagement'])
	exit("Load management is not available on Windows. Please switch it off in config.php");
else if(USING_WINDOWS == 0 && $config['engine']['loadManagement']) {
	$process = sys_getloadavg(); 
	if ($process[0] > $config['engine']['maxLoad']) { 
		header('HTTP/1.1 503 Too busy, try again later'); 
		die('IDE Dropped connection with you. The server is too busy. Please try again later.');
	}
}
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}
/*
 *---------------------------------------------------------------
 * TEMPLATE
 *--------------------------------------------------------------- 
 * Define template name
 */
	$template = $config['layout'];
	
/*
 *---------------------------------------------------------------
 * WEBSITE
 *--------------------------------------------------------------- 	
 * Full website address including HTTP:// Without slash at the end!
 */
	$website = $config['website'];	
	
/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$view_folder = '';


/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative to the "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

	// Name of the "system" directory
	define('SYSDIR', basename(BASEPATH));

	// The path to the "application" directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" directory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{
		if (($_temp = realpath($view_folder)) !== FALSE)
		{
			$view_folder = $_temp;
		}
		else
		{
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);

	
	define('CURRENT', "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
//	verifica o acesso da conta
	if(empty($_SESSION['access'])) $_SESSION['access'] = 0;

//	load class IDE	
require('config.php');
require_once(APPPATH.'/libraries/system.php');
$ide = new IDE;
if(!DEFINED("SYSTEM_STOP")) {
if(!@is_array($_SESSION['actions'])) $_SESSION['actions'] = array();
@array_unshift($_SESSION['actions'], array('time'=>time(), 'action'=>'Redirected to: http://'.$_SERVER['SERVER_ADDR'].$_SERVER['PHP_SELF']));
if(@count($_SESSION['actions']) > $config['actionsCount'])
	@array_pop($_SESSION['actions']);
}

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */ 
require_once(APPPATH.'/libraries/Smarty.class.php');
require(APPPATH."libraries/POT/OTS.php");
require_once BASEPATH.'core/CodeIgniter.php';
	
if(DEFINED('TITLE')) $config['title'] = TITLE;
$ide->loadEvent("onLoad");
/* Check the server's compatybility with the engine. */
if(!is_php($config['engine']['PHPversion'])) show_error("Your server runs verion of PHP older than ".$config['engine']['PHPversion'].". Please update in order to use this system. Err code: 140704042010");
if(!DEFINED("SYSTEM_STOP")) {
	$CI =& get_instance();
	$CI->load->helper("url");
	$controller = $CI->uri->segment(1);
	$method = $CI->uri->segment(2);
	
	#This is required in order to make work new community modules when upgrading from older Modern AAC versions.
	if($ide->isLogged() && $controller != "account" && $method != "setNickname" && empty($_SESSION['nickname'])) $ide->redirect(WEBSITE."/index.php/account/setNickname");
	
$contents = ob_get_contents();
$contents = wordWrapIgnoreHTML($contents, $config['wrap_words'], '<br />'); 
ob_end_clean();
require_once(APPPATH.'config/database.php');
/* Some basic actions */
if(empty($_SESSION['logged'])) $_SESSION['logged'] = 0;
$smarty = new Smarty;
	if(file_exists("templates/".$template."/alters/".$controller."_".$method."/index.tpl"))
		$smarty->template_dir = "templates/".$template."/alters/".$controller."_".$method;
	else if(file_exists("templates/".$template."/alters/".$controller."/index.tpl"))
		$smarty->template_dir = "templates/".$template."/alters/".$controller;
	else
		$smarty->template_dir = "templates/".$template;
$smarty->config_dir = ' configs';
$smarty->cache_dir = 'cache';
$smarty->compile_dir = 'compile';
@$logged = ($_SESSION['logged'] == 1) ? 1 : 0;
$head = '<link type="text/css" href="'.$website.'/public/css/system.css" rel="stylesheet" /><link type="text/css" href="'.$website.'/public/css/'.$config['UItheme'].'" rel="stylesheet" /><script type="text/javascript" src="'.$website.'/public/js/jquery-1.4.2.min.js"></script><script type="text/javascript" src="'.WEBSITE.'/public/js/jquery.ui.datetimepicker.js"></script><script type="text/javascript" src="'.$website.'/public/js/system.js"></script><script type="text/javascript" src="'.$website.'/public/js/jquery-ui-1.8.custom.min.js"></script><link rel="stylesheet" href="'.WEBSITE.'/public/css/tipsy.css" type="text/css" /><script type="text/javascript" src="'.WEBSITE.'/public/js/jquery.tipsy.js"></script><link rel="stylesheet" type="text/css" href="'.WEBSITE.'/public/css/tooltip.css" /> <script type="text/javascript" src="'.WEBSITE.'/public/js/tooltip.js"></script> <script src=\'https://www.google.com/recaptcha/api.js\'></script>';
require("system/template_variables.php");
if($ide->isAdmin())
	$smarty->assign('admin', '[<a href="'.$website.'/index.php/admin">Administration</a>]');
else
	$smarty->assign('admin', '');
/* POLL SYSTEM by tatu hunter
   DONT CHANGE IF YOU DONT KNOW WHAT ARE YOU DOING */
/*$CI->load->model('poll_model', 'poll');
$data['poll'] = $CI->poll->getLastPoll();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['poll_id']) && $_POST['poll_id'] && isset($_POST['answer_id']) && $_POST['answer_id']) {
	$CI->poll->doVote($_POST);
	$data['poll'] = $CI->poll->getLastPoll();
}
$poll = $CI->load->view('poll', $data, true);
$smarty->assign('poll', $poll);
*/
/* END POLL SYSTEM */
$totaltime = round((microtime(true) - $start), 4); 
$smarty->assign('renderTime', $totaltime);
$smarty->assign('title', $config['title']);
$smarty->assign('controller', strtolower($controller));
$smarty->assign('method', strtolower($method));
$smarty->display('index.tpl');
if($ide->isAdmin() && $config['adminWindow']) {
	require("system/adminWindow.php");
}
$ide->loadEvent("onReady");
}
$_SESSION['previous'] = curPageURL();