<?php 

$conn = mysqli_connect("localhost", "root", null, "views");

echo $conn ? "" : "Error connecting ".mysqli_error($conn);


?>