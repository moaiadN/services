<?php
include_once '../processes/connection.php';
include_once "sidebar.php";
include_once "../processes/_addCategory.php"
?>

<section class="home m-5 ps-5 row">
    <div class=" col-lg-4">
        <form method="POST" class="m-auto needs-validation" enctype="multipart/form-data" novalidate>
            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
            <div class="input-group mb-2">
                <label class="input-group-text" for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary form-control mb-3" name="submit">Save</button>
        </form>
    </div>
    <div class="col-lg-6">
        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM categories ORDER BY id ASC");
                foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $row['cat_name']; ?></td>
                        <td><img style="width:100px;height:100px" src="../layout/images/<?php echo $row['cat_img'];; ?>">
                        </td>
                        <td>
                            <form action="../processes/_remove.php" method="POST" class="ms-3">
                                <button name="deleteCat" class="btn btn-danger mb-2 ms-2">Delete</button>
                                <input type="hidden" name="deleteCatId" value="<?php echo $row['id']; ?>">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php include_once 'footer.php' ?>