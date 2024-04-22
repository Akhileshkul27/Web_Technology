<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'database1';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}else{
    echo 'Connected successfully!';
}

?>
