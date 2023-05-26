<?php
// session_start();
// if (isset($_SESSION['email'])) {
//     unset($_SESSION['email']);

//     echo "<script>alert('Logged Out Successfully'); location.href='login.php';</script>";
// }




session_start();
session_unset();
session_destroy();
header('location:login.php');
exit();

// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['email']);
//     header("location: login.php");
// }