<?php
/*
config-2.php

store configuration informatio for our web application

*/

//removes header already sent errors
ob_start();

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
$config->blog = '';
$config->contact = '';

switch(THIS_PAGE){
    case 'contact.php':
        $config->title = 'Contact Page';
        $config->contact = 'active';
    break;
    case 'about.php':
        $config->title = 'About Page';
        $config->about = 'active';
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
        
}

//echo THIS_PAGE;

//echo basename($_SERVER['PHP_SELF']);
//die;


?>