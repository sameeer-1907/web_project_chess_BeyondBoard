<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $servername = "localhost";
    $db_username = "root"; 
    $db_password = "";

    $conn = mysqli_connect($servername, $db_username, $db_password);
    if (!$conn) {
        echo "Connection error";
    } else {
        echo "Connection successful";
    }

    $sql_database = "CREATE DATABASE try2";
    $run_database = mysqli_query($conn, $sql_database);

    $database = "try2"; 
    $conn_database = mysqli_connect($servername, $db_username, $db_password, $database);
    if (!$conn_database) {
        echo "Database connection error";
    } else {
        echo "Database connection successful";
    }

    $sql_table = "CREATE TABLE Details (
        UserName varchar(24),
        Password varchar(24)
    );"; 
    $run_table = mysqli_query($conn_database, $sql_table);
    if (!$run_table) {
        echo "Table creation error: " . mysqli_error($conn_database);
    } else {
        echo "Table created successfully";
    }
?>
