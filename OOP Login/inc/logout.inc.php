<?php
session_start();
$_SESSION['is-loggedin'] = false;
$_SESSION['username-loggedin'] = null;

header("Location: https://chrisouboter.com/home");




