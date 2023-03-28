<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgister</title>
</head>
<body>
    <?php include_once 'inc/topbar.inc.php'; ?>
    <form action="inc/register.inc.php" method="POST">
    <div class="layout-content"> 
     <table>
        <tr><td><input type="text" name="un" placeholder="Username"></td></tr>
        <tr><td><input type="password" name="pw" placeholder="Password"></td></tr>
        <tr><td><input type="password" name="rptpw" placeholder="Repeat Password"></td></tr>
        <tr><td><input type="submit" value="Create account"></td></tr>
        <tr><td><?php if (isset($_SESSION['register-message'])) {echo '<p>';echo $_SESSION["register-message"];echo '</p>';}?></td></tr>
      
     </table>

    </div>
 
    </form>
  
    <?php include_once 'inc/footer.inc.php';?>
</body>
</html>