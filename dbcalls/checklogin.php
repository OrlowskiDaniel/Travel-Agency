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
    $_SESSION['role'] = $result['role'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['phonenumber'] = $result['phonenumber'];
    $_SESSION['creationtime'] = $result['creationtime'];
    $_SESSION['user_id'] = $result['user_id'];
    
    if ($_SESSION['role'] == 'admin') {
        echo "<script>" . "window.location.href='../admin.php';" . "</script>";
    }
    else {
        echo "<script>" . "window.location.href='../index.php';" . "</script>";
        exit();
    }
}
else {
    echo $alert;
    echo "<script>" . "window.location.href='../login.php';" . "</script>";
    
    exit();
}