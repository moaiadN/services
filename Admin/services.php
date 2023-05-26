<?php
include "sidebar.php";
?>
<section id="sec" class="home mt-3 px-3">
    <?php
    if (isset($_SESSION["status"])) {
        echo '<h3>' . $_SESSION["status"] . '</h3>';
        unset($_SESSION["status"]);
    }
    ?>
    <!-- <div class="text"> -->
    <table class="table table-striped text-center">
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
        <tbody>
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM user_services ORDER BY id DESC");
            $sr = 1;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $sr++ ?></td>
                    <td><img style="width:100px;height:100px" src="../layout/images/<?php echo $row['image']; ?>"></td>
                    <td><?php echo $row['price'] . "$"; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td>
                        <div class="overflow-auto text-wrap" style="width:200px;height:150px">
                            <?php echo $row['details']; ?></div>
                    </td>
                    <td><?php echo $row['number_of_beds']; ?></td>
                    <td><?php echo $row['number_of_bathrooms']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['categories']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td>
                        <a href="../processes/_remove.php?id=<?php echo $row['id']; ?>" name="deleteService" class="btn btn-danger mb-2 ms-2">Reject</a>

                        <?php if (!$row['status'] == 'done') : ?>
                            <a href="../processes/_serviceStatus.php?id=<?php echo $row['id']; ?>" name="serviceStatus" class="btn btn-info">Approve</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- </div> -->
</section>



<?php include_once 'footer.php' ?>