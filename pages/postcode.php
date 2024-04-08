<?php
    session_start();
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("Location: login.php");
        exit();
    }
    
    $username =  $_POST["username"];
    $password =  $_POST["password"];
    $postcode =  $_POST["postcode"];

    if ($username == "admin" && $password == "admin") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else {
        header("location: login.php");
    }
?>