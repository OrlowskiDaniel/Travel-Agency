<?php
include('conn.php');


$room_stmt = $conn->prepare("SELECT * FROM Hotel_room WHERE hotel_id = :hotel_id");
$room_stmt->bindParam(":hotel_id", $hotel_id, PDO::PARAM_INT);
$room_stmt->execute();
$rooms = $room_stmt->fetchAll(PDO::FETCH_ASSOC);
