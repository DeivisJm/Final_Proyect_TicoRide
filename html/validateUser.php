<?php
require_once('../php/dbconnection.php');
    $conn =  dbconnection();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id, name, last_name FROM users WHERE username = '" . $username . "' AND password = '" . $password ."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       echo "<script>localStorage.setItem('username', '$username');</script>";
       header("Location: http://localhost/html/dashboard.php");
        die();
    } else {
        echo "0 results";
    }
    $conn->close();
?>