<?php

include("conn.php");

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM Contact WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header('Location: ../admin-messages.php');