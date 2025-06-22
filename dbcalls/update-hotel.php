<?php
include("./conn.php");

$hotel_name = $_POST['hotel_name'];
$country = $_POST['country'];
$city = $_POST['city'];
$addres = $_POST['addres'];
$stars = $_POST['stars'];
$rooms_available = $_POST['rooms_available'];
$hotel_id = $_POST['hotel_id'];

$sql = 'UPDATE Hotels 
        SET name = :name, country = :country,
        city = :city, addres = :addres,
        stars = :stars, rooms_available = :rooms_available
        WHERE hotel_id = :hotel_id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $hotel_name);
$stmt->bindParam(":country", $country);
$stmt->bindParam(":city", $city);
$stmt->bindParam(":addres", $addres);
$stmt->bindParam(":stars", $stars);
$stmt->bindParam(":rooms_available", $rooms_available);
$stmt->bindParam(":hotel_id", $hotel_id);
$stmt->execute();

header('Location: ../admin-edit-hotels.php');