<?php

include("conn.php");

$flight_id = $_POST['flight_id'];

$stmt = $conn->prepare("DELETE FROM Flights WHERE flight_id=:flight_id");
$stmt->bindParam(":flight_id", $flight_id);
$stmt->execute();

header('Location: ../admin-edit-flights.php');