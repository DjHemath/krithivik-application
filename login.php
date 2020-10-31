<?php

    
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
            print_r("You are not registered!");
        } else {

            $res = mysqli_fetch_assoc($result);

            if($password == $res["password"]) {
                print_r("Login success");
            } else {
                print_r("Wrong password!");
            }
        }



        // 4. Send Response




    } else {
        print_r("Not Connected!");
    }
?>