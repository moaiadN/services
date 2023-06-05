<?php
include "../processes/connection.php";

$id = $_GET['id'];
$sql = "UPDATE user_services SET status='done' WHERE id= $id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header('location: ../Admin/services.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
