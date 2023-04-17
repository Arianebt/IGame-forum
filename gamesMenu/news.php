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

        <img src="../img/news1.png" alt="resident">
      </div>
      <div class="column">
        <a href="../link/resident.php">Resident Evil 4 Gets New Gameplay Footage, Releasing Demo Soon</a>
      </div>
    </div>
    <div class="row">
      <div class="column">

        <img src="../img/vr.png" alt="vr">
      </div>
      <div class="column">
        <a href="../link/vr.php">Can mind-controlled VR games help stroke patients?</a>
      </div>
    </div>


  </main>
  <?php
  include '../footer.php';
  ?>
</body>

</html>