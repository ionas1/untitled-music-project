<?php include_once 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="../css/signup.css"/>
   <link rel="stylesheet" type="text/css" href="../css/signup.css"/>
</head>
<body>
    <form class="signup-form" action="../include/signup_db.php" method="POST">
    <h1>Signup</h1>
      <input class="grid-item" type="text" name="firstname" placeholder="Firstname"/>
      <input class="grid-item" type="text" name="lastname" placeholder="Lastname"/>
      <input class="grid-item" type="text" name="email" placeholder="E-mail"/>
      <input class="grid-item" type="text" name="username" placeholder="Username"/>
      <input class="grid-item" type="password" name="password" placeholder="Password"/>

      <button class="grid-item" type="submit" name="submit">Signup</button> 
    </form>
</body>
</html>