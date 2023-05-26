<?php
session_start();
include 'connection.php';
$email = "";

$errors = array();
// LOGIN USER
if (isset($_POST['changePass'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $pass1 = mysqli_real_escape_string($conn, $_POST['newPass']);
    // $pass2 = mysqli_real_escape_string($conn, $_POST['confPass']);
    // $hashed = md5($pass);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    //  else if (empty($pass)) {
    //     array_push($errors, "Password is required");
    // }

    if (count($errors) == 0) {

        $query = mysqli_query($conn, "SELECT email FROM register  LIMIT 1");

        if (mysqli_num_rows($query) == 1) {
            
            if ( mysqli_fetch_assoc($query)) {
                header('location: _forgetPass.php');
            } else {
                array_push($errors, "Email NOt Existing");
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}