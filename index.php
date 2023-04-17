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
    <nav id="games">
      <div id="menu">
        <ul>
          <li><a href="gamesMenu/news.php">News</a></li>
          <li><a href="gamesMenu/ps.php">Playstation</a></li>
          <li><a href="gamesMenu/nintendo.php">Nintendo</a></li>
          <li><a href="gamesMenu/xbox.php">Xbox</a></li>
          <li><a href="gamesMenu/pc.php">PC</a></li>
          <li><a href="gamesMenu/mobile.php">Mobile</a></li>
        </ul>
    </nav>

    <div class="content">
      <div class="grid-container">
        <div div class="grid-item">
          <a href="gamesMenu/news.php">
            <p>News</p>
          </a>
          <a href="link/resident.php">
            <img src="img/news1.png" alt="Image 1">
          </a>
        </div>

        <div div class="grid-item">
          <a href="gamesMenu/nintendo.php">
            <p>Nintendo Switch</p>
          </a>
          <a href="link/zelda.php">
            <img src="img/nintendoSwitch.png" alt="Zelda">
          </a>
        </div>

        <div div class="grid-item">
          <a href="gamesMenu/playstation.php">
            <p>Playstation</p>
          </a>
          <a href="link/baldur.php">
            <img src="img/ps5.png" alt="playstation game">
          </a>
        </div>
      </div>
      <div class="grid-container">
        <div class="grid-item">
          <a href="gamesMenu/xbox.php">
            <p>Xbox Series X</p>
          </a>
          <a href="link/hp.php">
            <img src="img/xbox.png" alt="xbox game">
          </a>
        </div>
        <div class="grid-item">
          <a href="gamesMenu/pc.php">
            <p>PC Gaming</p>
          </a>
          <a href="link/nvidia.php">
            <img src="img/pc.png" alt="pc game">
          </a>
        </div>
        <div class="grid-item">
          <a href="gamesMenu/mobile.php">
            <p>Mobile Gaming</p>
          </a>
          <a href="link/niNoKuni.php">
            <img src="img/mobile.png" alt="mobile game">
          </a>
        </div>
      </div>
    </div>


  </main>
  <?php
  include 'footer.php';
  ?>
</body>

</html>