<?php
header('Location: books.php');
include_once("connection.php");
print_r($_POST);
switch($_POST["genre"]){
	case "kids":
		$role=0;
		break;
	case "Teens":
		$role=1;
		break;
	case "Adults":
		$role=2;
		break;
}
$stmt = $conn->prepare("INSERT INTO TblBooks (BookID,Title,AuthorSurname,Status,Genre)VALUES (null,:title,:authorsurname,:status,:genre)");

$stmt->bindParam(':title', $_POST["title"]);
$stmt->bindParam(':authorsurname', $_POST["authorsurname"]);
$stmt->bindParam(':status', $_POST["status"]);
$stmt->bindParam(':genre', $role);
$stmt->execute();
$conn=null;

echo $_POST["title"]."<br>";
echo $_POST["authorsurname"]."<br>";
echo $_POST["status"]."<br>";
echo $_POST["genre"]."<br>";

?>