<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sri_lanka_tourism";
    $port = 3309;


    $connection = mysqli_connect($server, $username, $password, $dbname, $port);


    // if (!$connection) {
    //     die("Failed to connect" . mysqli_connect_error());
    // }else {
    //     echo("Successfully connected");
    // }


    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $package = $_POST["package"];
    $message = $_POST["message"];


    $sql = "INSERT INTO enquiries VALUES ('$name', '$email', '$phone', '$package', '$message')";


    if (mysqli_query($connection, $sql)) {
        echo("
            <div style='text-align: center; margin-top: 20%;'>
            <h3>Record inserted successfully</h3>
            <a href='index.html' style='display: inline-block; margin-top: 20px; text-decoration: none; background-color: #004a7c; color: white; padding: 10px 20px; border-radius: 5px;'>Back to Home</a>
            </div>
            ");
    }else {
        echo("
            <div style='text-align: center; margin-top: 20%;'>
            <h3 style='color: red;'>Error: " . mysqli_error($connection) . "</h3>
            <a href='index.html' style='display: inline-block; margin-top: 20px; text-decoration: none; background-color: #004a7c; color: white; padding: 10px 20px; border-radius: 5px;'>Back to Home</a>
            </div>
            ");
    }

    mysqli_close($connection);

?>