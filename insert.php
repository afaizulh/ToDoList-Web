<?php

include('config.php');

$data = $_POST['Data'];
mysqli_query($connect, "INSERT INTO list (Data) VALUES ('$data')");
header("location:index.php");
