<?php 
// start session
session_start();

// include nessecary classes
include_once 'class/inc.class.php';
include_once 'class/url.class.php';
include_once 'class/db.class.php';
$url = new Url();
$url->autoredirect();

// Include Folders
$inc = new Inc();
$inc->inc_class();
$inc->inc_css();


?>

