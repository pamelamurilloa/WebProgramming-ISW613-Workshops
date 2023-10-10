<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <title>Document</title>
</head>
<body>
<div class="container">
    <h1>User Login</h1>
    <form action="login.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Your username">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Your password">
      </div>

      <input type="submit" class="btn btn-primary" value="Login"></input>

      <a class="btn" href="/WebProgramming-Workshops/Workshop-3/users/addUser.php">Sign Up</a>
</body>
</html>