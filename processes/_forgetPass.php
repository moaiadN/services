<?php
session_start();
include 'connection.php';
// initializing variables
$email = "";
$errors = array();

if (isset($_POST['resetPass'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // FORM VALIDATION:   ============>>>
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    // check  exist the  email
    $query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' LIMIT 1");
    if (mysqli_num_rows($query) == 1) {
        $validEmail = mysqli_fetch_assoc($query);
        if ($validEmail['email'] === $email) {

            $_SESSION['reset'] = $email;
            header('location: updatePass.php');
        }
    } else {
        array_push($errors, "Email not Exist");
    }
}
