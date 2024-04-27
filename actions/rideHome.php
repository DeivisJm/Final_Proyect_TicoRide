<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/actions/dbconnection.php');

$conn = dbconnection();

// Query to select all trips
$sql = "SELECT users.name AS userName, rides.startFrom, rides.end FROM rides INNER JOIN users ON rides.user_id = users.user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Print the data of each row in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["userName"] . "</td>";
        echo "<td>" . $row["startFrom"] . "</td>";
        echo "<td>" . $row["end"] . "</td>";
        echo "<td><a href='http://localhost/pages/dashboard.php'>View</a></td>";
        
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No rides found</td></tr>";
}
$conn->close();
