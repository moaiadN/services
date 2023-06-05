<?php include "sidebar.php"; ?>
<section id="sec" class="home mt-3 px-3">
    <table class="table table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM requests ORDER BY id ASC");
            $sr = 1;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $sr++ ?></td>
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['serviceCat']; ?></td>
                    <td><?php echo $row['serviceTitle']; ?></td>
                    <td><?php echo $row['servicePrice'] . "JD"; ?></td>
                    <td>
                        <form action="../processes/_remove.php" method="POST" class="ms-3">
                            <button name="deleteRequest" class="btn btn-danger mb-2 ms-2">Reject</button>
                            <input type="hidden" name="deleteRequestId" value="<?php echo $row['id']; ?>">
                        </form>
                        <a href="#" name="serviceStatus" class="btn btn-info">Approve</a>
                    </td>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
</section>



<?php include_once 'footer.php' ?>