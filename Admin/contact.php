<?php
include "sidebar.php";

$rows = mysqli_query($con, "SELECT * FROM contact ORDER BY id DESC");


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
    <link rel="stylesheet" href="./static/styles/style.css">
</head>

<body>


    <section class="home">
        <div class="text">
            <table class="table">
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

                    $sr = 0;
                    ?>
                    <?php foreach ($rows as $row) : ?>
                        <?php
                        $sr = $sr + 1;
                        ?>
                        <tr>
                            <td><?php echo $sr ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td>
                                <form action="remove.php" method="POST" class="ms-3">
                                    <button class="deletebtn btn btn-danger" name="deleteid">Done</button>
                                    <input type="hidden" name="deleteid" value="<?php echo $row['id']; ?>">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom Js -->
    <script src="./static/js/index.js"></script>
</body>

</html>