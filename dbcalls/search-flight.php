<?php 
include("conn.php");

$departure_city = $_GET['departure_city'] ?? '';
$arrival_city = $_GET['arrival_city'] ?? '';
$date = $_GET['date'] ?? '';

$flights = [];

if ($departure_city && $arrival_city) {
    if ($date) {
        $stmt = $conn->prepare("SELECT * FROM Flights WHERE departure_city = :departure_city AND arrival_city = :arrival_city AND date = :date");
        $stmt->execute([
            ':departure_city' => $departure_city,
            ':arrival_city' => $arrival_city,
            ':date' => $date
        ]);
    } else {
        $stmt = $conn->prepare("SELECT * FROM Flights WHERE departure_city = :departure_city AND arrival_city = :arrival_city");
        $stmt->execute([
            ':departure_city' => $departure_city,
            ':arrival_city' => $arrival_city
        ]);
    }

    $flights = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // if no search found, return all flights
    include("read-flights.php");
}