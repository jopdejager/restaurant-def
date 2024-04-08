<?php
session_start();
include 'conn.php';


$naam = $_POST["naam"];
$omschrijving = $_POST["omschrijving"];
$prijs = $_POST["prijs"];

$stmt = $connection->prepare("INSERT INTO products (naam, omschrijving, prijs) VALUES(:name, :omschrijvin, :price)");
$stmt->bindParam(":name", $naam);
$stmt->bindParam(":omschrijvin", $omschrijving);
$stmt->bindParam(":price", $prijs);
$stmt->execute();

 
header('dashboard.php');
?>
