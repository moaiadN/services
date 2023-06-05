<?php
include "../processes/_login.php";

if (!$_SESSION['user']) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
} else {
    if ($_SESSION['user']['user_type'] == 'admin') {
        header('location: services.php');
    } else if ($_SESSION['user']['user_type'] == 's_provider') {
        header('location: services.php');
    }
}
