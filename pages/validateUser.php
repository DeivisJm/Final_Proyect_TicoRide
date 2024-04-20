<?php
require_once('../actions/dbconnection.php');
    $conn =  dbconnection();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id, name, last_name FROM users WHERE username = '" . $username . "' AND password = '" . $password ."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      //
       echo "<script>localStorage.setItem('username', '$username');</script>"; 
       echo "<script>location.href = 'http://localhost/pages/dashboard.php';</script>";
       exit();
    } else {
        echo "0 results";
    }
    $conn->close();
?>