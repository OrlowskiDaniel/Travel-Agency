<?php
include('conn.php');

$stmt = $conn->prepare("SELECT * FROM Contact");
$stmt->execute();
$result = $stmt->fetchAll();
