<?php
include "./processes/_updatePass.php";
include "navbar.php"; ?>

<body>
    <!--RESET PASSWORD section-->
    <section class="sign_up container">
        <h2>RESET PASSWORD</h2>
        <form action="" method="POST">
            <?php include('./processes/_errors.php'); ?>
            <div class="form-row">
                <div class="input-data">
                    <input type="password" placeholder="New Password" name="newPass" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="password" placeholder="Confirm Password" name="confPass">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-row" class="submit-button">
                <div class="input-data">
                    <div class="inner">
                        <button type="submit" class="btn-style" name="passUpdate">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

</body>

</html>