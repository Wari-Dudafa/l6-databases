<!DOCTYPE html>
<html>
<head>
  
   <title>BookSearch</title>
   <link rel="stylesheet" href="style.css">
  
</head>
<body>

  <nav>
    <ul>
      <li><img src="Logo.png" alt="Logo3" style="width:100;height:100px;"></li>
      <li><A HREF="aboutus.php">About us</A></li>
    </ul>

  </nav>  






<h2> These are the books we have available:</h2><br>

<h3><?php 
include_once('connection.php'); 
$stmt = $conn->prepare("SELECT * FROM TblBooks"); 
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{ 
  echo($row["Title"].' '.$row["AuthorSurname"].' '.$row["Status"]."<br>"); 
} 
?>
</h3>    


</body>
</html>
