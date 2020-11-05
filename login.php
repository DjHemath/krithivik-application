<?php
session_start();

    
    // 1. Get data
    $mobile = $_POST["mobile"];
    $password = $_POST["pw"];

    // 2. Connect database
    $con = mysqli_connect("localhost", "root", "", "krithvik-application");

    if(mysqli_connect_errno() == 0) {
        

        // 3. Execute Query
        $query = "SELECT * FROM `users` WHERE mobile='$mobile'";

        $result = mysqli_query($con, $query);

        $count = mysqli_num_rows($result);

        if($count == 0) {
            $_SESSION["login_error_msg"] = "No such user";
            header("Location: ./index.php");
        } else {

            $res = mysqli_fetch_assoc($result);

            if($password == $res["password"]) {

                $_SESSION["name"] = $res["name"];
                unset($_SESSION["login_error_msg"]);
                header("Location: ./dashboard.php");
            } else {
                $_SESSION["login_error_msg"] = "Wrong password!";
                header("Location: ./index.php");
            }
        }



        // 4. Send Response




    } else {
        print_r("Not Connected!");
    }
?>