<nav class="nav">
    <span> Bienvenido <?php echo $user['name']; echo $user['lastname'] ?> </span>
    <a href="logout.php">Logout</a>
    <li class="nav-item">
      <a class="nav-link disabled" href="/dashboard.php" tabindex="-1" aria-disabled="true">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Arboles</a>
    </li>
    <?php  if($user['role'] === 'admin') { ?>
      <li class="nav-item">
        <a class="nav-link active" href="/users.php">Users</a>
      </li>
    <?php } ?>
  </nav>