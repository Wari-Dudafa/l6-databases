<?php
include_once ("connection.php");
print_r($_POST);
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE surname =:username ;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    print_r($row);
    if($row['Password']== $_POST['Pword']){
        //header('Location: users.php');
        if ($row['Role'] == 1){
            header('Location: librarianindex.php');
        }else{
            header('Location: readerindex.php');
        }
    }else{

        header('Location: login.php');
    }
}
$conn=null;
//header('Location: login.php');
?>