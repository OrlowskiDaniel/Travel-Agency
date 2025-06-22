<?php

include("conn.php");

$hotel_id = $_POST['hotel_id'];

$stmt = $conn->prepare("DELETE FROM Hotels WHERE hotel_id=:hotel_id");
$stmt->bindParam(":hotel_id", $hotel_id);
$stmt->execute();

header('Location: ../admin-edit-hotels.php');