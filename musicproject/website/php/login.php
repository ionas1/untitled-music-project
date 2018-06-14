<?php include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/loginn.css"/>

    </head>
    <body>
    <form class="login-form" action="../include/login_db.php" method="POST">
        <h1>Login</h1>
      <input class="grid-item" type="text" name="username" placeholder="Username/e-mail"/>
      <input class="grid-item" type="password" name="password" placeholder="Password"/>
      <button class="grid-item" type="submit" name="submit">Login</button> 
    </form>
</body>
</html>