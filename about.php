<?php
session_start();
include "navbar.php"; ?>
<!--About-->
<section class="about container" id="about">
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

    <!-- <div class="box">
        <img class="profile_Img" src="./static/images/osama.jpg">
        <h3>Osama Al-Zubaidi</h3>
    </div>
    <div class="box">
        <img class="profile_Img" src="./static/images/Ghaith.jpg">
        <h3>Ghaith Khdier</h3>
    </div>
    <div class="box">
        <img class="profile_Img" src="./static/images/Abdallah.jpg">
        <h3>Abdallah AL-Raba’i</h3>
    </div>
    <div class="box">
        <img class="profile_Img" src="./static/images/Istbrak.jpg">
        <h3>Istbrak khadrawe</h3>
    </div> -->

    <!-- =====================================-->

    <div class="card box" style="width: 18rem;height: 400px;">
        <img src="./static/images/osama.jpg" class="card-img-top profile_Img" alt="Osama Al-Zubaidi">
        <div class="card-body">
            <h6 class="card-title">Osama Al-Zubaidi</h6>
        </div>
    </div>
    <div class="card box" style="width: 18rem;height: 400px;">
        <img src="./static/images/Ghaith.jpg" class="card-img-top profile_Img" alt="Ghaith Khdier">
        <div class="card-body">
            <h6 class="card-title">Ghaith Khdier</h6>
        </div>
    </div>
    <div class="card box" style="width: 18rem;height: 400px;">
        <img src="./static/images/Abdallah.jpg" class="card-img-top profile_Img" alt="Abdallah AL-Raba’i">
        <div class="card-body">
            <h6 class="card-title">Abdallah AL-Raba’i</h6>
        </div>
    </div>
    <div class="card box" style="width: 18rem;height: 400px;">
        <img src="./static/images/Istbrak.jpg" class="card-img-top profile_Img" alt="Istbrak khadrawe">
        <div class="card-body">
            <h6 class="card-title">Istbrak khadrawe</h6>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>