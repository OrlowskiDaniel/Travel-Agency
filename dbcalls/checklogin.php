<?php
session_start();
include('./conn.php');



$username = $_POST['username'];
$password = $_POST['password'];
$alert = "<script>alert('Wrong password or login!')</script>";

$stmt = $conn->prepare("SELECT * FROM Users WHERE username = :username;");
$stmt->bindParam(":username", $username);
$stmt->execute();
$result = $stmt->fetch();


if ($result && password_verify($password, $result['password'])) {
    $_SESSION['username'] = $result['username'];
    echo "<script>" . "window.location.href='../index.php';" . "</script>";
    exit();
}
else {
    echo $alert;
    echo "<script>" . "window.location.href='../login.php';" . "</script>";
    
    exit();
}