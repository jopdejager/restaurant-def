<?php
session_start();
include 'conn.php';
 
 
$userid = $_POST["id_user"];
 
 
$stmt = $connection->prepare("DELETE FROM users WHERE id=:userid");
$stmt->bindParam(":userid", $userid);
$stmt->execute();
 
 
header('Location: dashboard.php')
?>