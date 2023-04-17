<?php
session_start();

$db = new mysqli("localhost", "IGame", "Aika@2308", "igame");

// Check if user is not logged in
if (!isset($_SESSION["username"])) {
  // Redirect to login.php
  header("Location: login.php");
  exit();
}

// Forum page content
// Add your forum page content here

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $SUBJECT = $_POST["subject"];
  $DATE = $_POST["date"];
  $DESCRIPTION = $_POST["description"];

  // Check if image is uploaded
  if (!empty($_FILES['image']['tmp_name'])) {
    // Process the uploaded image file
    $image = file_get_contents($_FILES['image']['tmp_name']);
  } else {
    $image = NULL; // Set to NULL if no image is uploaded
  }

  // Prepare and execute the database query
  $stmt = $db->prepare("INSERT INTO forum (ID_USER, SUBJECT, DATE, DESCRIPTION, IMAGE) VALUES (?, ?, ?, ?, ?)");
  $ID_USER = $_SESSION["id"];
  $stmt->bind_param("ssssb", $ID_USER, $SUBJECT, $DATE, $DESCRIPTION, $image);
  $stmt->execute();
  $stmt->store_result();

  // Example: Display success message
  echo "<p>Forum created successfully!</p>";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IGame - Forum</title>
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
      <h1>Welcome to IGame Forum</h1>
      <div id="line-div"></div>
    </div>
    <h2>Create a New Forum</h2>
    <!-- HTML form for forum.php -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>
      <br>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      <br>
      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>
      <br>
      <label for="image">Image:</label>
      <input type="file" id="image" name="image">
      <br>
      <input type="submit" value="Create Forum">
    </form>

    <h2>Forum Topics</h2>
    <table>
      <tr>
        <th>User</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Image</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
      <?php
      // Fetch forum topics from database
      $stmt = $db->prepare("SELECT ID_USER, SUBJECT, DESCRIPTION, IMAGE,DATE, id_forum FROM forum");
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result($ID_USER, $SUBJECT, $DESCRIPTION, $IMAGE, $DATE, $id_forum);

      // Loop through each row of fetched data and display in table
      while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $ID_USER . "</td>";
        echo "<td>" . $SUBJECT . "</td>";
        echo "<td>" . $DESCRIPTION . "</td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($IMAGE) . "' width='100px'></td>";
        echo "<td>" . $DATE . "</td>";
        echo "<td>";
        // Check if current user is the creator of the forum
        if ($_SESSION["id"] == $ID_USER) {
          // Display edit and delete buttons
          echo "<form method='post' action='edit_forum.php'>";
          echo "<input type='hidden' name='id_forum' value='" . $id_forum . "'>";
          echo "<input type='hidden' name='subject' value='" . $SUBJECT . "'>";
          echo "<input type='hidden' name='description' value='" . $DESCRIPTION . "'>";
          echo "<input type='submit' value='Edit'>";
          echo "</form>";
          echo "<form method='post' action='delete_forum.php'>";
          echo "<input type='hidden' name='id_forum' value='" . $id_forum . "'>";
          echo "<input type='submit' value='Delete'>";
          echo "</form>";
        }
        echo "</td>";
        echo "</tr>";
      }

      // Close database connection
      $stmt->close();
      $db->close();
      ?>
    </table>




  </main>
  <?php
  include 'footer.php';
  ?>
</body>

</html>