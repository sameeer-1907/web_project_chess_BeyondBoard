<?php
    $usernamei=$_POST["username"];
    $passwordi=$_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password = "";

    $database = "try2";
    $conn_database = mysqli_connect($servername, $username, $password, $database);
    if(!$conn_database){
        echo "error";
    }
    else{
        echo "Run Successfull";
    }

    $mysql = "INSERT INTO `Details` (`UserName`, `Password`) VALUES ('$usernamei', '$passwordi');";

    $run = mysqli_query($conn_database, $mysql);

?>