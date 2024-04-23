<?php


$rideName = isset($_POST["rideName"]);
$startFrom =  isset($_POST["startFrom"]);
$end =  isset($_POST["end"]);
$description =  isset($_POST["description"]);
$departure =  isset($_POST["departure"]);
$arrival =  isset($_POST["arrival"]);
$days = implode(',', $_POST['days']);

require_once('../actions/dbconnection.php');
$conn =  dbconnection();

// Verificar si se ha enviado el ID del viaje a editar
if (isset($_GET['id'])) {
    $ride_id = $_GET['id'];
} else {
    // Si no se ha enviado el ID, redirigir a la página de dashboard o mostrar un mensaje de error
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {




    // Verificar si la actualización fue exitosa y mostrar un mensaje al usuario
    if ($stmt_update->affected_rows > 0) {
        $message = "¡Los detalles del viaje se actualizaron correctamente!";
        $insert = "UPDATE rides SET rideName=?, startFrom=?, end=?, description=?, departure=?, arrival=?, days=? WHERE id=?";
        $ride = $conn->query($insert);
        echo  $ride;
        $success = true;
    } else {
        $message = "¡No se pudo actualizar los detalles del viaje!";
        $success = false;
    }
}
