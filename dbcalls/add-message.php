<?php
include("./conn.php");

$name = $_POST['name'];
$mail = $_POST['mail'];
$phonenumber = $_POST['phonenumber'];
$company = $_POST['company'];
$comment = $_POST['comment'];


if (
    is_string($name) &&
    filter_var($mail, FILTER_VALIDATE_EMAIL) &&
    is_string($company) &&
    is_string($comment)
) {

$sql = 'INSERT INTO Contact(name, mail, phonenumber, company, comment) VALUES (:name, :mail, :phonenumber, :company, :comment);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":mail", $mail);
$stmt->bindParam(":phonenumber", $phonenumber);
$stmt->bindParam(":company", $company);
$stmt->bindParam(":comment", $comment);
$stmt->execute();
header('Location: ../contact.php');
} else {
    echo 'Invalid input!';
}