<!DOCTYPE html>
<html>
<head>
    
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
      
<form action="addbooks.php" method="post">
  Book title:<input type="text" name="title"><br>
  Author's surname:<input type="text" name="authorsurname"><br>
  Status:<input type="radio" name="status" value="Available" checked> Available <input type="radio" name="status" value="Unavailable"> Unavailable<br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="genre" value="Kids" checked> Kids<br>
  <input type="radio" name="genre" value="Teens"> Teens<br>
  <input type="radio" name="genre" value="Adults"> Adults<br>
  <input type="submit" value="Add Book">
</form>
 
</body>
</html>
