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
                    <!-- <a href="./processes/_forgetPass.php" class="text-decoration-none">Forget Password?</a> -->
                </div>
                <a class="text-decoration-none" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Forget
                    Password?</a>
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
    <!-- Modal -->
    <form class="row g-3" method="POST" action="">
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row-6  mb-4">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <a href="./processes/_forgetPass.php"> -->
                        <button class=" btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Send
                            password reset email</button>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include "footer.php"; ?>