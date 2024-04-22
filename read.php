<?php

require_once 'connection.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo "<br>";
while ($row = mysqli_fetch_assoc($result)) {
    
    echo "Username: " . $row["username"] . ", Email: " . $row["email"] . ", Password: " . $row["password"] . "<br>";
}

mysqli_close($conn);
   

?>