<?php 
// session_start();
include("./conn.php");

$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = password_hash($_POST['password'], PASSWORD_ARGON2ID, ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]);

// $checkEmail = $conn->query("SELECT email FROM Users WHERE email = '$emial'");
// if ($checkEmail->num_rows > 0) {
//    $_SESSION['register_error'] = 'Email is already registerd!';
//   $_SESSION['active_form'] = 'register';
//}
//
$sql = 'INSERT INTO Users(username, email, phonenumber, password) VALUES (:username, :email, :phonenumber, :password );';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":phonenumber", $phonenumber);
$stmt->bindParam(":password", $password);
$stmt->execute();

header('Location: ../login.php');
