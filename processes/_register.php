<?php
include 'connection.php';
session_start();

// initializing variables
$fname = $lname = $email = $phone_number = "";
$errors = array();

// REGISTER USER
if (isset($_POST['SIGNUP'])) {
    // receive all input values from the form
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
    $userType = mysqli_real_escape_string($conn, $_POST['userType']);

    // FORM VALIDATION: ensure that the form is correctly filled  ============>>>

    if (empty($fname)) {
        array_push($errors, "First name is required");
    } else if (empty($lname)) {
        array_push($errors, "Last name is required");
    } else if (empty($email)) {
        array_push($errors, "Email is required");
    } else if (empty($phone_number)) {
        array_push($errors, "Phone number is required");
    } else if (strlen($phone_number) < 10 || strlen($phone_number) > 10) {
        array_push($errors, "The Phone number must be 10 numbers");
    } else if (empty($pass1)) {
        array_push($errors, "Password is required");
    } else if (strlen($pass1) < 6) {
        array_push($errors, "Password must be at least 6 character");
    } else if ($pass1 !== $pass2) {
        array_push($errors, "The two passwords do not match");
    } else if ($userType == "" && $userType !== 's_provider' && $userType !== 'user') {
        array_push($errors, "PLease Select One of User Types");
    }

    // check user does not already exist with the same email
    $user_check_query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' LIMIT 1");
    $user = mysqli_fetch_assoc($user_check_query);

    if ($user) { // if email exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($pass1); //encrypt the password before saving in the database
        // $userType = '';e
        if ($userType == 's_provider') {
            $userType = 'pending';
        } else {
            $userType = 'user';
        }

        $query = mysqli_query($conn, "INSERT INTO register  VALUES('','$fname','$lname', '$email', '$phone_number', '$password','$userType')");

        $user_type = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' LIMIT 1");
        $userType = mysqli_fetch_assoc($user_type);

        if ($userType['user_type'] === 'pending') {
            // if ($userType == 's_provider') {
            $_SESSION['user'] = $email;
            header('location: providerId.php');
            exit();
        }
        if ($userType['user_type'] === 'user') {
            $_SESSION['user'] = $email;
            header('location: index.php');
        }
    }
}
// ========================================================== //