<?php
include "sidebar.php";
include '../processes/_addUser.php'
?>
<section class="home">
    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid d-flex justify-content-end">
            <a class="navbar-brand fs-4  d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class='bx bx-user-plus fs-2'></i>
                New User
            </a>
        </div>
    </nav>
    <div class="text">
        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">User Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sr = 1;
                $rows = mysqli_query($conn, "SELECT * FROM register ORDER BY user_type ASC");
                foreach ($rows as $row) :
                    if ($row['user_type'] !== 'admin') {
                ?>
                        <tr>
                            <td><?php echo $sr++ ?></td>
                            <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['user_type']; ?></td>
                            <td>
                                <a href="../processes/_remove.php?id=<?php echo $row['id']; ?>" name="deleteUser" class="btn btn-danger mb-2 ms-2">Delete</a>
                            </td>
                        </tr>
                <?php }
                endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- ======================= Modal ======================= -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mb-3">
                        <form method="POST" class="row needs-validation" novalidate>
                            <div class="mb-3 col-lg-6">
                                <!-- <label for="validationCustom01" class="form-label">First name</label> -->
                                <input type="text" class="form-control" id="validationCustom01" name="fname" value="<?php echo $fname ?>" placeholder="First name" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <!-- <label for="validationCustom02" class="form-label">Last name</label> -->
                                <input type="text" class="form-control" id="validationCustom02" name="lname" value="<?php echo $lname ?>" placeholder="Last name" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <!-- <label for="validationCustomUsername" class="form-label">Email</label> -->
                                <input type="email" class="form-control" id="validationCustomUsername" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <!-- <label for="validationCustom03" class="form-label">Phone Number</label> -->
                                <input type="text" class="form-control" id="validationCustom03" name="phone_number" value="<?php echo $phone_number ?>" placeholder="Phone Number" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <!-- <label for="validationCustom05" class="form-label">Password</label> -->
                                <input type="password" class="form-control" id="validationCustom05" name="password" placeholder="Password" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <!-- <label for="validationCustom04" class="form-label">User Type</label> -->
                                <select class="form-select" id="validationCustom04" name="userType" required>
                                    <!-- <option selected disabled value="">Choose...</option> -->
                                    <option selected disabled value="">User Type</option>
                                    <option value="s_provider" name="s_provider"> s_provider </option>
                                    <option value="admin" name="admin"> admin </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="submit">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php' ?>