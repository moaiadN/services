<?php
include "../processes/connection.php";


if (isset($_POST['activeService'])) {
    $id = $_POST['activeServiceId'];
    $sql = "UPDATE user_services SET status='in_service' WHERE id= $id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header('location: ../Admin/services.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
if (isset($_POST['outOfService'])) {
    $id = $_POST['outOfServiceId'];
    $sql = "UPDATE user_services SET status='out_of_service' WHERE id= $id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header('location: ../Admin/services.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
if (isset($_POST['inService'])) {
    $id = $_POST['inServiceId'];
    $sql = "UPDATE user_services SET status='in_service' WHERE id= $id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header('location: ../Admin/services.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
