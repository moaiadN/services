<?php
include 'connection.php';

// initializing variables
$name = $email = $subject = $phone_number =  $message = "";
$errors = array();


if (isset($_POST['visitorsMsg'])) {


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $message = mysqli_real_escape_string($conn, $_REQUEST['message']);


    // FORM VALIDATION: ensure that the form is correctly filled  ============>>>

    if (empty($name)) {
        array_push($errors, "Name is required");
    } else if (empty($email)) {
        array_push($errors, "Email is required");
    } else if (empty($subject)) {
        array_push($errors, "Subject is required");
    } else if (empty($phone_number)) {
        array_push($errors, "Phone number is required");
    } else if (strlen($phone_number) < 10 || strlen($phone_number) > 10) {
        array_push($errors, "Phone number must be 10 numbers");
    } else if (empty($message)) {
        array_push($errors, "Write Your Question Here");
    }

    if (count($errors) == 0) {

        $query = mysqli_query($conn, "INSERT INTO contact VALUES('', '$name','$email', '$subject', '$phone_number', '$message')");

        // header('location: index.php');
?>
        <script>
            location.href = 'index.php';
        </script>
<?php
    }
}
