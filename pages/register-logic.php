<?php
session_start();
include 'conn.php';


$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $connection->prepare("INSERT INTO users (username, password) VALUES(:user, :pass)");
$stmt->bindParam(":user", $username);
$stmt->bindParam(":pass", $password);
$stmt->execute();

 
header('Location: login.php');
?>
