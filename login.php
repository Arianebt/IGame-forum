<?php
// Start session
session_start();

// Create a new database connection
$db = new mysqli("localhost", "IGame", "Aika@2308", "igame");

// Check for database connection error
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Retrieve user data from the database
  $stmt = $db->prepare("SELECT * FROM users WHERE username = ? and password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["id"];
    $_SESSION["username"] = $username;
    header("Location: forum.php");
    $stmt->close();
  } else {
    echo "Error: Invalid username or password.";
  }
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IGame</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <div class="head">
      <img src="img/icon.png">
      <h1>Welcome to IGame</h1>
      <div id="line-div"></div>
    </div>
    <p>Explore the world of gaming with IGame</p>
  </main>
  <div class="content">
    <form action="#" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>