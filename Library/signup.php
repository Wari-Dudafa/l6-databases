<!DOCTYPE html>
<html>
<head>
    
    <title>Sign up</title>
    
</head>
<body>
      
<form action="addusers.php" method="post">
  First name:<input type="text" name="forename"><br>
  Last name:<input type="text" name="surname"><br>
  Password:<input type="password" name="passwd"><br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="role" value="Reader" checked> Reader<br>
  <input type="submit" value="Sign up">
</form>
 
</body>
</html>
