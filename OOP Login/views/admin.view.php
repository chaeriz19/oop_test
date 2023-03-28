<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Logs</title>
</head>
<body>
   <?php
    include_once 'inc/topbar.inc.php';
   ?>
   <div class="layout-content">
   <?php $include = new Inc();echo $include->access_admin();?>
   </div>
   <?php include_once 'inc/footer.inc.php';?>
</body>
</html>