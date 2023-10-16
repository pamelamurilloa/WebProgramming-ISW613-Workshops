<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <title>Login</title>
</head>
<body>
<div class="container">

    <h1>User Login</h1>
    <form action="session/login.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Your username">
      </div>
      <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Your password">
      </div>

      <input type="submit" class="btn btn-primary" value="Login"></input>

      <a class="btn" href="users/addUser.php?id=0">Sign Up</a>

      <?php
        if ( isset( $_GET["error"] ) ){
          $error_message = $_GET["error"];
          echo '<p class="error_message">' . $error_message;
        }
      ?>
</body>
</html>
