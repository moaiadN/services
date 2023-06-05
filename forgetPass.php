<?php
include "./processes/_forgetPass.php";
include "navbar.php"; ?>

<body>
    <!--RESET PASSWORD section-->
    <section class="sign_up container">
        <h2>Enter Your Email to Reset Password</h2>
        <form action="" method="POST">
            <?php include('./processes/_errors.php'); ?>
            <div class="form-row">
                <div class="input-data">
                    <input type="email" placeholder="Email Address" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="form-row" class="submit-button">
                <div class="input-data">
                    <div class="inner">
                        <button type="submit" class="btn-style" name="resetPass">Reset Password</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

</body>

</html>