<?php
session_start();

if(!isset($_SESSION["name"])) {
    $_SESSION["login_error_msg"] = "You must login first!";
    header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahsboard</title>
</head>
<body>
    <h1 align="center">Dashboard!</h1>

    <h3>Hi, <?php print_r($_SESSION["name"]); ?> </h3>

    <form action="./logout.php">
        <input type="submit" value="Logout">
    </form>

    <a href="./logout.php">Logout</a>
</body>
</html>