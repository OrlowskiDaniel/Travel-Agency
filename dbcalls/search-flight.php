<?php
include("conn.php");

$flights = [];

if (isset($_GET['departure_city']) || isset($_GET['arrival_city']) || isset($_GET['date'])) {
    $departure = isset($_GET['departure_city']) ? trim($_GET['departure_city']) : '';
    $arrival = isset($_GET['arrival_city']) ? trim($_GET['arrival_city']) : '';
    $date = isset($_GET['date']) ? trim($_GET['date']) : '';

    $query = "SELECT * FROM Flights WHERE 1=1";
    $params = [];

    if ($departure !== '') {
        $query .= " AND departure_city LIKE :departure";
        $params[':departure'] = $departure . '%';
    }

    if ($arrival !== '') {
        $query .= " AND arrival_city LIKE :arrival";
        $params[':arrival'] = $arrival . '%';
    }

    if ($date !== '') {
        $query .= " AND date = :date";
        $params[':date'] = $date;
    }

    $query .= " ORDER BY date ASC";

    $stmt = $conn->prepare($query);
    $stmt->execute($params);

    $flights = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    include("read-flights.php");
}