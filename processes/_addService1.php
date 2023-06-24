<?php
include 'connection.php';


if (isset($_POST['submit'])) {

    $price = $_POST['price'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $number_of_beds = $_POST['number_of_beds'];
    $number_of_bathrooms = $_POST['number_of_bathrooms'];
    $city = $_POST['city'];
    $categories = $_POST['categories'];
    $cat_name = $_POST['cat_name'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    // ===========================> IMAGE UPLOAD ===========>
    $extension = array('jpeg', 'jpg', 'png', 'gif');

    $image_name  = $_FILES['image']['name'];
    $image_tmp   = $_FILES['image']['tmp_name'];
    $image_size  = $_FILES['image']['size'];
    $file_type  = $_FILES['image']['type'];

    $explode = explode('.', $image_name);
    $file_type = strtolower(end($explode));


    if (in_array($file_type, $extension)) {
        if (!file_exists('../layout/images/' . $image_name)) {
            move_uploaded_file($image_tmp, '../layout/images/' . $image_name);
        } else {
            $newImgName = time() . '-' . $image_name;

            move_uploaded_file($image_tmp, '../layout/images/' . $newImgName);
            $query = mysqli_query($conn, "INSERT INTO user_services VALUES ('','$newImgName','$price','$title','$details','$number_of_beds','$number_of_bathrooms','$city','$cat_name','$fname','$lname','$email','$phone_number','$categories','pending')");

            // ===================================== >>>>>>>>>>>>>>>>>
            if ($query) {
                $sql = mysqli_query($conn, "SELECT id FROM user_services WHERE Title='$title'");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                    $id = $row['id'];
                }
                $imageCount = count($_FILES['imgs']['name']);
                for ($i = 0; $i < $imageCount; $i++) {
                    $imageName = $_FILES['imgs']['name'][$i];
                    $imageTmp   = $_FILES['imgs']['tmp_name'][$i];
                    if (!file_exists('../layout/images/' . $imageName)) {
                        if (move_uploaded_file($imageTmp, '../layout/images/' . $imageName)) {
                            $query = mysqli_query($conn, "INSERT INTO added_imgs VALUES ('','$imageName','$title','$id')");
                        }
                    } else {
                        $imageNameNew = time() . $imageName;
                        if (move_uploaded_file($imageTmp, '../layout/images/' . $imageNameNew)) {
                            $query = mysqli_query($conn, "INSERT INTO added_imgs VALUES ('','$imageNameNew','$title','$id')");
                        }
                    }
                }
            }
        }
    }
}
