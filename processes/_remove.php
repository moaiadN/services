<?php
session_start();
include "../processes/connection.php";

// ==============================> Delete Contact <=========================

$id = $_GET['id'];
$sql = "DELETE FROM contact where id=$id";
$rows = mysqli_query($conn, $sql);
if ($rows) {
    $_SESSION["status"] = '
                <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Data Deleted Successfully
                </div>
                ';

    header('location: ../Admin/contact.php');
} else {

    $_SESSION["status"] = '
                <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Data Not Deleted .!!
                </div>
                ';
    header('location: ../Admin/contact.php');
}

// ==============================> Delete Service <=========================

$id = $_GET['id'];
$sql = "DELETE FROM user_services where id=$id";
$rows = mysqli_query($conn, $sql);
if ($rows) {
    $_SESSION["status"] = '
                <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Data Deleted Successfully
                </div>
                ';

    header('location: ../Admin/services.php');
} else {
    $_SESSION["status"] = '
                <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Data Not Deleted .!!
                </div>
                ';
    header('location: ../Admin/services.php');
}
