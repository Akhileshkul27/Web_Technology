<?php
require_once 'connection.php';

$sql = "DELETE FROM users WHERE username='JohnDoe' ";
mysqli_query($conn, $sql);

?>