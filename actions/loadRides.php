<?php
// Reemplaza 'db_connection.php' con la ruta correcta si es diferente
 require_once($_SERVER['DOCUMENT_ROOT'] . '/actions/dbconnection.php');


// Establecer conexión a la base de datos
$conn = dbconnection();

// Consulta para seleccionar todos los viajes
$sql = "SELECT users.name AS userName, rides.startFrom, rides.end FROM rides INNER JOIN users ON rides.user_id = users.user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir los datos de cada fila en la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["userName"] . "</td>";
        echo "<td>" . $row["startFrom"] . "</td>";
        echo "<td>" . $row["end"] . "</td>";
        echo "<td>View</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No rides found</td></tr>";
}
$conn->close();
?>
