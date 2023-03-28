<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Logout</title>
</head>
<body>
    <?php include_once 'inc/topbar.inc.php'; ?>
    <div class="layout-content"> 
    <?php 
    include_once 'class/account.class.php';$obj = new Account();echo $obj->Logout();?>
    Successfully logged out, click <a style="color: blue;" href="https://chrisouboter.com/home">here</a>to go back.
    </div>
    <?php include_once 'inc/footer.inc.php';?>
 
</body>
</html>