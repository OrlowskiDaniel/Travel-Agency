<?php
include("./conn.php");

$departure_city = $_POST['departure_city'];
$arrival_city = $_POST['arrival_city'];
$date = $_POST['date'];
$price = $_POST['price'];
$departure_time = $_POST['departure_time'];
$arrival_time = $_POST['arrival_time'];
$seats_available = $_POST['seats_available'];


$sql = 'INSERT INTO Flights(departure_city, arrival_city, date, price, departure_time, arrival_time, seats_available) 
        VALUES (:departure_city, :arrival_city, :date, :price, :departure_time, :arrival_time, :seats_available);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":departure_city", $departure_city);
$stmt->bindParam(":arrival_city", $arrival_city);
$stmt->bindParam(":date", $date);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":departure_time", $departure_time);
$stmt->bindParam(":arrival_time", $arrival_time);
$stmt->bindParam(":seats_available", $seats_available);
$stmt->execute();

header("Location: ../admin-edit-flights.php");