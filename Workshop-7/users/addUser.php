<?php
  include_once('../utils/functions.php');
  include_once('../utils/databaseConexion.php');

  $dbManager = new DataBaseConexion();
  $provinces = $dbManager->getProvinces();

  $userID = $_GET['id'];
  $user = $dbManager->getUserByID($userID);
  $role = 'none';

  // If the user exists, then that means an admin is trying to alter an user, so the role changes to that of the user,
  // if there is no user, then its a new one trying to register, so the role is none
  if (isset($user)) { $role = $user['role']; }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <header>
    <h1> Bienvenido <?php echo $user['name']; echo $user['lastname'] ?> </h1>
    <img src="<?php echo $user['imageurl']; ?>" alt="User profile picture"/>
    <a href="/logout.php">Logout</a>
  </header>

  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Signup</h1>
      <p class="lead">This is the signup process</p>
      <hr class="my-4">
    </div>
    <form method="post" action="../signup.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="first-name">First Name</label>
        <input id="first-name" class="form-control" type="text" name="firstName">
      </div>
      <div class="form-group">
        <label for="last-name">Last Name</label>
        <input id="last-name" class="form-control" type="text" name="lastName">
      </div>
      <div class="form-group">
        <label for="user-name">Username</label>
        <input id="user-name" class="form-control" type="text" name="userName">
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input id="email" class="form-control" type="text" name="email">
      </div>

      <?php
      // An admin can also introduce the role of a new user
        if ($role === 'admin') {
          echo '<div class="form-group">';
          echo '<label for="role">Role</label>';
          echo '<input id="role" class="form-control" type="text" name="role" value"nonAdmin">';
          echo '</div>';
        }
      ?>

      <div class="form-group">
        <label for="province">Provincia</label>
        <select id="province" class="form-control" name="province">
          <?php
          foreach($provinces as $id => $province) {
            echo "<option value=\"$id\">$province</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password">
      </div>

      <div class="form-group">
        <label for="imageurl">Profile Picture</label>
        <input type="file" name="imageurl" id="imageurl">
      </div>
      
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

</body>

</html>