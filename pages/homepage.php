<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticos-Ride</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/homepage.css">


</head>

<body>
    <img id="centered-image" src="../img/Logo.png" alt="Car Travel Image">

    <h2>Welcome to TicosRides.com</h2>
    <button id="loginButton">Login</button>

    <div class="container">
        <h3>Search for Rides</h3>

        <div class="form-container">
            <label for="origin">From:</label>
            <input type="text" id="origin" placeholder="Input text">

            <label for="destination">To:</label>
            <input type="text" id="destination" placeholder="Input text">

            <button type="button" class="btn-primary" onclick="saveTrip()">Find my Ride!</button>
        </div>

    </div>
    <h5>Results for Rides that match your criteria:</h5>
    <div class="table-container">
        <table class="table table-bordered table-striped mt-4">
            <thead class="thead-light">
                <tr>
                    <th>User</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="tripTable">
                <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/actions/rideHome.php'); ?>

            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="../js/home.js"></script>
</body>

</html>