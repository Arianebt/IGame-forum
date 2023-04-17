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
      <img src="../img/icon.png">
      <h1>Welcome to IGame</h1>
      <div id="line-div"></div>
    </div>
    <nav id="games">
      <div id="menu">
        <ul>
          <li><a href="..\gamesMenu\news.php">News</a></li>
          <li><a href="..\gamesMenu\ps.php">Playstation</a></li>
          <li><a href="..\gamesMenu\nintendo.php">Nintendo</a></li>
          <li><a href="..\gamesMenu\xbox.php">Xbox</a></li>
          <li><a href="..\gamesMenu\pc.php">PC</a></li>
          <li><a href="..\gamesMenu\mobile.php">Mobile</a></li>
        </ul>
      </div>
    </nav>
    <nav id="zelda">
      <h1>New Most waited release for Zelda fans: The Legend Of Zelda: Tears Of The
        Kingdom</h1>
      <video controls poster="../img/nintendoSwitch.png">
        <source src="../video/zelda.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p>The Legend of Zelda: Tears of the Kingdom (also known as Breath of the Wild 2) is finally coming out later
        this year, and looks set to continue the story of Link and Zelda as they fight to save Hyrule from a new
        threat.</p>
      <p>Releasing exclusively for Nintendo Switch, Tears of the Kingdom is the sequel to 2017’s Breath of the Wild,
        which is widely considered to be one of the best Switch games ever and was the console's biggest launch
        title. In other words, Tears of the Kingdom has some big shoes to fill.</p>
      <p>While Tears of the Kingdom does appear to use many of the same locations and gameplay mechanics as Breath
        of the Wild, there's plenty that sets it apart. For one, you can take to the skies and explore floating
        islands, before sky-diving back to ground level. There's even time manipulation this time around.</p>
      <p>If you're a fan of the first game, or just love action-adventure games in general, then you won't want to
        miss Tears of the Kingdom. Keep an eye out for all the latest news and updates on this highly anticipated
        release.</p>
    </nav>

  </main>
  <footer>
    <p>&copy; 2023 IGame</p>
  </footer>
</body>

</html>