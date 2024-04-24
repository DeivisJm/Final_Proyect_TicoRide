<?php

require_once('../actions/dbconnection.php');
$conn = dbconnection();

$result = mysqli_query($conn, "SELECT * FROM rides WHERE user_id = ?");

echo "<table id='ViajesRegistrados'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Start</th>";
echo "<th>End</th>";
echo "<th>Actions</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Start'] . "</td>";
    echo "<td>" . $row['End'] . "</td>";
    echo "<td>" . "<a href='#'>Edit</a> | <a href='#'>Delete</a>" . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
