<?php
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
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm-password"];

  // Validate form data
  if ($password != $confirmPassword) {
    echo "Error: Passwords do not match.";
  } else {
    // Check if username or email already exists
    $stmt = $db->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
      echo "Error: Username or email already exists.";
    } else {
      // Insert user data into the database
      $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $username, $email, $password);
      if ($stmt->execute()) {
        echo "User registered successfully.";
      } else {
        echo "Error: " . $stmt->error;
      }
      $stmt->close();
    }
  }
}

$db->close();
?>

<!-- Rest of your HTML code -->


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

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>

      <button type="submit">Sign Up</button>
    </form>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>