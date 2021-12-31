<!DOCTYPE html>
<html>
<head>
    
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  <nav>
      <ul>
        <li><img src="Logo.png" alt="Logo3" style="width:100;height:100px;"></li>
        <li><A HREF="index.php">Home</A> <br></li>
        <li><A HREF="signup.php">Sign up</A> <br></li>
        <li><A HREF="aboutus.php">About us</A></li>
      </ul>

  </nav>   

  <h1>Sign up</h1>
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
