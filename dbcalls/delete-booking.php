<?php

include("conn.php");

$booking_id = $_POST['booking_id'];
$page_url = $_POST['page_url'];

$stmt = $conn->prepare("DELETE FROM Booking WHERE booking_id=:booking_id");
$stmt->bindParam(":booking_id", $booking_id);
$stmt->execute();

if ("/user-account.php" == $page_url) {
    header('Location: ../user-account.php');
}
elseif ("/admin-bookings.php" == $page_url) {
    header('Location: ../admin-bookings.php');
}