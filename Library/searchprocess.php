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
    if($row['authorsurname']== $_POST['authorsurname']){
        header('Location: bookfound.php');
        
    }else{
        header('Location: searchagain.php');
    }
}
$conn=null;
?>