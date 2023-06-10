<?php
session_start();
include "navbar.php";
include "./processes/_visitorsMsg.php";
?>

<section class="home container" id="home">
    <div class="home-text">
        <h1>Find The Best <br> Place</h1>
        <!-- <a href="./register.php" class="btn">Sign Up</a> -->
    </div>
</section>
<!--About-->
<section class="about container" id="about">
    <div class="about-img">
        <img src="./layout/images/img12.jpg">
    </div>
    <div class="about-text m-0">
        <h1 style="text-align: center;">About Uni-Services</h1>
        <h2 style="text-align: center;">We present to you our website designed to make university life easier
            for
            students</h2>
        <p style="text-align: center;">With competitive prices and a wide range of services available, we offer housing
            options and collect study places nearby, both on and off campuses. Our platform connects you with private
            and public bookstores that sell study supplies, ensuring you have everything you need to succeed</p>
        <p style="text-align: center;">Join our community now and enjoy a hassle-free study experience like never
            before!</p>
        <a href="./about.php" class="btn">Read More</a>
    </div>
</section>
<!--Sales-->
<!--Services-->
<section class="properties container" id="properties">
    <div class="heading">
        <h2>Available services</h2>
        <p>We offer you many services that serve your academic needs</p>
    </div>
    <div class="properties-container container">
        <?php
        $rows = mysqli_query($conn, "SELECT * FROM categories");
        foreach ($rows as $row) : ?>
            <!--Box 1-->
            <!-- <a class="card-content" href="./card.php"> -->
            <a href="./card.php?id=<?php echo $row['id'] ?>">
                <div class="box">
                    <img src="./layout/images/<?php echo $row['cat_img']; ?>">
                    <div class="contant">
                        <div class="text">
                            <h3><?php echo $row['cat_name']; ?></h3>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</section>
<!--Newsletter-->
<section class="sales container" id="sales">
    <div class="box">
        <i class='bx bx-home-alt'></i>
        <h3>Enjoy Your New Home</h3>
        <p>Find the right housing option for you and your needs among the options</p>
    </div>
    <div class="box">
        <i class='bx bx-home-alt'></i>
        <h3>Study in a quiet place</h3>
        <p>Find the best places to study among the options</p>
    </div>
    <div class="box">
        <i class='bx bx-home-alt'></i>
        <h3>Library services for students</h3>
        <p>Find the best bookstores to buy your academic needs</p>
    </div>
</section>

<!-- CONTACT FORM -->
<section class="newsletter container" id="contact">
    <h2>Have Question In Your Mind? <br>Let Us Help You!</h2>
    <form action="" method="POST">
        <?php include('./processes/_errors.php'); ?>
        <div class="form-row">
            <div class="input-data">
                <input type="text" placeholder="Enter Your First  Name" name="name" value="<?php echo $name ?>">
            </div>
            <div class="input-data">
                <input type="email" placeholder="Enter Your Email Address" name="email" value="<?php echo $email ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" placeholder="Mail Subject" name="subject" value="<?php echo $subject ?>">
            </div>
            <div class="input-data">
                <input type="text" placeholder="Enter Your Phone Number" name="phone_number" value="<?php echo $phone_number ?>">
            </div>
        </div>
        <div class="form-row textarea">
            <div class="input-data">
                <textarea id="textarea" cols="37" rows="3" placeholder="Write Your Question Here" name="message" value="<?php echo $message ?>"></textarea>
            </div>
        </div>
        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <button class="btn-style" name="visitorsMsg">Submit</button>
            </div>
        </div>
    </form>
</section>

<?php include "footer.php"; ?>