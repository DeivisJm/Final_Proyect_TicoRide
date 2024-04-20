<?php
$firstname1 = isset($_POST["firstname"]);
$lastname1 =  isset($_POST["lastname"]);
$phone1 =  isset($_POST["phone"]);
$username1 =  isset($_POST["username"]);
$password1 =  isset($_POST["password"]);
$confirmPassword1 =  isset($_POST["confirm-password"] );
$userExist = false;
$result1 = empty($username1) || empty($lastname1) || empty($firstname1) || empty($phone1) || empty($password1) || empty($confirmPassword1);

if (isset( $_POST["register"]) && !$result1) {

    require_once('../actions/dbconnection.php');
        $conn =  dbconnection();
        $firstname = $_POST["firstname"];
        $lastname =  $_POST["lastname"];
        $phone =  $_POST["phone"];
        $username =  $_POST["username"];
        $password =  $_POST["password"];
        $confirmPassword= $_POST["confirm-password"];
        $sql = "SELECT id, name, last_name FROM users WHERE username = '" . $username . "'";
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
   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticos-Ride</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registration.css">
</head>

<body>
    <img id="centered-image" src="../img/Logo.png" alt="Car Travel Image">

    <div class="container">
        <form  method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" placeholder="Input text" >
            <?php if(isset( $_POST["register"]) && empty($_POST["firstname"])) {?>
                <span id="firstname-error" class="error">El nombre es requerido</span>
            <?php }?>
            <br/>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Input text">
            <?php if(isset( $_POST["register"]) && empty($_POST["lastname"])) {?>
                <span id="firstname-error" class="error">El Apellido es requerido</span>
            <?php }?>
            <br/>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="(XXX) XXX-XXXX" >
            <?php if(isset( $_POST["register"]) && empty($_POST["phone"])) {?>
                <span id="firstname-error" class="error">El telefono ee requerido</span>
            <?php }?>
            <br/>
            <label for="username"> Username:</label>
            <input type="text" id="username" name="username" placeholder="Input text" >
            <?php if(isset( $_POST["register"]) && empty($_POST["username"])) {?>
                <span id="firstname-error" class="error">El usuario es requerido</span>
            <?php }?>
            <br/>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Input text" >
            <?php if(isset( $_POST["register"]) && empty($_POST["password"])) {?>
                <span id="firstname-error" class="error">La contrasena es requerida</span>
            <?php }?>
            <br/>
            <label for="confirm-password">Repeat Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Input text" >
            <?php if(isset( $_POST["register"]) && empty($_POST["confirm-password"])) {?>
                <span id="firstname-error" class="error">Las contrasenas no coinciden</span>
            <?php }?>
            <br/>
            <?php if($userExist) {?>
                <span id="firstname-error" class="error">El Usuario ya existe</span>
            <?php }?>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Registrer" name="register">
            </div>
        </form>
        <p id="message"></p>
        <div id="register-link">
            <p>Alredy an User? <a href="authentication_page.html">Login Here</a>.</p>
        </div>
    </div>
</body>

</html>