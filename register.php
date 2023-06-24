  <script>
      window.history.forward();
  </script>
  <?php
    include "./processes/_register.php";
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
      <!--SignUp section-->
      <section class="sign_up container">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
              </ol>
          </nav>
          <hr>
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
                      <input type="text" placeholder="Phone Number" name="phone_number" min="10" max="10" value="<?php echo $phone_number; ?>">
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
                      <select name="userType" class="form-select">
                          <option selected value="">Select one of User type </option>
                          <option value="s_provider">s_provider</option>
                          <option value="user">user</option>
                      </select>
                  </div>
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


      <?php //include "footer.php"; 
        ?>