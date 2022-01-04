<?php 

header('Location:bookfound.php'); 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 
try{ 
    include_once('connection.php'); 
    array_map("htmlspecialchars", $_POST); 
    $stmt = $conn->prepare("INSERT INTO TblBooks (BookID,AuthorSurname,Title)VALUES (NULL,:authorsurname,:title)"); 
    $stmt->bindParam(':authorSurname', $_POST["authorSurname"]); 
    $stmt->bindParam(':title', $_POST["title"]); 
    $stmt->execute(); 
    } 
catch(PDOException $e) 
{ 
    echo "error".$e->getMessage(); 
} 

$conn=null; 

?> 