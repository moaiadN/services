<?php
include "sidebar.php";
// include "../processes/_remove.php";
?>
<section id="sec" class="home mt-3 px-3">
    <!-- <div class=" text"> -->
    <table class="table table-striped text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Title</th>
                <th scope="col">Details</th>
                <th scope="col">Beds</th>
                <th scope="col">Bathrooms</th>
                <th scope="col">Location</th>
                <th scope="col">Categories</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody id="content" class="">
            <?php
            if ($_SESSION['user']['user_type'] === 's_provider') {
                $rows = mysqli_query($conn, "SELECT * FROM user_services WHERE email ='" . $_SESSION['user']['email'] . "' ORDER BY id ASC");
            } else {
                $rows = mysqli_query($conn, "SELECT * FROM user_services ORDER BY id ASC");
            }
            $sr = 1;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $sr++ ?></td>
                    <td><img style="width:100px;height:100px" src="../layout/images/<?php echo $row['image']; ?>"></td>
                    <td><?php echo $row['price']; ?>JD</td>
                    <td><?php echo $row['title']; ?></td>
                    <td>
                        <div class="overflow-auto text-wrap" style="width:200px;height:150px">
                            <?php echo $row['details']; ?>
                        </div>
                    </td>
                    <td><?php echo $row['number_of_beds']; ?></td>
                    <td><?php echo $row['number_of_bathrooms']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['categories']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <?php if ($_SESSION['user']['user_type'] === 'admin') { ?>
                        <td>
                            <?php
                            echo $row['status'];
                            if ($row['status'] === 'in_service' || $row['status'] === 'out_of_service') { ?>
                                <form action="../processes/_remove.php" method="POST" class="ms-3 mt-3">
                                    <button name="deleteService" class="btn btn-danger mb-2 ms-2">Delete</button>
                                    <input type="hidden" name="deleteServiceId" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="serviceImage" value="<?php echo $row['image']; ?>">
                                </form>

                            <?php } else { ?>
                                <div class="d-flex justify-content-center align-items-center">
                                    <form action="../processes/_remove.php" method="POST" class="ms-1">
                                        <button name="deleteService" class="btn btn-danger">Reject</button>
                                        <input type="hidden" name="deleteServiceId" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="serviceImage" value="<?php echo $row['image']; ?>">
                                    </form>
                                    <form action="../processes/_serviceStatus.php" method="POST" class="ms-1">
                                        <button name="activeService" class="btn btn-primary">Approval</button>
                                        <input type="hidden" name="activeServiceId" value="<?php echo $row['id']; ?>">
                                    </form>
                                </div>
                            <?php } ?>
                        </td>
                    <?php } else { ?>
                        <td>
                            <?php
                            echo $row['status'];
                            if ($row['status'] === 'in_service') {
                            ?>
                                <form action="../processes/_serviceStatus.php" method="POST" class="ms-1">
                                    <button name="outOfService" class="btn btn-warning">Out Of Service</button>
                                    <input type="hidden" name="outOfServiceId" value="<?php echo $row['id']; ?>">
                                </form>
                            <?php } else if ($row['status'] === 'out_of_service') { ?>
                                <form action="../processes/_serviceStatus.php" method="POST" class="ms-1">
                                    <button name="inService" class="btn btn-warning">Back To Service</button>
                                    <input type="hidden" name="inServiceId" value="<?php echo $row['id']; ?>">
                                </form>
                        </td>
                </tr>
    <?php }
                        }
                    endforeach; ?>
        </tbody>
    </table>
    <!-- </div> -->
</section>



<?php include_once 'footer.php' ?>
