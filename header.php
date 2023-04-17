<header>
  <?php
  //Start session
  @session_start();
  //var_dump($_SESSION);
  //exit;
  ?>
  <nav>
    <ul>
      <li class="main"><a href="index.php">Home</a></li>
      <li class="main"><a href="about.php">About</a></li>
      <li class="main"><a href="games.php">Games</a></li>
      <li class="main"><a href="signup.php">Sign Up</a></li>
      <?php
      if (isset($_SESSION["username"])) {
      ?>
        <li class="main"><a href="logout.php">Logout</a></li>
        <li class="main"><a href="forum.php">Forum</a></li>
      <?php } else { ?>
        <li class="main"><a href="login.php">Login</a></li>
      <?php } ?>
      <li class="main"><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <nav>

  </nav>
</header>