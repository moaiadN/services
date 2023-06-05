<?php
session_start();
include 'connection.php';

$errors = array();

if (isset($_POST['passUpdate'])) {

    $newPass = mysqli_real_escape_string($conn, $_POST['newPass']);
    $confPass = mysqli_real_escape_string($conn, $_POST['confPass']);
    $email = $_SESSION['reset'];

    // FORM VALIDATION:   ============>>>
    if (empty($newPass)) {
        array_push($errors, "Password is required");
    } else if (strlen($newPass) < 6) {
        array_push($errors, "Password must be at least 6 character");
    } else if ($newPass != $confPass) {
        array_push($errors, "The two passwords do not match");
    }
    if (count($errors) == 0) {
        $password = md5($newPass);
        $query = mysqli_query($conn, "UPDATE register SET password = '$password' WHERE email='$email'");
        header('location: login.php');
    }
}
