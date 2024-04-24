<?php
$rideName1 = isset($_POST["rideName"]);
$startFrom1 =  isset($_POST["startFrom"]);
$end1 =  isset($_POST["end"]);
$description1 =  isset($_POST["description"]);
$departure1 =  isset($_POST["departure"]);
$arrival1 =  isset($_POST["arrival"]);
$rideExist = false;
$result1 = empty($rideName1) || empty($startFrom1) || empty($end1) || empty($description1) || empty($departure1) || empty($arrival1);
// Verificar si se ha iniciado sesión y obtener el ID del usuario
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

if (isset($_POST["register"]) && !$result1) {

    require_once('../actions/dbconnection.php');
    $conn =  dbconnection();
    $rideName = $_POST["rideName"];
    $startFrom =  $_POST["startFrom"];
    $end =  $_POST["end"];
    $description =  $_POST["description"];
    $departure =  $_POST["departure"];
    $arrival = $_POST["arrival"];
    $days = isset($_POST['days']) ? implode(", ", $_POST['days']) : ""; // Convertir el array de días en una cadena

    $sql = "SELECT user_id, name, last_name FROM users WHERE username = '" . $username . "'";
    $select = $conn->query($sql);
    if ($select->num_rows > 0) {
        $userExist = true;
        echo "<script>document.getElementById('message').innerHTML = 'El usuario ya se encuentra registrado';</script>";
    } else {
        $rideExist = false;
        $insert = "INSERT INTO rides (rideName, startFrom, end, description, departure, arrival, days, user_id) 
            VALUES ('" . $rideName . "', '" . $startFrom . "', $end , '" . $description . "',  '" . $departure . "', '" . $arrival . "' , '" . $days . "' , '" . $user_id . "')";
        $ride = $conn->query($insert);
        echo  $ride;
        
    }
    $conn->close();
}
