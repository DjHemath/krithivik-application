<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krithvik Application</title>

    <style>
        body, form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>

    <h1 align="center">Krithvik Application</h1>

    <h3 align="center">Register</h3>

    <?php
        $res = isset($_SESSION["error_msg"]);
        
        if($res) {
            print_r($_SESSION["error_msg"]);
        }
    ?>

    <form action="./register.php" method="POST">

        <input name="name" placeholder="Name" required/>
        <br />

        <input type="email" name="email" placeholder="Email" required/>
        <br />

        <input name="mobile" placeholder="Mobile" required/>
        <br />

        <input type="number" name="age" placeholder="Age" required/>
        <br />

        <input name="pw" type="password" placeholder="Password" required/>
        <br />

        <input type="submit" />

    </form>

    <br />

    <a href="./index.php">Login</a>

</body>
</html>