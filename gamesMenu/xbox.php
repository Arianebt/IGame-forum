<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IGame</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <div class="head">
      <img src="../img/icon.png">
      <h1>Welcome to IGame</h1>
      <div id="line-div"></div>
    </div>
    <?php
    include 'games.php';
    ?>

    <div class="row">
      <div class="column">

        <img src="../img/xbox.png" alt="hp">
      </div>
      <div class="column">
        <a href="../link/hp.php">Hogwarts Legacy's Success Signifies Rich Open Worlds Are Still Gamers' Choice</a>
      </div>
    </div>


  </main>
  <?php
  include '../footer.php';
  ?>
</body>

</html>