<?php
include "../processes/_login.php";
if (!$_SESSION['email']) {
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Services Provider</title>
        <link rel="stylesheet" href="layout/css/style.css">
    </head>

    <body>

        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="../layout/images/profile.jpg">
                    </span>
                    <div class="text header-text">
                        <span class="name">
                            <?php
                        $email = $_SESSION['email']['email'];
                        $query = mysqli_query($conn, "SELECT fname, user_type FROM register WHERE email='$email'");
                        while ($row = mysqli_fetch_assoc($query)) { ?>
                            <strong><?php echo $row['fname']; ?></strong>
                            <small> <i style="color: #888;">(<?php echo $row['user_type'];
                                                            } ?>)</i> </small>
                        </span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">

                        <i class='bx bx-search-alt-2 icon'></i>
                        <input type="search" placeholder="search...">

                    </li>
                    <ul class="menu-links">
                        <!-- <li class="nav-link">
                        <a href="./dashboard.php">
                            <i class='bx bx-home-alt-2 icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li> -->
                        <li class="nav-link" title="Contact">
                            <a href="./contact.php">
                                <i class='bx bx-message-detail icon'></i>
                                <span class="text nav-text">Contact</span>
                            </a>
                        </li>
                        <!-- <li class="nav-link" title="Add Service">
                            <a href="./add_service.php">
                                <i class='bx bx-message-detail icon'></i>
                                <span class="text nav-text">Add Service</span>
                            </a>
                        </li> -->
                        <li class="nav-link" title="Services">
                            <a href="./services.php">
                                <i class='bx bx-task icon'></i>
                                <span class="text nav-text">Services</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profile</span></a>
                        </a>
                    </li>
                    <li class="">
                        <a href="../logout.php">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Logout</span></a>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="moon-sun">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark Mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>