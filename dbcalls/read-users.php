<?php
include('conn.php');

$stmt = $conn->prepare("SELECT * FROM Users");
$stmt->execute();
$result = $stmt->fetchAll(); 
