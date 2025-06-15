<?php
include('conn.php');

$stmt = $conn->prepare("SELECT * FROM Hotel_reviews");
$stmt->execute();
$reviews = $stmt->fetchAll(); 
