<?php
include 'connection.php';

$fname = $lname = $email = $phone_number = '';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $pass = $_POST['password'];
    $userType = $_POST['userType'];

    if (empty($fname)) {
        array_push($errors, "First name is required");
    } else if (empty($lname)) {
        array_push($errors, "Last name is required");
    } else if (empty($email)) {
        array_push($errors, "Email is required");
    } else if (empty($phone_number)) {
        array_push($errors, "Phone number is required");
    } else if (strlen($phone_number) < 10 || strlen($phone_number) > 10) {
        array_push($errors, "Phone number must be 10 numbers");
    } else if (empty($pass)) {
        array_push($errors, "Password is required");
    } else if (strlen($pass) < 6) {
        array_push($errors, "Password must be at least 6 character");
    } else if (empty($userType)) {
        array_push($errors, "Password is required");
    }

    // check user does not already exist with the same email
    $user_check_query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' LIMIT 1");
    $user = mysqli_fetch_assoc($user_check_query);

    if ($user) { // if email exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }
    if (count($errors) == 0) {
        $password = md5($pass);
        $query = mysqli_query($conn, "INSERT INTO register VALUES('','$fname','$lname', '$email', '$phone_number', '$password', '$userType')");

        // header('location: users.php');
?>
        <script>
            location.href = 'users.php';
        </script>
    <?php
    }
}


// ======================================================================>>>>>

if (isset($_POST['changeUserType'])) {
    $id = $_POST['id'];
    $typeUser = $_POST['typeUser'];
    $query = mysqli_query($conn, "UPDATE register SET user_type = '$typeUser' WHERE id = '$id'");
    ?>
    <script>
        location.href = 'users.php';
    </script>
<?php
}

// ======================================================================>>>>>
if (isset($_POST['changeType'])) {
    $id = $_POST['id'];
    $query = mysqli_query($conn, "UPDATE register SET user_type = 's_provider' WHERE id = '$id'");
?>
    <script>
        location.href = 'users.php';
    </script>
<?php
}
