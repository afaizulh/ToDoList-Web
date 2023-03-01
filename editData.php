<?php

include('config.php');

$ID = $_POST['Id'];
$data = $_POST['Data'];

mysqli_query($connect, "UPDATE list SET Data='$data' WHERE Id='$ID'");
header("location:index.php");