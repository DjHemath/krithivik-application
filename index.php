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

    <h3 align="center">Login</h3>

    <form action="./login.php" method="POST">
        <input name="mobile" placeholder="Mobile"/>
        <br />
        <input name="pw" type="password" placeholder="Password"/>
        <br />
        <input type="submit" />
    </form>

    <br />

    <a href="https://www.google.com">Register</a>

</body>
</html>