<?php
include_once ("connection.php");
header('Location: login.php');
print_r($_POST);
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE surname =:username ;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    if($row['Password']== $_POST['Pword']){
        
        if ($row['Role'] == 1){
            header('Location: librarianindex.php');
        }else{
            header('Location: readerindex.php');
        }
    }else{
        header('Location: login.php');
    }
}
$conn=null
?>