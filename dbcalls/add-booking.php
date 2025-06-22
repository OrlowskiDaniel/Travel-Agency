<?php
session_start();
include("./conn.php");

if (!isset($_SESSION['user_id'])) {
    die("User not logged in");
}

$user_id = $_SESSION['user_id'];
$price = isset($_GET['price']) ? (float) $_GET['price'] : 0;
$flight_id = isset($_GET['flight_id']) ? (int) $_GET['flight_id'] : null;
$class = isset($_GET['class']) ? $_GET['class'] : null;
$room_id = isset($_GET['room_id']) ? (int) $_GET['room_id'] : null;
$hotel_id = isset($_GET['hotel_id']) ? (int) $_GET['hotel_id'] : null;


$status = 'confirmed';

$sql = 'INSERT INTO Booking (user_id, flight_id, hotel_id, room_id, total_price, status, class) 
        VALUES (:user_id, :flight_id, :hotel_id, :room_id, :price, :status, :class);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":user_id", $user_id);
$stmt->bindParam(":flight_id", $flight_id);
$stmt->bindParam(":hotel_id", $hotel_id);
$stmt->bindParam(":room_id", $room_id);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":status", $status);
$stmt->bindParam(":class", $class);
$stmt->execute();

header("Location: ../user-account.php");
exit();
