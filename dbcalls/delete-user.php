<?php

include("conn.php");

$id = $_POST['user_id'];

$stmt = $conn->prepare("DELETE FROM Users WHERE user_id=:user_id");
$stmt->bindParam(":user_id", $id);
$stmt->execute();

header('Location: ../admin-users.php');