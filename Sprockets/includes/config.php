<?php

/*
config.php

store configuration informatio for our web application

*/

//removes header already sent errors
ob_start();

define('DEBUG',true); #we want to see all errors


//START CONFIG SNIPPET #1

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'sprockets_fl17_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

//END CONFIG SNIPPET #1


include 'credentials.php';//stores db info
include 'common.php';//stores favorite functions


//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

//create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));



//START NEW THEME STUFF
$sub_folder = 'Sprockets';//change to 'widgets' or 'sprockets' etc.

//add subfolder, in this case 'fidgets' if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
$config->virtual_path = 'http://' . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;
$config->theme = 'BusinessCasual';//sub folder to themes


//START CONFIG SNIPPET #2

define('ADMIN_PATH', $config->virtual_path . '/admin/'); # Could change to sub folder
define('INCLUDE_PATH', $config->physical_path . '/includes/');

//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}

//END CONFIG SNIPPET #2


//END NEW THEME STUFF


//set website defaults
$config->title = THIS_PAGE;
$config->banner = 'Sprockets';
$config->loadhead = '';//place items in <head> element
$config->index = '';
$config->about = '';
$config->daily = '';
$config->blog = '';
$config->contact = '';

switch(THIS_PAGE){
    case 'contact.php':
        $config->title = 'Contact Page';
        $config->contact = 'active';
    break;
    case 'customers.php':
        $config->title = 'Customer Page';
        $config->customers = 'active';
    break;
    case 'games_list.php':
        $config->title = 'Games Page';
    break;
    case 'daily.php';
        $config->title = 'Daily Page';
        $config->daily = 'active';
    break;
    case 'appointment.php':
        $config->title = 'Appointment Page';
        $config->banner = 'Das Sprokets';
        $config->blog = 'active';
    break;
    case 'index.php':
        $config->title = 'Index Page';
        $config->index = 'active';
    break;
    case 'game_pager.php':
        $config->title = 'Game Pager Page';
        $config->index = 'active';
    break;
        
}

//echo THIS_PAGE;

//echo basename($_SERVER['PHP_SELF']);
//die;




/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfelDYUAAAAAFzeIMeojqqa-pvfqpphTV-I3-0x";
$secretKey = "6LfelDYUAAAAAImbHOahvzq9ah4WdBLJGqtFy01t";



//START NEW THEME STUFF
//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . '/themes/' . $config->theme . '/';
//END NEW THEME STUFF



/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
    
    $config->adminWidget = '


        <a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a> 
        <a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a>


    ';
}else{//show login (YOU MAY WANT TO SET TO EMPTY STRING FOR SECURITY)
    
    $config->adminWidget = '

        <a  href="' . ADMIN_PATH . 'admin_login.php">LOGIN</a>

    ';

}