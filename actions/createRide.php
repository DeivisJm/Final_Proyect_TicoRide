<?php
require_once('dbconnection.php');
$conn = dbconnection();

if (isset($_POST["submit_ride"])) {
    $rideName = $_POST["rideName"];
    $startFrom = $_POST["startFrom"];
    $end = $_POST["end"];
    $description = $_POST["description"];
    $departure = $_POST["departure"];
    $arrival = $_POST["arrival"];
    $days = $_POST["days"];
    $user_id = $_POST["user_id"];

    // Verificar si ya existe un viaje para el usuario dado
    $existingRideQuery = "SELECT * FROM rides WHERE user_id = '$user_id'";
    $existingRideResult = $conn->query($existingRideQuery);

    if ($existingRideResult->num_rows > 0) {
        // Ya existe un viaje para este usuario
        echo "Ya tienes un viaje creado.";
    } else {
        // Insertar el nuevo viaje
        $insertQuery = "INSERT INTO rides (rideName, startFrom, end, description, departure, arrival, days, user_id) 
                   VALUES ('$rideName', '$startFrom', '$end', '$description', '$departure', '$arrival', '$days', '$user_id')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Nuevo viaje creado exitosamente.";
        } else {
            echo "Error al crear el nuevo viaje: " . $conn->error;
        }
    }
}

$conn->close();
