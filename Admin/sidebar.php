<?php


include "../auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./static/styles/style.css">
</head>

<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../static/images/profile.jpg">
                </span>
                <div class="text header-text">
                    <span class="name"><?php echo $_SESSION['auth_user']['fname']; ?></span>
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
                    <li class="nav-link">
                        <a href="./dashboard.php">
                            <i class='bx bx-home-alt-2 icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./contact.php">
                            <i class='bx bx-message-detail icon'></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>
                    <li class="nav-link">
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



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom Js -->
    <script src="./static/js/index.js"></script>
</body>

</html>