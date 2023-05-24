<?php

include "../connection.php";

if (isset($_POST['deleteid'])) {
    $rows = mysqli_query($con, "SELECT * FROM contact ORDER BY id DESC");
    foreach ($rows as $row) {
        $id = $_POST['id'];
        if ($row['id'] == $id) {
            $sql  = "DELETE FROM contact where id='$id'";
            $rows = mysqli_query($con, $sql);
            if ($rows) {
                header('location:contact.php');
            } else {
                die(mysqli_error($con));
            }
        }
    }
}
