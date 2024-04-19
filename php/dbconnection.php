<?php 
function dbconnection () {
    $servername = "127.0.0.1:3307";
    $database = "proyect_ticos_rides";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
}

?>
