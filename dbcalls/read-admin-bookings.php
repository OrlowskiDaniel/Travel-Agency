<?php 
include('conn.php');


$sql = "
    SELECT 
        *
    FROM Booking b
    LEFT JOIN Users u ON b.user_id = u.user_id
    LEFT JOIN Flights f ON b.flight_id = f.flight_id
    LEFT JOIN Hotels h ON b.hotel_id = h.hotel_id
    ORDER BY b.booking_date DESC
";

$stmt = $conn->prepare($sql);
$stmt->execute();
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
