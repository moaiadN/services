<?php
session_start();
include_once './processes/connection.php';
//include "navbar.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Uni-Services</title>
    <link rel="stylesheet" href="./layout/css/style.css">
</head>

<body>
    <section class="properties container" id="properties">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Card</li>
            </ol>
        </nav>
        <div class="heading">
            <h2>Choose from the following services</h2>
            <p>Find your need well, there are many providers</p>
        </div>
        <div class="properties-container container">
            <!--Box 1-->
            <?php
            $cat_id = $_GET['id'];
            $rows = mysqli_query($conn, "SELECT * FROM user_services WHERE cat_id = '$cat_id' AND status ='in_service' ");
            if (!mysqli_num_rows($rows) > 0) {
                echo " <div class='text-center'> <h1 class='' style='color: #dbdada;'>No Data Available....</h1></div>";
            } else {
                foreach ($rows as $row) { ?>
                    <div class="box">
                        <img src="./layout/images/<?php echo $row['image'] ?>">
                        <div class="boxTitle mt-2 px-3">
                            <h3><?php echo $row['price'] ?>JD</h3>
                            <div class="text mt-0">
                                <h3>Price :&nbsp; </h3>
                                <h6><?php echo $row['title'] ?> | <small><i><?php echo $row['city'] ?></small></i></h6>
                                <h6><?php echo $row['categories'] ?></h6>
                            </div>
                            <div class="icon">
                                <i class='bx bx-bed'><span><?php echo $row['number_of_beds'] ?></span></i>
                                <i class='bx bx-bath'><span><?php echo $row['number_of_bathrooms'] ?></span></i>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <a href="./details.php?id=<?php echo $row['id'] ?>" class="btn d-flex justify-content-center">More
                                Details</a>
                        <?php } else { ?>
                            <a class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                                More
                                Details </a><?php } ?>
                    </div>
            <?php }
            }
            ?>
            <!-- ============ MODAL ============== -->
            <div class="modal fade" id="DetailsModal" tabindex="-1" aria-labelledby="More DetailsModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="More DetailsModal">More Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            To See More Details Login.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a class="btn" href="./login.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============ /MODAL ============== -->
        </div>
    </section>
    <?php include "footer.php"; ?>