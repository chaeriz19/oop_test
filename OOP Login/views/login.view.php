<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include_once 'inc/topbar.inc.php'; ?>
    <div class="layout-content"> 
        <form action="https://chrisouboter.com/inc/login.inc.php" method="POST">
            <table>  
            <tr><td><input name="un" type="username"  placeholder="Username"></td></tr>
            <tr><td><input name="pw" type="password"  placeholder="Password"></td></tr>
            <tr><td><input type="submit" name="submit-login" value="Login"></td></tr>
            </table>
        </form> 
        <?php 
        if (isset($_SESSION['login-message'])) {echo '<p class="errortxt">';echo $_SESSION["login-message"];echo '</p>';}?>
        <p>Don't have an account yet? click <a class="clickable" href="/register">here</a>to make an account!</p>
    </div>
    <?php include_once 'inc/footer.inc.php';?>
</body>
</html>