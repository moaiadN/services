<?php
include "sidebar.php";
include '../processes/_addUser.php'
?>

<section class="home">
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
                            <td>
                                <form action="" method="post">
                                    <select name="typeUser" id="">
                                        <option value="s_provider" <?php if ($row['user_type'] == 's_provider') {
                                                                        echo 'selected';
                                                                    } ?>>s_provider</option>
                                        <option value="user" <?php if ($row['user_type'] == 'user') {
                                                                    echo 'selected';
                                                                } ?>>user</option>
                                    </select>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-info mb-2 ms-2" name="changeUserType">Change</button>
                                </form>
                            </td>
                            <td>
                                <form action="../processes/_remove.php" method="POST" class="ms-3">
                                    <button name="deleteUser" class="btn btn-danger mb-2 ms-2">Delete</button>
                                    <input type="hidden" name="deleteUserId" value="<?php echo $row['id']; ?>">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>

                <?php endforeach; ?>
            </tbody>
            <group>

                <?php if ($row['user_type'] == 'admin') { ?>
                    <tr>
                        <td><?php echo $sr++ ?></td>
                        <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['user_type'] ?> </td>
                    </tr>
                <?php } ?>
            </group>
        </table>
    </div>

</section>

<?php include_once 'footer.php' ?>