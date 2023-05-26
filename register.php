<?php
include "./processes/_register.php";
include "navbar.php";
?>
<!--SignUp section-->
<section class="sign_up container">
    <h2>Welcome, join us now and become a member of our community</h2>
    <form method="POST" action="">
        <?php include('./processes/_errors.php'); ?>
        <div class="form-row">
            <div class="input-data">
                <input type="text" placeholder="First  Name" name="fname" value="<?php echo $fname; ?>">
            </div>
            <div class="input-data">
                <input type="text" placeholder="Last  Name" name="lname" value="<?php echo $lname; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="email" placeholder="Email Address" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-data">
                <input type="text" placeholder="Phone Number" name="phone_number" max="10" value="<?php echo $phone_number; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="password" placeholder="Password" name="pass1" min="6" value="">
            </div>
            <div class="input-data">
                <input type="password" placeholder="Confirm Password" name="pass2" value="">
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <p>Already have an account! <a href="login.php">Login</a></p>
            </div>
        </div>
        <div class="form-row" class="submit-button">
            <div class="input-data">
                <div class="inner">
                    <button type="submit" class="btn-style" name="SIGNUP">SIGNUP</button>
                </div>
            </div>
        </div>
    </form>
</section>
<?php include "footer.php"; ?>