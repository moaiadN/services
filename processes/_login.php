<?php
session_start();
include 'connection.php';
$email = "";
$errors = array();
// LOGIN USER
if (isset($_POST['LOGIN'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $hashed = md5($pass);

    if (empty($email)) {
        array_push($errors, "Email is required");
    } else if (empty($pass)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' AND password='$hashed' LIMIT 1");

        if (mysqli_num_rows($query) == 1) {

            $logged_in_user = mysqli_fetch_assoc($query);

            if ($logged_in_user['user_type'] == 'user') {
                $_SESSION['email'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                header('location: index.php');
            } else {
                $_SESSION['email'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                header('location: ./Admin/index.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
