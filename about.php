<?php
session_start();
//include "navbar.php"; 
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
        <!--About-->
        <section class="container" id="about">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
            <div class="about-text">
                <span>About Uni-Services</span>
                <h2>We present to you our website designed to make university life easier for students</h2>
                <p>Our website is the ultimate solution for university students! We provide a range of services at
                    competitive prices, including housing options and nearby study places, whether within or outside
                    university premises. Our platform makes it easy for you to choose your preferred study place and
                    make
                    reservations, so you can focus on achieving academic success. Additionally, we offer a directory of
                    private and public libraries that sell study supplies, ensuring you have everything you need for
                    your
                    studies. Our site is designed to cater to two types of users: service providers and students seeking
                    services, with easy-to-use features for both. </p>
                <p>Join our community now and enjoy a hassle-free study experience like never before!</p>

            </div>
        </section>

        <!--Sales-->
        <h2 style="text-align:center;">Our Team</h2>
        <section class="sales container" id="sales">

            <div class="card box" style="width: 18rem;height: 300px;">
                <img src="./layout/images/osama.jpg" class="card-img-top profile_Img" alt="Osama Al-Zubaidi">
                <div class="card-body">
                    <h6 class="card-title">Osama Al-Zubaidi</h6>
                </div>
            </div>
            <div class="card box" style="width: 18rem;height: 300px;">
                <img src="./layout/images/Ghaith.jpg" class="card-img-top profile_Img" alt="Ghaith Khdier">
                <div class="card-body">
                    <h6 class="card-title">Ghaith Khdier</h6>
                </div>
            </div>
            <div class="card box" style="width: 18rem;height: 300px;">
                <img src="./layout/images/Abdallah.jpg" class="card-img-top profile_Img" alt="Abdallah AL-Raba’i">
                <div class="card-body">
                    <h6 class="card-title">Abdallah AL-Raba’i</h6>
                </div>
            </div>
            <div class="card box" style="width: 18rem;height: 300px;">
                <img src="./layout/images/Istbrak.jpg" class="card-img-top profile_Img" alt="Istbrak khadrawe">
                <div class="card-body">
                    <h6 class="card-title">Istbrak khadrawe</h6>
                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>