<?php
include "../processes/_login.php";

if (!$_SESSION['email']) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
} else {
    if ($_SESSION['email']['user_type'] == 'admin') {
        header('location: dashboard.php');
    } else if ($_SESSION['email']['user_type'] == 's_provider') {
        header('location: services.php');
    }
}
