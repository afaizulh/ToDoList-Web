<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo Web Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/dfdc9ae7ac.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dfdc9ae7ac.js" crossorigin="anonymous"></script>
</head>

<?php
include('config.php');
$ID = $_GET['ID'];
$getData = mysqli_query($connect, "SELECT * FROM list WHERE Id='$ID'");
$row = mysqli_fetch_array($getData);
?>

<body>
    <div class="container">
        <h1 class="my-4"><i class="fa-sharp text-primary fa-solid fa-list-check"></i> <span>Edit</span> Todo List</h1>
        <div class="card shadow mb-5 bg-body-tertiary border-dark">

            <!-- Card -->
            <div class="card-body">
                <form class="d-flex" action="editData.php" method="post">
                    <input class="form-control me-2 border-light" name="Data" value="<?php echo $row['Data'] ?>" type="text" placeholder="Create a List">
                    <button class="btn btn-outline-success"><i class="fa-sharp fa-solid fa-check"></i></button>
                    <input type="hidden" value="<?php echo $row ['Id'] ?>" name="Id">
                </form>
            </div>
        </div>
        <!-- End Card -->

    </div>
</body>