<?php
include "config.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `address`) VALUES (NULL,'$first_name','$last_name','$address')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=New user added successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <title>Add page</title>
</head>

<body>
    <div class="container">
    <nav class="navbar mt-5">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 fw-bold text-white fs-2">Adding a new user</span>
            </div>
        </nav>
        <form action="" method="POST">
            <div class="row mt-3">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Sample Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Sample Last Name">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Sample Address">
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn-save" name="submit">Save</button> 
                        <a href="index.php"><button class="btn-can btn-danger" name="submit">Cancel</button>
                    </div>
            </div>
        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>