<?php
require_once 'connection.php';     

$sql = "INSERT INTO users (username, email, password) VALUES ('JohnDoe', 'johndoe@email.com', 'password123')";
$sql = "INSERT INTO users (username, email, password) VALUES ('Akhilesh', 'akhilesh@email.com', 'password124')";
$sql = "INSERT INTO users (username, email, password) VALUES ('Raj', 'raj@email.com', 'password125')";
$result = mysqli_query($conn, $sql);
if (mysqli_error($conn)) {
    echo "Error: ". mysqli_error($conn);
}else{
    echo " Inserted record successfully..";
}
mysqli_close($conn);

?>