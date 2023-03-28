<?php
include_once '../class/account.class.php';
session_start();

$pw = $_POST['pw'];
$un = $_POST['un'];
$rptpw = $_POST['rptpw'];
$obj = new Account();
echo $obj->Register($un, $pw, $rptpw);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    TEsttttttttt
</body>
</html>
