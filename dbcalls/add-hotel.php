<?php
include("./conn.php");

$hotel_name = $_POST['hotel_name'];
$country = $_POST['country'];
$city = $_POST['city'];
$addres = $_POST['addres'];
$stars = $_POST['stars'];
$rooms_available = $_POST['rooms_available'];



$sql = 'INSERT INTO Hotels(name, country, city, addres, stars, rooms_available) 
        VALUES (:name, :country, :city, :addres, :stars, :rooms_available);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $hotel_name);
$stmt->bindParam(":country", $country);
$stmt->bindParam(":city", $city);
$stmt->bindParam(":addres", $addres);
$stmt->bindParam(":stars", $stars);
$stmt->bindParam(":rooms_available", $rooms_available);
$stmt->execute();

header("Location: ../admin-edit-hotels.php");