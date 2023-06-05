<?php
session_start();
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT price, title, categories FROM user_services WHERE id='$id'");
foreach ($query as $row) {
    $price = $row['price'];
    $title = $row['title'];
    $category = $row['categories'];
}

$userName = $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['fname'];
$email = $_SESSION['user']['email'];
$phone = $_SESSION['user']['phone_number'];

$checkEmail = mysqli_query($conn, "SELECT * FROM requests WHERE email='$email' AND serviceId=$id");
$checked = mysqli_fetch_assoc($checkEmail);
if ($checked['serviceId'] === $id) {
    $_SESSION["success"] = '
    <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div> Sorry, You can book only onetime </div></div>';
    header('location: ../details.php?id=' . $id);
} else {
    $insertQuery = mysqli_query($conn, "INSERT INTO requests VALUES ('','$userName','$email','$phone','$category','$title','$price','$id')");
    $_SESSION["success"] = '
        <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div> Your request has been sent successfully and we will contact you shortly </div></div>';
    header('location: ../details.php?id=' . $id);
}
// }