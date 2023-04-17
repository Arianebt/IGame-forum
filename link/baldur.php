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
    <nav id="baldur">
      <h1>Baldur's Gate 3 Released Day for PS5</h1>
      <video controls poster="../img/ps5.png">
        <source src="../video/baldur.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p>Larian Studios is gearing up for the official release of Baldur’s Gate 3, their highly anticipated Dungeons &
        Dragons role-playing game. The game, which has been playable in early access since 2020, is set to be released
        on August 31 for MacOS, PlayStation 5, and Windows PC. However, according to Larian, there is no version of
        Baldur’s Gate 3 currently in development for Xbox.</p>
      <p>Despite rumors of platform exclusivity, Larian creative director Swen Vincke took to Twitter to assure fans
        that this was not the case. The developer has been working on an Xbox version of the game for some time, but has
        run into technical issues, particularly with split-screen co-op. According to a statement released by Larian on
        Reddit, the studio is still working on the Xbox version, but is not yet confident enough to announce a release
        date.</p>
      <p>The game’s summer release was announced during Sony’s State of Play showcase, which also revealed a new trailer
        for the RPG. The trailer introduced Baldur’s Gate fans to General Ketheric Thorm, a "seemingly invincible
        necromancer leading an army of the dead," who is voiced by the beloved and intimidating J.K. Simmons.</p>
      <p>The trailer also highlighted two new features for Baldur’s Gate 3: split-screen co-op play and controller
        support. The former feature is one of the reasons there is currently no Xbox version of the game. However,
        Larian has confirmed that there is no platform exclusivity preventing the game from being released on Xbox,
        should they be able to resolve the technical issues.</p>
      <p>One of the most highly anticipated RPGs in recent memory, Baldur’s Gate 3 promises to deliver an immersive and
        engaging experience to players around the world. Whether you’re a die-hard Dungeons & Dragons fan or a newcomer
        to the genre, this game is sure to offer something for everyone. With a release date set for August 31, gamers
        everywhere are eagerly awaiting the chance to jump into the world of Baldur’s Gate and experience all it has to
        offer.</p>
    </nav>

  </main>
  <footer>
    <p>&copy; 2023 IGame</p>
  </footer>
</body>

</html>