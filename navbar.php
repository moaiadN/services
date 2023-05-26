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

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Uni-Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#properties">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact us</a>
                    </li>

                    <!-- Modal 1-->
                    <!-- <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                            <div class="modal fade" id="cardInfo" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add service</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group mb-4">
                                                <label class="input-group-text" for="inputGroupFile01">Select
                                                    Image</label>
                                                <input type="file" class="form-control" id="inputGroupFile01"
                                                    name="image" accept=".jpg, .jpeg, .png">
                                            </div>
                                            <div class="col-12 mb-4">
                                                <label for="inputAddress2" class="form-label">Price</label>
                                                <input type="text" class="form-control" id="inputAddress2" name="price">
                                            </div>
                                            <div class="col-12  mb-4">
                                                <label for="inputAddress2" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="inputAddress2" name="title">
                                            </div>
                                            <div class="col-12  mb-4">
                                                <label for="inputAddress" class="form-label">Details</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                                    name="details">
                                            </div>

                                            <div class="col-ms-2  mb-4">
                                                <label for="inputCity" class="form-label">Number OF Beds</label>
                                                <input type="number" class="form-control" name="number_of_beds">
                                            </div>

                                            <div class="col-me-2  mb-4">
                                                <label for="inputZip" class="form-label">Number Of Bathrooms</label>
                                                <input type="number" class="form-control" name="number_of_bathrooms">
                                            </div>
                                            <div class="col-12  mb-4">
                                                <label for="inputAddress2" class="form-label">Location</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    name="location">
                                            </div>
                                            <div class="col-md  mb-4">
                                                <div class="form-floating">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="categories">
                                                        <option selected>Select Categorie</option>
                                                        <option value="Student Apartments" name="Student Apartments">
                                                            Student
                                                            Apartments</option>
                                                        <option value=" Study Places" name="Study Places">Study Places
                                                        </option>
                                                        <option value="Student option3" name="Student option3">Student
                                                            option3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn" data-bs-target="#contactForm" data-bs-toggle="modal"
                                                data-bs-dismiss="modal">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!- Modal 2->
                            <div class="modal fade" id="contactForm" tabindex="-1" aria-labelledby="exampleModalLabe2"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row-6 mb-4">
                                                <label for="inputAddress2" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="inputAddress2" name="fname">
                                            </div>
                                            <div class="row-6 mb-4">
                                                <label for="inputAddress2" class="form-label">Second Name</label>
                                                <input type="text" class="form-control" id="inputAddress2" name="lname">
                                            </div>
                                            <div class="row-6  mb-4">
                                                <label for="inputAddress2" class="form-label">email</label>
                                                <input type="email" class="form-control" id="inputAddress2"
                                                    name="email">
                                            </div>
                                            <div class="row-6  mb-4">
                                                <label for="inputAddress" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                                    name="phone_number">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="submit">Save
                                                    changes</button>
                                            </div>
                                            <a class="btn" data-bs-target="#cardInfo" data-bs-toggle="modal"
                                                data-bs-dismiss="modal">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                </ul>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pe-5  me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    </a>
                    <ul class="dropdown-menu">
                        <!-- Button trigger modal -->
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#cardInfo">Add
                                service</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
                <?php
                if (isset($_SESSION['email'])) { ?>
                    <a href="logout.php"><button class="btn">Logout</button></a>
                <?php } else { ?>
                    <a href="./login.php"><button class="btn">Login</button></a>
                <?php } ?>
            </div>
        </div>
    </nav>