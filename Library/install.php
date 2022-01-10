<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblBooks;
CREATE TABLE TblBooks 
(BookID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(50) NOT NULL,
AuthorSurname VARCHAR(50) NOT NULL,
Status  INT(2) NOT NULL,
Genre  TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
Role  TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();
?>