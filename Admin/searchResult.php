<?php
include "sidebar.php";
// include "../processes/_remove.php";
?>
<section id="sec" class="home mt-3 px-3">
    <!-- <div class=" text"> -->
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
            if (isset($_POST["searchBtn"])) {
                $unfound = '';
                $search = $_POST['search'];
                $rows = mysqli_query($conn, "SELECT * FROM user_services WHERE title LIKE'%$search%' ORDER BY id ASC");
                if ($search == "") {
                    // return   header('location: services.php');
            ?>
                    <script>
                        location.href = 'services.php';
                    </script>
                    <?php
                } else {
                    $sr = 1;
                    foreach ($rows as $row) :
                        if ($search !== $row['title']) {
                            $unfound =
                                " <div class='text-center'> <h1 class='' style='color: #dbdada;'>No Results Found....</h1></div>";
                        } else {
                    ?>
                            <tr>
                                <td><?php echo $sr++ ?></td>
                                <td><img style="width:100px;height:100px" src="../layout/images/<?php echo $row['image']; ?>"></td>
                                <td><?php echo $row['price']; ?>JD</td>
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
                                <?php if ($_SESSION['user']['user_type'] === 'admin') { ?>
                                    <td>
                                        <?php if ($row['status'] === 'done') { ?>
                                            <form action="../processes/_remove.php" method="POST" class="ms-3">
                                                <button name="deleteService" class="btn btn-danger mb-2 ms-2">Delete</button>
                                                <input type="hidden" name="deleteServiceId" value="<?php echo $row['id']; ?>">
                                                <input type="hidden" name="serviceImage" value="<?php echo $row['image']; ?>">
                                            </form>
                                        <?php } else { ?>
                                            <form action="../processes/_remove.php" method="POST" class="ms-3">
                                                <button name="deleteService" class="btn btn-danger mb-2 ms-2">Reject</button>
                                                <input type="hidden" name="deleteServiceId" value="<?php echo $row['id']; ?>">
                                                <input type="hidden" name="serviceImage" value="<?php echo $row['image']; ?>">
                                            </form>
                                            <a href="../processes/_serviceStatus.php?id=<?php echo $row['id']; ?>" name="serviceStatus" class="btn btn-info">Approve</a>
                                        <?php } ?>
                                    </td>
                                <?php } else { ?>
                                    <td><?php echo $row['status']; ?></td>
                            </tr>
        <?php }
                            }
                        endforeach;
                    }
                } ?>
        </tbody>
    </table>
    <!-- </div> -->
    <?php echo $unfound; ?>
</section>



<?php include_once 'footer.php' ?>