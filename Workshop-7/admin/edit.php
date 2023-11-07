<?php
    include_once('../utils/functions.php');
    include_once('../utils/databaseConexion.php');
    $dbManager = new DataBaseConexion();

    $provinces = $dbManager->getProvinces();

    $userID = $_GET['id'];
    $user = $dbManager->getUserByID($userID);
    echo $user['province_id'];

    confirmLogin();

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
  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">Edit</h1>
      <?php
        echo '<p class="lead">You are editing the information of the user with ID ' . $userID . ' </p>'
      ?>
      <hr class="my-4">
    </div>
    <form method="post" action="editCompleted.php">

        <?php
            echo '<input type="hidden" name="id" value="' . $userID . '">';
        ?>

      <div class="form-group">
        <label for="first-name">First Name</label>
        <?php
        echo '<input id="first-name" class="form-control" type="text" name="firstName" value="' . $user['firstname'] . '">'
        ?>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name</label>
        <?php
        echo '<input id="last-name" class="form-control" type="text" name="lastName" value="' . $user['lastname'] . '">'
        ?>
      </div>
      <div class="form-group">
        <label for="user-name">Username</label>
        <?php
        echo '<input id="user-name" class="form-control" type="text" name="userName" value="' . $user['username'] . '">'
        ?>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <?php
        echo '<input id="email" class="form-control" type="text" name="email" value="' . $user['email'] . '">'
        ?>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <?php
        echo '<input id="role" class="form-control" type="text" name="role" value="' . $user['role'] . '">'
        ?>
      </div>
      <div class="form-group">
        <label for="province">Provincia</label>
        <select id="province" class="form-control" name="province">
          <?php
          foreach($provinces as $id => $province) {
            $selected = ($id == $user['province_id']) ? 'selected' : '';
            echo "<option value=\"$id\" $selected>$province</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <?php
        echo '<input id="password" class="form-control" type="password" name="password" value="' . $user['password'] . '">'
        ?>
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

</body>

</html>