<?php
include("conn.php");

// hotels array
$hotels = [];


if (isset($_GET['place']) && !empty(trim($_GET['place']))) {
    $place = trim($_GET['place']) . '%';

    $sql = "SELECT * FROM Hotels 
            WHERE name LIKE :place 
               OR city LIKE :place 
               OR country LIKE :place 
            ORDER BY name ASC";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':place', $place, PDO::PARAM_STR);
    $stmt->execute();

    $hotels = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    include("read-hotels.php");
}

