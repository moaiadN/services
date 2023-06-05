<?php
session_start();
include 'connection.php';
// initializing variables
$email = "";
$errors = array();

if (isset($_POST['resetPass'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $newPass = mysqli_real_escape_string($conn, $_POST['newPass']);
    $confPass = mysqli_real_escape_string($conn, $_POST['confPass']);
    // FORM VALIDATION:   ============>>>
    if (empty($email)) {
        array_push($errors, "Email is required");
    } else if (empty($newPass)) {
        array_push($errors, "Password is required");
    } else if (strlen($newPass) < 6) {
        array_push($errors, "Password must be at least 6 character");
    } else if ($newPass != $confPass) {
        array_push($errors, "The two passwords do not match");
    }
    // check  exist the  email
    $query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' LIMIT 1");
    $user = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 1) {
        $validEmail = mysqli_fetch_assoc($query);
        if ($validEmail['email'] == $email) {
            array_push($errors, "email exists");
        }
    } else {
        array_push($errors, "Wrong email");
    }
    if (count($errors) == 0) {
        $password = md5($newPass);
        $query = mysqli_query($conn, "UPDATE register SET password = '$password' WHERE email='$email'");
        header('location: login.php');
    }
}
