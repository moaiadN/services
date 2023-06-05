<?php
session_start();
include_once './processes/connection.php';
if (!$_SESSION['user']) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Uni-Services</title>
        <link rel="stylesheet" href="./layout/css/style.css">
    </head>

    <body>
        <?php
    if (isset($_SESSION["success"])) {
        echo '<h3>' . $_SESSION["success"] . '</h3>';
        unset($_SESSION["success"]);
    }
    ?>
        <div class="container details-sec">
            <?php
        $id = $_GET['id'];
        $rows = mysqli_query($conn, "SELECT * FROM user_services WHERE id = '$id' ");
        if (mysqli_num_rows($rows) > 0) {
            $row = mysqli_fetch_assoc($rows);

        ?>
            <div class="mb-3 icon_link arrowBack">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="./card.php?id=<?php echo $row['cat_id'] ?>">Card</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </nav>
                <!-- <a href="./card.php?id=<?php echo $row['cat_id'] ?>"><i class='bx bx-arrow-back arrow'></i></a> -->
            </div>
            <div>
                <img style="width:500px" src="./layout/images/<?php echo $row['image'] ?>">
            </div>
            <div class="details-text">
                <div class="">
                    <h2><?php echo $row['title'] ?></h2>
                    <h6><?php echo $row['categories'] ?> | <small><i><?php echo $row['city'] ?></small></i></h6>
                    <p><?php echo $row['price'] ?>JD</p>
                    <p><?php echo $row['details'] ?></p>
                </div>

                <div class="display-images">
                    <?php
                    $adImgs = mysqli_query($conn, "SELECT * FROM added_imgs WHERE title ='" . $row['title'] . "'");
                    foreach ($adImgs as $adImg) {
                    ?>
                    <img class="details-img" src="./layout/images/<?php echo $adImg['imgName'] ?>">
                    <?php } ?>
                </div>

                <div class="details-btn">
                    <a href="./processes/_requests.php?id=<?php echo $row['id'] ?>" class="btn" id="liveAlertBtn">Book
                        Now</a>
                </div>
            </div>
        </div>



        <?php }
        include "footer.php"; ?>