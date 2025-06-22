<?php
session_start();
include('conn.php');

$hotel_id = (int) $_GET['hotel_id'];
$user_id = (int) $_SESSION['user_id'];
$rating = (int) $_GET['stars'];
$comment = trim($_GET['comment'] ?? '');

$stmt = $conn->prepare("
    INSERT INTO Hotel_reviews (hotel_id, user_id, rating, comment, review_date)
    VALUES (:hotel_id, :user_id, :rating, :comment, NOW())
");
$stmt->execute([
    ':hotel_id' => $hotel_id,
    ':user_id' => $user_id,
    ':rating' => $rating,
    ':comment' => $comment,
]);

header("Location: ..//hotel$hotel_id.php");
exit;
