<?php
include "sidebar.php";
$rows = mysqli_query($conn, "SELECT * FROM contact ORDER BY id ASC");
?>

<section class="home">
    <?php
    // if (isset($_SESSION["notification"])) {
    //     echo '<h3>' . $_SESSION["notification"] . '</h3>';
    //     unset($_SESSION["notification"]);
    // }
    ?>
    <div class="text">
        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sr = 1;
                ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $sr++ ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td>
                            <form action="../processes/_remove.php" method="POST" class="ms-3">
                                <button name="deleteCont" class="btn btn-danger mb-2 ms-2">Delete</button>
                                <input type="hidden" name="deleteId" value="<?php echo $row['id']; ?>">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php include_once 'footer.php' ?>