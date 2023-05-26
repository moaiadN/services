<?php

include "../connection.php";

include "sidebar.php";

$rows = mysqli_query($conn, "SELECT * FROM user_services ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./layout/styles/style.css">
</head>

<body>


    <section id="sec" class="home">
        <div class="text">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                        <th scope="col">No. Of Beds</th>
                        <th scope="col">No. Of Bathrooms</th>
                        <th scope="col">Location</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Contact Phone Number</th>
                        <th scope="col">Reject/Approve</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sr = 0;
                    ?>
                    <?php foreach ($rows as $row) : ?>
                        <?php
                        $sr = $sr + 1;
                        ?>
                        <tr>
                            <td><?php echo $sr ?></td>
                            <td><img style="width:150px" src="layout/images/<?php echo $row['image']; ?>"></td>
                            <td><?php echo $row['price'] . " $"; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['details']; ?></td>
                            <td><?php echo $row['number_of_beds']; ?></td>
                            <td><?php echo $row['number_of_bathrooms']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['categories']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td>
                                <form action="_remove.php" method="POST" class="ms-3">
                                    <button type="button" name="Remove-item" class="btn btn-danger mb-2 ms-2">Reject</button>
                                    <input type="hidden" name="title" value="<?php echo $row['title']; ?>">
                                    <button type="button" name="" class="btn btn-info">Approve</button>
                                    <!-- <input type="hidden" name="title" value="<?php echo $row['title']; ?>"> -->
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Custom Js -->
    <script src="./layout/js/index.js"></script>
</body>

</html>