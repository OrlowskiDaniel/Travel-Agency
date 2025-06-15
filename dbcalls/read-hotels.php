<?php
include('conn.php');

$stmt = $conn->prepare("SELECT * FROM Hotels");
$stmt->execute();
$hotels = $stmt->fetchAll(PDO::FETCH_ASSOC); // make it associative array
