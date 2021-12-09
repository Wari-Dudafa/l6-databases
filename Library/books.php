<!DOCTYPE html>
<html>
<head>
    
    <title>Books</title>
    
</head>
<body>
      
<form action="addbooks.php" method="post">
  Book title:<input type="text" name="itle"><br>
  Author surname:<input type="text" name="authorsurname"><br>

  Status:<select name="satus">
		<option value="1">Available</option>
		<option value="0">Unavailable</option>
	</select>
  <br>

  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="genre" value="Children" checked> Children<br>
  <input type="radio" name="genre" value="Teens"> Teens<br>
  <input type="radio" name="genre" value="YoungAdults"> YoungAdults<br>
  <input type="radio" name="genre" value="Adults"> Adults<br>
  <input type="submit" value="Add Book">
</form>
 
</body>
</html>