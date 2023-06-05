<?php include "sidebar.php"; ?>


<body>

    <section class="home">
        <div class="text"></div>
        <div class="container">
            <div class="main-body m-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="../layout/images/profile.jpg" class="rounded-circle p-1 bg-primary" width="170" alt="Admin">
                                    <div class="mt-3">
                                        <h4><?php echo $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['lname'] ?>
                                        </h4>
                                        <p class="text-secondary mb-1"><?php echo $_SESSION['user']['email'] ?></p>
                                        <p class="text-muted font-size-sm">
                                            <?php echo $_SESSION['user']['phone_number'] ?></p>
                                        <p class="text-secondary mb-1"><?php echo $_SESSION['user']['user_type'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Custom Js -->
    <script src="./layout/js/index.js"></script>
</body>

</html>