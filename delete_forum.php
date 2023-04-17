<?php
session_start();

$db = new mysqli("localhost", "IGame", "Aika@2308", "igame");

// Check if user is not logged in
if (!isset($_SESSION["username"])) {
  // Redirect to login.php
  header("Location: login.php");
  exit();
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $id_forum = $_POST["id_forum"];

  // Prepare and execute the database query to delete the forum topic
  $stmt = $db->prepare("DELETE FROM forum WHERE id_forum = ? AND ID_USER = ?");
  $stmt->bind_param("ii", $id_forum, $_SESSION["id"]);
  $stmt->execute();
  $stmt->close();

  // Redirect back to forum.php after deleting the forum topic
  header("Location: forum.php");
  exit();
}

// Close database connection
$db->close();
