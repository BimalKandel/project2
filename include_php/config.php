<?php
$db = "project";
$host  = "Localhost";
$db_user = "root";
$pwd = "";
$conn  = mysqli_connect($host, $db_user, $pwd, $db);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>