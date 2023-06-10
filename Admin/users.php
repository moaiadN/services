<?php
include "sidebar.php";
include '../processes/_addUser.php'
?>
<section class="home" id="userSection">
    <div class=" my-2 me-5 d-flex justify-content-end">
        <a href="pdfReport.php" class="btn btn-info link-light">Generate Report</a>
        <!-- <button onclick="generatePDF()" class="btn btn-info link-light ms-2">Save as PDF</button> -->
    </div>
    <div id="html2pdf">
        <div class="text mb-2">
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
                        if ($row['user_type'] !== 'admin' && $row['user_type'] !== 'pending') {
                    ?>
                    <tr>
                        <td><?php echo $sr++ ?></td>
                        <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['user_type'] ?></td>
                        <td>
                            <form action="../processes/_remove.php" method="POST" class="ms-3">
                                <button name="deleteUser" class="btn btn-danger mb-2 ms-2">Delete</button>
                                <input type="hidden" name="deleteUserId" value="<?php echo $row['id']; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php  } ?>

                    <?php endforeach; ?>
                </tbody>
            </table>
            <hr class="border border-secondary border-2 opacity-75">
        </div>
        <!-- ======================================================================================= -->
        <div class="text">
            <h4>Service Provider Requests</h4>
            <table class="table table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id Image</th>
                        <th scope="col">Nationality Id</th>
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
                    $rows = mysqli_query($conn, "SELECT * FROM register INNER JOIN providerid on register.id = providerid.registerId ORDER BY user_type ASC");
                    foreach ($rows as $row) :
                        if ($row['user_type'] !== 'admin' && $row['user_type'] == 'pending') {
                    ?>
                    <tr>
                        <td><?php echo $sr++ ?></td>
                        <td id="image"><img style="width:100px;height:100px"
                                src="../layout/images/<?php echo $row['image']; ?>">
                        </td>
                        <td><?php echo $row['id_number']; ?></td>
                        <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td>
                            <form action="" method="post">
                                <?php if ($row['user_type'] == 'pending') {
                                        ?>
                                <input type="hidden" name="id" value="<?php echo $row['registerId']; ?>">
                                <button type="submit" class="btn btn-info mb-2 ms-2" name="changeType">Approve</button>
                                <?php } ?>
                            </form>
                        </td>
                        <td>
                            <form action="../processes/_remove.php" method="POST" class="ms-3">
                                <button name="deleteUser" class="btn btn-danger mb-2 ms-2">Delete</button>
                                <input type="hidden" name="deleteUserId" value="<?php echo $row['registerId']; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php }
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="popup-image">
    <span>&times;</span>
    <img src="../layout/images/<?php echo $row['image']; ?>">

</div>
<?php include_once 'footer.php' ?>