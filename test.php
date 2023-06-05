<?php
$conn = new mysqli("localhost", "root", "", "test");

if (isset($_POST['submit'])) {


    $title = $_POST['title'];

    $imageCount = count($_FILES['images']['name']);
    for ($i = 0; $i < $imageCount; $i++) {
        $imageName = $_FILES['images']['name'][$i];
        $imageTmp   = $_FILES['images']['tmp_name'][$i];
        if (move_uploaded_file($imageTmp, './layout/images/imgs/' . $imageName)) {
            $query = mysqli_query($conn, "INSERT INTO images VALUES ('','$imageName','$title')");
        }
    }
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $no = $_POST['no'];

    $getImg =  mysqli_query($conn, "SELECT * FROM images WHERE no= $no");
    $rows = mysqli_num_rows($getImg);

    for ($i = 1; $i <= $rows; $i++) {
        $result = mysqli_fetch_array($getImg);
        unlink('./layout/images/imgs/' . $result['imgName']);
        // echo $result['imgName'];
    }

    $imgsDel = mysqli_query($conn, "DELETE FROM images where no = $no");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Uni-Services</title>
    <link rel="stylesheet" href="./layout/css/style.css">
</head>

<body>
    <section class=" m-5 ps-5 row">
        <div class=" col-lg-4">
            <form method="POST" class="m-auto needs-validation" enctype="multipart/form-data" novalidate>
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <div class="input-group mb-2">
                    <label class="input-group-text" for="image">Image</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                </div>
                <div class="mb-2">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
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
                    $rows = mysqli_query($conn, "SELECT * FROM images");
                    foreach ($rows as $row) : ?>
                        <tr>
                            <td><?php echo $row['title']; ?></td>
                            <td><img style="width:100px;height:100px" src="./layout/images/imgs/<?php echo $row['imgName']; ?>">
                            </td>
                        <?php endforeach; ?>
                        <td>
                            <!-- <form action="test.php" method="POST" class="ms-3">
                                <button name="delete" class="btn btn-danger mb-2 ms-2">Delete</button>
                                <input type="text" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" name="no" value="<?php echo $row['no']; ?>">
                            </form> -->
                        </td>
                        </tr>
                </tbody>
            </table>
            <form action="test.php" method="POST" class="ms-3">
                <button name="delete" class="btn btn-danger mb-2 ms-2">Delete</button>
                <input type="text" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="no" value="<?php echo $row['no']; ?>">
            </form>
        </div>
    </section>
</body>

</html>