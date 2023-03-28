<?php
include_once '../class/account.class.php';
session_start();

$pw = $_POST['pw'];
$un = $_POST['un'];
$obj = new Account();
echo $obj->Login($pw, $un);


