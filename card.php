<?php
session_start();
include "navbar.php"; ?>

<section class="properties container" id="properties">
    <div class="heading">
        <h2>Choose from the following services</h2>
        <p>Find your need well, there are many providers</p>
    </div>
    <div class="properties-container container">
        <!--Box 1-->
        <div class="box">
            <img src="./layout/images/img9.jpg">
            <h3>300 JD</h3>
            <div class="contant">
                <div class="text">
                    <h3>The Palace</h3>
                    <p>Jordan-Irbid</p>
                </div>
                <div class="icon">
                    <i class='bx bx-bed'><span>5</span></i>
                    <i class='bx bx-bath'><span>2</span></i>
                </div>
            </div>
            <a href="./details.php" class="btn d-flex justify-content-center">More Details</a>
            <a class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                More Details
            </a>
        </div>
        <div class="modal fade" id="DetailsModal" tabindex="-1" aria-labelledby="More DetailsModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="More DetailsModal">More Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        To See More Details Login.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a class="btn" href="./login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Box 2-->
        <div class="box">
            <img src="./layout/images/img8.jpg">
            <h3>250 JD</h3>
            <div class="contant">
                <div class="text">
                    <h3>The Palace</h3>
                    <p>Jordan-Irbid</p>
                </div>
                <div class="icon">
                    <i class='bx bx-bed'><span>2</span></i>
                    <i class='bx bx-bath'><span>1</span></i>
                </div>
            </div>
            <a href="./details.php" class="btn d-flex justify-content-center">More Details</a>
            <a class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                More Details
            </a>
        </div>
        <!--Box 3-->
        <div class="box">
            <img src="./layout/images/img7.jpg">
            <h3>380 JD</h3>
            <div class="contant">
                <div class="text">
                    <h3>The Palace</h3>
                    <p>Jordan-Irbid</p>
                </div>
                <div class="icon">
                    <i class='bx bx-bed'><span>5</span></i>
                    <i class='bx bx-bath'><span>3</span></i>
                </div>
            </div>
            <a href="./details.php" class="btn d-flex justify-content-center">More Details</a>
            <a class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                More Details
            </a>
        </div>
        <!--Box 4-->
        <div class="box">
            <img src="./layout/images/img6.jpg">
            <h3>120 JD</h3>
            <div class="contant">
                <div class="text">
                    <h3>The Palace</h3>
                    <p>Jordan-Irbid</p>
                </div>
                <div class="icon">
                    <i class='bx bx-bed'><span>1</span></i>
                    <i class='bx bx-bath'><span>1</span></i>
                </div>
            </div>
            <a href="./details.php" class="btn d-flex justify-content-center">More Details</a>
            <a class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                More Details
            </a>
        </div>
        <!--Box 5-->
        <div class="box">
            <img src="./layout/images/img3.jpg">
            <h3>320 JD</h3>
            <div class="contant">
                <div class="text">
                    <h3>The Palace</h3>
                    <p>Jordan-Irbid</p>
                </div>
                <div class="icon">
                    <i class='bx bx-bed'><span>3</span></i>
                    <i class='bx bx-bath'><span>2</span></i>
                </div>
            </div>
            <a href="./details.php" class="btn d-flex justify-content-center">More Details</a>
            <a class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                More Details
            </a>
        </div>
        <!--Box 6-->
        <div class="box">
            <img src="./layout/images/img2.jpg">
            <h3>170 JD</h3>
            <div class="contant">
                <div class="text">
                    <h3>The Palace</h3>
                    <p>Jordan-Irbid</p>
                </div>
                <div class="icon">
                    <i class='bx bx-bed'><span>2</span></i>
                    <i class='bx bx-bath'><span>1</span></i>
                </div>
            </div>
            <a href="./details.php" class="btn d-flex justify-content-center">More Details</a>
            <a href="./details.php" class="btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#DetailsModal">
                More Details
            </a>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>