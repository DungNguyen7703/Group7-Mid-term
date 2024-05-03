<?php
    include "connection.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $type = 2; //customer
        $sql= "INSERT INTO accounts(username, password, email, type) VALUES('$username','$password','$email','$type')";
        mysqli_query($ocon, $sql);
        header('location: login.php');
    }
?>

