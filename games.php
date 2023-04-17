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
      </div>
    </nav>
    <div class="content">

      <nav id="games">
        <h1>Games</h1>

        <p>Video games have come a long way since their inception in the 1950s. Today, games are enjoyed by people all
          over the world and on a variety of different consoles, such as the Nintendo Switch, PlayStation, and Xbox.
          Each
          console has its own unique features and benefits, making it important for gamers to choose the right one for
          their needs.</p>
        <p>When it comes to types of games, there is something for everyone. From action-packed shooters to immersive
          RPGs, there are games that cater to different interests and skill levels. Some games require strategy and
          critical thinking, while others are more fast-paced and reflex-based. Whether you're into sports, racing, or
          adventure games, there's always something new and exciting to play.</p>
        <p>The rise of mobile gaming has also led to a new era of games that can be played on smartphones and tablets.
          These games are often simpler and more casual than console games, making them accessible to a wider audience.
          With so many free-to-play options available, mobile gaming has become a popular pastime for people of all
          ages.
        </p>
        <p>One of the most exciting things about gaming is the sense of community that it can create. Online multiplayer
          games allow players to connect with others from all over the world, working together to achieve common goals
          or
          competing against each other for bragging rights. Whether you're a casual gamer or a die-hard enthusiast, the
          gaming world has something for everyone.</p>
      </nav>
    </div>


  </main>
  <?php
  include 'footer.php';
  ?>
</body>

</html>