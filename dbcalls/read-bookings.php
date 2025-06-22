<?php
include('conn.php');

$user_id = $_SESSION['user_id'];

$sql = "
    SELECT 
       *
    FROM Booking b
    LEFT JOIN Flights f ON b.flight_id = f.flight_id
    LEFT JOIN Hotels h ON b.hotel_id = h.hotel_id
    WHERE b.user_id = :user_id
    ORDER BY b.booking_date DESC
";

$stmt = $conn->prepare($sql);
$stmt->execute(['user_id' => $user_id]);
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
