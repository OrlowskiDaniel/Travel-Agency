<?php

include("conn.php");

$departure_city = $_POST['departure_city'];
$arrival_city = $_POST['arrival_city'];
$date = $_POST['date'];
$price = $_POST['price'];
$departure_time = $_POST['departure_time'];
$arrival_time = $_POST['arrival_time'];
$seats_available = $_POST['seats_available'];
$flight_id = $_POST['flight_id'];



$sql = 'UPDATE Flights 
        SET departure_city = :departure_city, arrival_city = :arrival_city, 
        date = :date, price = :price,
        departure_time = :departure_time, arrival_time = :arrival_time,
        seats_available = :seats_available
        WHERE flight_id = :flight_id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":departure_city", $departure_city);
$stmt->bindParam(":arrival_city", $arrival_city);
$stmt->bindParam(":date", $date);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":departure_time", $departure_time);
$stmt->bindParam(":arrival_time", $arrival_time);
$stmt->bindParam(":seats_available", $seats_available);
$stmt->bindParam( ":flight_id", $flight_id);
$stmt->execute();

header('Location: ../admin-edit-flights.php');

