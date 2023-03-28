<?php
include_once 'inc.class.php';
include_once 'db.class.php';
class Account {
    public function Login($pw, $un) {
        $include = new Inc();
        $obj = new db();$obj->dbconnect();$obj->db;
        $request = "SELECT * FROM `users` WHERE `dbUsername` = '$un'";
        $result = mysqli_query($obj->db, $request);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($pw == $row['dbPassword'] && $un == $row['dbUsername']) {
                    $_SESSION['is-loggedin'] = true;
                    $_SESSION['username-loggedin'] = $un;
                    $_SESSION['user-id'] = $row['id'];
                    $include->header("home");
                } else {
                    $_SESSION['login-message'] = "invalid username and password combination";
                    $include->header("login");
                }
            }
        } else {
            $_SESSION['login-message'] = "user not found";
            $include->header("login");
        }
    }
    public function Logout() {
        $include = new Inc();
        $_SESSION['is-loggedin'] = false;
        $_SESSION['username-loggedin'] = null;
        $include->header("home");
        // TODO: User not being send back to home page.
    }
    public function Register($un, $pw, $rptpw) {
        $obj = new db();$obj->dbconnect();$include = new Inc();
        if (!empty($un) && !empty($pw) && !empty($rptpw)) {

            $checku = "SELECT * FROM `users` WHERE `dbUsername` = '$un'";
            $checkq = mysqli_query($obj->db, $checku);
            if (mysqli_num_rows($checkq) > 0) {
                $include->header("register");
                $_SESSION["register-message"] = "Username is already used or passwords does not match";
            } else {
                if ($pw == $rptpw) {
                    $query = "INSERT INTO `users` (`id`, `dbUsername`, `dbPassword`) VALUES (NULL, '$un', '$pw');";
                    mysqli_query($obj->db, $query);
                    $include->header("login");
                    $_SESSION["login-message"] = "Account created";
                } else {
                    $include->header("register");
                    $_SESSION["register-message"] = "Passwords do not match";
                }
            }
        } else {
            $include->header("register");
            $_SESSION["register-message"] = "Vul alles in";
        }
    }
};