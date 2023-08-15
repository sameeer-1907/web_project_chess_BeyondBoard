<?php
    $usernamei = $_POST["username"];
    $passwordi = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "try2";

    $conn_database = mysqli_connect($servername, $username, $password, $database);
    if (!$conn_database) {
        echo "Connection error";
    }

    $sql = "SELECT * FROM `Details` WHERE `UserName`='$usernamei' AND `Password`='$passwordi';";
    $result = mysqli_query($conn_database, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }

    mysqli_close($conn_database);
?>

