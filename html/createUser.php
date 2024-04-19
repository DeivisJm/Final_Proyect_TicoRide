<?php
require_once('../php/dbconnection.php');
echo "<script>document.getElementById('message').innerHTML = '';</script>";
    $conn =  dbconnection();
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];
    $sql = "SELECT id, name, last_name FROM users WHERE username = '" . $username . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('Deivis');</script>";      
       
    } else {
        header("Location: http://localhost/html/authentication_page.php");
        die();
    }
    $conn->close();
?>