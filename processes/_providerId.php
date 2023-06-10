<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $idNum = $_POST['idNum'];
    $registerId = $_POST['registerId'];

    $image_name  = $_FILES['image']['name'];
    $image_type  = $_FILES['image']['type'];
    $image_tmp   = $_FILES['image']['tmp_name'];
    $image_size  = $_FILES['image']['size'];

    $allowed = ['jpg', 'jpeg', 'png'];
    $explode = explode('.', $image_name);
    $file_type = strtolower(end($explode));


    if (in_array($file_type, $allowed)) {
        $query = mysqli_query($conn, "INSERT INTO providerid VALUES ('','$image_name','$idNum','$registerId')");
        if ($query) {
            move_uploaded_file($image_tmp, './layout/images/' . $image_name);
            echo "Success";
            session_destroy();
            header('location: index.php');
            exit();
        }
    } else {
        echo '
    <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <h5> ERROR....! Please, fill all inputs </h5></div>';
    }
}

if (isset($_POST['close'])) {
    $stat = mysqli_query($conn, "SELECT id FROM register WHERE email='" . $_SESSION["user"] . "'");
    $result = mysqli_fetch_assoc($stat);
    $id = $result['id'];
    mysqli_query($conn, "DELETE FROM register where id=$id");
    header('location: logout.php');
}
