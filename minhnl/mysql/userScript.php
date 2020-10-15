<?php
$servername = "localhost";
$username = "root";
$password = "Nguyenleminh@1234";
$dbname = "moodle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
for ($i = 202003 ;$i <202050; $i++) {
    $username = $i;
    $password = md5($i);
    $sql = "insert into mdl_user (auth, confirmed, mnethostid, username, password, firstname)
values ('manual',1,1,'$username','$password', '$username')";

    if ($conn->query($sql) === true) {
        continue;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
