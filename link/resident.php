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
    <nav id="resident">
      <h1>Resident Evil 4 Gets New Gameplay Footage, Releasing Demo Soon</h1>
      <video controls poster="../img/news1.png">
        <source src="../video/resident.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p>
        During today's PlayStation State of Play, Sony's first event of 2023, some exciting new gameplay footage of the
        highly anticipated Resident Evil 4 remake was showcased. Furthermore, it was announced that a special demo for
        the game would be released soon, and fans were ecstatic to hear that the beloved Mercenaries mode from the
        original game would be making a return after beating the main campaign.
      </p>
      <p>
        Sony gave us a sneak peek at new gameplay footage of the upcoming Resident Evil 4 remake. Among the highlights
        was the reveal of a boss fight with Jack Krauser, one of the game's most memorable antagonists. We also caught a
        glimpse of Ada Wong, as well as some more footage of Luis, who was seen alongside Leon in the minecart section.
      </p>
      <p> Mark your calendars for March 24, 2023, as Resident Evil 4 will be available on PlayStation 4, PlayStation 5,
        Windows, and Xbox Series X/S. Also, a free VR mode exclusive to PSVR 2 is in development, which Capcom announced
        earlier this week.
      </p>
    </nav>

  </main>
  <footer>
    <p>&copy; 2023 IGame</p>
  </footer>
</body>

</html>