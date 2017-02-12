<?php
   session_start();
   // connect to database
   $db = mysqli_connect("localhost", "root", "", "authentication");
   if (isset($_POST['register_btn'])) {
     session_start();
     $username = mysql_real_escape_string($_POST['username']);
      $email = mysql_real_escape_string($_POST['email']);
      $password = mysql_real_escape_string($_POST['password']);
      $password = mysql_real_escape_string($_POST['password']);
    if ($password == $password2)  {
      // create user
      $password = md5($password); //hash password before storing for security puposes
       $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
       mysqli_query($db, $sql);
        $_SESSION['message'] = "You are now logged in";
         $_SESSION['username'] = $username;
         header("location: home.php"); //redirect to home page
    }else{
      $_SESSION['message'] = "The two passwords do not match";
     }
   }
?>
<html>
<head>
<title>Register, login and logout user php mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
  <h1>Register, login and logout user php mysql</h1>
</div>
<form method="post" action="register.php">
  <table>
    <tr>
       <td>Username:</td>
       <td><input type="text" name="username"
class="textInput"></td>
     </tr>
     <tr>
         <td>Email:</td>
         <td><input type="email" name="email" class="textInput"></td>
      </tr>
      <tr>
         <td>Password:</td>
         <td><input type="password" name="password" class="textInput"></td>
      </tr>
       <tr>
         <td>Password again:</td>
         <td><input type="password" name="password2" class="textInput"></td>
      </tr>
       <tr>
         <td></td>
         <td><input type="submit" name="register btn" class="Register"></td>
      </tr>
    </table>    
</body>
</html>
