<?php
   session_start();
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
<h1>Home</h1>
<div><h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>
</body>
</html>
