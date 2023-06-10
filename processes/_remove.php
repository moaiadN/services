<?php
session_start();
include "../processes/connection.php";

// ==============================> Delete Contact <=========================
if (isset($_POST['deleteCont'])) {
    $id = $_POST['deleteId'];
    $deleteCont = mysqli_query($conn, "DELETE FROM contact where id= $id");
    if ($deleteCont) {
        $_SESSION["notification"] = '
                <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div> Data Deleted Successfully</div>
                ';
        header('location: ../Admin/contact.php');
    } else {
        $_SESSION["notification"] = '
                <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>Data Not Deleted .!!</div>
                ';
        header('location: ../Admin/contact.php');
    }
}
// // ==============================> Delete Service with images from folder <=========================
if (isset($_POST['deleteService'])) {
    $id = $_POST['deleteServiceId'];
    $serviceImage = $_POST['serviceImage'];

    $imgs = mysqli_query($conn, "SELECT * FROM added_imgs WHERE servId = $id");
    $imgCount = mysqli_num_rows($imgs);
    for ($i = 1; $i <= $imgCount; $i++) {
        $row = mysqli_fetch_array($imgs);
        unlink('../layout/images/' . $row['imgName']);
    }

    unlink('../layout/images/' . $serviceImage);
    $sql = mysqli_query($conn, "DELETE FROM user_services where id=$id");


    if ($sql && $imgsDel) {
        unlink('../layout/images/' . $serviceImage);
        // foreach ($imgs as $img) {
        unlink('../layout/images/' . $delImg);
        // }
        $_SESSION["notification"] = '
                <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Data Deleted Successfully
                </div>
                ';

        header('location: ../Admin/services.php');
    } else {
        $_SESSION["notification"] = '
                <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Data Not Deleted .!!
                </div>
                ';
        header('location: ../Admin/services.php');
    }
}

// // ==============================> Delete User <=========================
if (isset($_POST['deleteUser'])) {
    $id = $_POST['deleteUserId'];
    $sql = "DELETE FROM register where id=$id";
    $rows = mysqli_query($conn, $sql);
    if ($rows) {
        $_SESSION["notification"] = '
            <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>  Data Deleted Successfully  </div>';

        header('location: ../Admin/users.php');
    } else {
        $_SESSION["notification"] = '
            <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Data Not Deleted .!!
            </div>
            ';
        header('location: ../Admin/users.php');
    }
}

// // ==============================> Delete category <=========================
if (isset($_POST['deleteCat'])) {
    $id = $_POST['deleteCatId'];
    $deleteCat = mysqli_query($conn, "DELETE FROM categories where id=$id");
    if ($deleteCat) {
        $_SESSION["notification"] = '
    <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>  Data Deleted Successfully  </div>';

        header('location: ../Admin/add_category.php');
    } else {
        $_SESSION["notification"] = '
    <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Data Not Deleted .!!
    </div>
    ';
        header('location: ../Admin/add_category.php');
    }
}

// // ==============================> Delete Request <=========================
if (isset($_POST['deleteRequest'])) {
    $id = $_POST['deleteRequestId'];
    $deleteRequest = mysqli_query($conn, "DELETE FROM requests where id=$id");
    if ($deleteRequest) {
        $_SESSION["notification"] = '
    <div class="alert alert-success d-flex align-items-center alertMsg" role="alert" width="200px">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>  Data Deleted Successfully  </div>';

        header('location: ../Admin/requests.php');
    } else {
        $_SESSION["notification"] = '
    <div class="alert alert-danger d-flex align-items-center alertMsg" role="alert" width="200px">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Data Not Deleted .!!
    </div>
    ';
        header('location: ../Admin/requests.php');
    }
}
