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

<body>
    <div class="container">
        <h1 class="my-4"><i class="fa-sharp text-primary fa-solid fa-list-check"></i> ToDo List</h1>
        <div class="card shadow mb-5 bg-body-tertiary border-dark">

            <!-- Card -->
            <div class="card-body">
                <form class="d-flex" action="insert.php" method="post">
                    <input class="form-control me-2 border-light" name="Data" type="text" placeholder="Hari ini apa kegiatanmu?">
                    <button class="btn btn-outline-success"><i class="fa-sharp fa-solid fa-circle-plus"></i></button>
                </form>
            </div>
        </div>
        <!-- End Card -->

        <?php
        include('config.php');
        $alldata = mysqli_query($connect, "SELECT * FROM list");
        ?>

        <!-- Table -->
        <table class="table">
            <tbody>
                <?php while ($row = mysqli_fetch_array($alldata)) { ?>
                <tr>
                    <th scope="row"><?php echo $row['Id'] ?></th>
                    <td><?php echo $row['Data'] ?></td>
                    <td style="width: 5%"><a href="edit.php? ID=<?php echo $row['Id'] ?>" class="btn btn-outline-primary">
                            <i class="fa-sharp fa-solid fa-pencil"></i></a>
                    </td>
                    <td style="width: 5%"><a href="delete.php? ID=<?php echo $row['Id'] ?>" class="btn btn-outline-danger">
                            <i class="fa-sharp fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- End Table -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>