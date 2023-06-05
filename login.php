<?php
include "./processes/_login.php";
include "navbar.php"; ?>

<body>
    <!--SignIn section-->
    <section class="sign_up container">
        <h2>Welcome Back</h2>
        <form action="" method="POST">
            <?php include('./processes/_errors.php'); ?>
            <div class="form-row">
                <div class="input-data">
                    <input type="email" placeholder="Email Address" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="password" placeholder="Password" name="pass">
                </div>
            </div>
            <div class="form-row">
                <div class="input-data d-flex justify-content-between">
                    <p> Don't have an account! <a href="./register.php">Signup</a></p>
                    <a href="forgetPass.php" class="text-decoration-none">Forget Password?</a>
                </div>
            </div>
            <div class="form-row" class="submit-button">
                <div class="input-data">
                    <div class="inner">
                        <button type="submit" class="btn-style" name="LOGIN">LOGIN</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- =================================== -->

    <?php include "footer.php"; ?>