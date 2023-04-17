<?php
// Include your database connection file
include('db_connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $id_forum = $_POST['id_forum'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];

  // Update the forum post in the database
  $stmt = $conn->prepare("UPDATE Forum SET subject = ?, description = ? WHERE id_forum = ? AND ID_USER = ?");
  $stmt->bind_param("ssii", $subject, $description, $id_forum, $_SESSION['ID_USER']); // Assuming you have a user_id stored in a session
  $result = $stmt->execute();

  if ($result) {
    // Redirect to the forum page
    header('Location: forum.php');
    exit;
  } else {
    // Show an error message
    echo "Error updating forum post: " . $stmt->error;
  }

  // Close the statement
  $stmt->close();
}

// Retrieve the forum post data
$id_forum = $_GET['id_forum'];
$user_id = $_SESSION['ID_USER'];

// Retrieve the forum post from the database
$stmt = $conn->prepare("SELECT * FROM Forum WHERE id_forum = ? AND ID_USER = ?");
$stmt->bind_param("ii", $id_forum, $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if the forum post exists and user_id matches
if (!$row) {
  echo "Forum post not found or user not authorized to edit.";
  exit;
}

// Close the statement
$stmt->close();

?>

<!-- HTML form to edit the forum post -->
<!DOCTYPE html>
<html>

<head>
  <title>Edit Forum Post</title>
</head>

<body>
  <h1>Edit Forum Post</h1>
  <form method="post" action="edit_forum.php">
    <input type="hidden" name="id_forum" value="<?php echo $row['id_forum']; ?>">
    <label for="subject">Subject:</label><br>
    <input type="text" name="subject" value="<?php echo $row['subject']; ?>"><br>
    <label for="description">Description:</label><br>
    <textarea name="description"><?php echo $row['description']; ?></textarea><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>