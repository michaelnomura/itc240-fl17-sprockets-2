<?php

/*
config.php

store configuration informatio for our web application

*/

//removes header already sent errors
ob_start();

define('DEBUG',true); #we want to see all errors

include 'credentials.php';//stores db info
include 'common.php';//stores favorite functions


//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

//create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//set website defaults
$config->title = THIS_PAGE;
$config->banner = 'Sprockets';
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
    case 'games_list.php';
        $config->title = 'Games';
    break;
    case 'daily.php';
        $config->title = 'Daily Page';
        $config->daily = 'active';
    case 'appointment.php':
        $config->title = 'Appointment Page';
        $config->banner = 'Das Sprokets';
        $config->blog = 'active';
    break;
    case 'index.php':
        $config->title = 'Index Page';
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


?>