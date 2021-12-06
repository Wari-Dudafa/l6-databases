<?php
header('Location: index.php');
include_once("connection.php");
//print_r($_POST);
switch($_POST["role"]){
	case "Reader":
		$role=0;
		break;
	case "Librarian":
		$role=1;
		break;
}
$stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Surname,Forename,Password,Role)VALUES (null,:surname,:forename,:password,:role)");

$stmt->bindParam(':forename', $_POST["forename"]);
$stmt->bindParam(':surname', $_POST["surname"]);
$stmt->bindParam(':password', $_POST["passwd"]);
$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;

echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";
echo $_POST["passwd"]."<br>";
echo $_POST["role"]."<br>";

?>