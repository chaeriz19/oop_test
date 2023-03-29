<?php

class Url {
    function autoredirect() {
        $explurl = explode("/",$_GET['url']);
        if (empty($_GET['url'])) {
            header("Location: /home");
        } else {
            if (file_exists("views/{$explurl[0]}.view.php")) {
                if (!$_SESSION['is-loggedin']) {
                    switch ($explurl[0]) {
                        // List of protected 
                        case "gallery":
                            include_once 'views/403.view.php';
                            break;
                        case "admin":
                            include_once 'views/403.view.php';
                            break;
                        default:
                            include_once "views/{$explurl[0]}.view.php";
                            break;
                    } } else {include_once "views/{$explurl[0]}.view.php";
                }
            } else {
            header("Location: https://chrisouboter.com/404");
            }
        }
    }
}