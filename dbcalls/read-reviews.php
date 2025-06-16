<?php
include('conn.php');

$stmt = $conn->prepare("
    SELECT Hotel_reviews.*, Users.username 
    FROM Hotel_reviews
    JOIN Users ON Hotel_reviews.user_id = Users.user_id
    WHERE hotel_id = :hotel_id
    ORDER BY review_date DESC
");
$stmt->bindParam(":hotel_id", $hotel_id, PDO::PARAM_INT);
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
