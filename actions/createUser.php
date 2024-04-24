<?php
$firstname1 = isset($_POST["firstname"]);
$lastname1 =  isset($_POST["lastname"]);
$phone1 =  isset($_POST["phone"]);
$username1 =  isset($_POST["username"]);
$password1 =  isset($_POST["password"]);
$confirmPassword1 =  isset($_POST["confirm-password"]);
$userExist = false;
$result1 = empty($username1) || empty($lastname1) || empty($firstname1) || empty($phone1) || empty($password1) || empty($confirmPassword1);

if (isset($_POST["register"]) && !$result1) {

    require_once('../actions/dbconnection.php');
    $conn =  dbconnection();
    $firstname = $_POST["firstname"];
    $lastname =  $_POST["lastname"];
    $phone =  $_POST["phone"];
    $username =  $_POST["username"];
    $password =  $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];
    $sql = "SELECT user_id, name, last_name FROM users WHERE username = '" . $username . "'";
    $select = $conn->query($sql);
    if ($select->num_rows > 0) {
        $userExist = true;
        echo "<script>document.getElementById('message').innerHTML = 'El usuario ya se encuentra registrado';</script>";
    } else {
        $userExist = false;
        $insert = "INSERT INTO users (name, last_name, phone, username, password, confirm_password) 
            VALUES ('" . $firstname . "', '" . $lastname . "', $phone , '" . $username . "',  '" . $password . "', '" . $confirmPassword . "')";
        $user = $conn->query($insert);
        echo  $user;
        if ($user) {
            header("Location: http://localhost/pages/authentication_page.php");
        }
        die();
    }
    $conn->close();
}
