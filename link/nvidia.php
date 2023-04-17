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
    <nav id="nvidia">
      <h1>Nvidia GeForce Now makes RTX 3080-class gaming even easier</h1>
      <video controls poster="../img/pc.png">
        <source src="../video/nvidia.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p>Nvidia GeForce Now is a cloud gaming service that allows gamers to play their favorite PC games on any device,
        from anywhere in the world, without the need for a high-end gaming PC. With the recent addition of the RTX
        3080-class graphics cards, GeForce Now offers even more power and performance to its users.</p>
      <p>The RTX 3080-class graphics cards are some of the most powerful graphics cards available on the market, and now
        they are available to GeForce Now users. This means that gamers can enjoy the latest and greatest PC games at
        the highest graphics settings, with ray tracing and other advanced features enabled, even on devices that
        wouldn't normally be able to handle such high-end gaming.</p>
      <p>GeForce Now's cloud-based gaming means that users can play games on any device, including laptops, desktops,
        tablets, and smartphones, as long as they have a stable internet connection. This makes gaming more accessible
        and convenient than ever before, as users can now play their favorite games on the go or while away from their
        high-end gaming PCs.</p>
      <p>In addition to the RTX 3080-class graphics cards, GeForce Now also offers a range of other powerful graphics
        cards to its users, including the RTX 2080 and GTX 1080. This means that gamers can choose the graphics card
        that best suits their needs and budget.</p>
      <p>Overall, Nvidia GeForce Now is a game-changer for cloud gaming, offering gamers the power and performance of
        high-end gaming PCs without the need for expensive hardware. With the recent addition of the RTX 3080-class
        graphics cards, GeForce Now is now more powerful and accessible than ever before, making it the perfect choice
        for gamers who want to enjoy the latest and greatest PC games on any device.</p>
    </nav>

  </main>
  <footer>
    <p>&copy; 2023 IGame</p>
  </footer>
</body>

</html>