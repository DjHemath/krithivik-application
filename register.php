<?php
session_start();

    
    // 1. Get data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $mobile = $_POST["mobile"];
    $password = $_POST["pw"];

    // 2. Connect database
    $con = mysqli_connect("localhost", "root", "", "krithvik-application");

    if(mysqli_connect_errno() == 0) {



        // 3. Execute Query
        $query = "SELECT mobile FROM `users` WHERE mobile='$mobile'";

        $mobileResult = mysqli_query($con, $query);

        $mobileCount = mysqli_num_rows($mobileResult);

        if($mobileCount == 0) {
            

                        
            $query = "INSERT INTO `users`(`name`, `email`, `mobile`, `age`, `password`, `verified`)  VALUES ('$name', '$email', '$mobile', $age, '$password', false)";

            // print_r($query);

            $result = mysqli_query($con, $query);

            if($result == 1) {
                // Success

                $_SESSION["name"] = $name;
                
                unset($_SESSION["error_msg"]);

                header("Location: ./dashboard.php");
            } else {
                // Failure

                $_SESSION["error_msg"] = "Something went wrong! Try again later.";
                header("Location: ./register-form.php");
            }


        } else {
            // Mobile is already in db
            $_SESSION["error_msg"] = "Mobile number is already used!";

            header("Location: ./register-form.php");
        }

    } else {
        print_r("Not Connected!");
    }
?>