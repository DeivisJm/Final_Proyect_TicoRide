
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticos-Ride</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/authentication_page.css">

<body>
    <img id="centered-image" src="../img/Logo.png" alt="Car Travel Image">

    <div class="container">
        <form action="validateUser.php" method="post">
            <label for="username">User:</label>
            <input type="text" id="username" name="username" placeholder="Input text" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Input text" required>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Login">
            </div>

        </form>
        <p id="message"></p>
        <div id="register-link">
            <p>Not an User? <a href="registration.php">Register Here</a></p>
        </div>
    </div>
    <script type="text/javascript" src="../js/authentication.js"></script>
</body>

</html>