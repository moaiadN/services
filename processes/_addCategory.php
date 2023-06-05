<?php
include 'connection.php';

if (isset($_POST['submit'])) {


    $title = $_POST['title'];

    $image_name  = $_FILES['image']['name'];
    $image_type  = $_FILES['image']['type'];
    $image_tmp   = $_FILES['image']['tmp_name'];
    $image_size  = $_FILES['image']['size'];

    $allowed = ['jpg', 'jpeg', 'png'];
    $explode = explode('.', $image_name);
    $file_type = strtolower(end($explode));


    if (in_array($file_type, $allowed)) {
        move_uploaded_file($image_tmp, '../layout/images/' . $image_name);

        $query = mysqli_query($conn, "INSERT INTO categories VALUES ('','$title','$image_name')");


        if ($query) {
            echo "Success";
        }
    } else {
        echo "Error ..!!";
    }
}
// }