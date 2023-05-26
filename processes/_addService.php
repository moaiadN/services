<?php
// error_reporting(E_ALL & ~E_NOTICE);
// error_reporting(0);
include 'connection.php';


if (isset($_POST['submit'])) {

    $price = $_POST['price'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $number_of_beds = $_POST['number_of_beds'];
    $number_of_bathrooms = $_POST['number_of_bathrooms'];
    $city = $_POST['city'];
    $categories = $_POST['categories'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    // ===========================> IMAGE UPLOAD ====>

    $image_name  = $_FILES['image']['name'];
    $image_type  = $_FILES['image']['type'];
    $image_tmp   = $_FILES['image']['tmp_name'];
    $image_size  = $_FILES['image']['size'];

    $new_image_name = rand(100000, 100000000) . '_' . $image_name;
    $allowed = ['jpg', 'jpeg', 'png'];

    $explode = explode('.', $image_name);
    $file_type = strtolower(end($explode));

    // $new_image_name = rand(0, 100) . '.' . $file_type; // to prevent any bug with a filename when upload it. 

    if (in_array($file_type, $allowed)) {
        move_uploaded_file($image_tmp, '../layout/images/' . $image_name);

        $query = mysqli_query($conn, "INSERT INTO user_services VALUES ('','$new_image_name','$price','$title','$details','$number_of_beds','$number_of_bathrooms','$city','$categories','$fname','$lname','$email','$phone_number','pending')");

        if ($query) {
            echo "Success";
        }
    } else {
        echo "Error ..!!";
    }
}
// }