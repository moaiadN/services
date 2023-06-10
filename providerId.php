<?php
session_start();
include_once './processes/connection.php';
include_once './processes/_providerId.php';
$stat = mysqli_query($conn, "SELECT id FROM register WHERE email = '" . $_SESSION["user"] . "'");
$registerId = mysqli_fetch_assoc($stat);
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
    <!--SignUp section-->
    <section class="sign_up container row">
        <div class="m-auto col-lg-6">
            <h5 class="modal-title" id="exampleModalLabel">Insurance provider Id</h5>
            <form method="POST" action="" class="m-auto needs-validation" enctype="multipart/form-data" novalidate>
                <div class="input-group mb-2">
                    <label class="input-group-text" for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="mb-2">
                    <label for="title" class="form-label">Nationality Code</label>
                    <input type="number" class="form-control" id="idNum" name="idNum" min="14" max="14" required>
                    <input type="hidden" class="form-control" id="registerId" name="registerId" value="<?php echo $registerId['id'] ?>">
                </div>
                <hr>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary form-control mx-3" name="submit">Save</button>
                    <button type="submit" class="btn bg-secondary form-control mx-3" name="close">Close</button>
                </div>
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="layout/js/script.js"></script>
</body>

</html>