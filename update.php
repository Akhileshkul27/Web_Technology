<?php
require_once 'connection.php';
// $con = mysqli_connect("localhost", "username", "password", "database_name");
$sql = "UPDATE users SET username='BUoM', email='BUoM@gmail.com' WHERE password='password125' ";
mysqli_query($conn, $sql);

?>