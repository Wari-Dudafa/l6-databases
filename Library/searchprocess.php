<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
</body>
</html>


<?php
include_once ("connection.php");
print_r($_POST);
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblbooks WHERE title =:title ;" );
$stmt->bindParam(':title', $_POST['title']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    print_r($row);
    if($row['AuthorSurname']== $_POST['authorsurname']){
        header('Location: bookfound.php');

    }else{

        header('Location: search.php');
    }
}
$conn=null;
//header('Location: login.php');
?>