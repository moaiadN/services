<?php
include "./processes/_login.php";
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
    <!--SignIn section-->
    <section class="sign_up container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            </ol>
        </nav>
        <hr>
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

    <?php //include "footer.php"; 
    ?>