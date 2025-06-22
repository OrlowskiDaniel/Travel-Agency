<?php
include("./conn.php");

$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$user_id = $_POST['user_id'];


$sql = 'UPDATE Users 
        SET username = :username, email = :email, phonenumber = :phonenumber
        WHERE user_id = :user_id';
$stmt = $conn->prepare($sql);

$stmt->bindParam(":username", $username);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":phonenumber", $phonenumber);
$stmt->bindParam(":user_id", $user_id);

$stmt->execute();

header('Location: ../admin-users.php');