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
    <nav id="vr">
      <h1>Can mind-controlled VR games help stroke patients?</h1>
      <video controls poster="../img/vr.png">
        <source src="../video/vr.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p>There is growing interest in the potential of virtual reality (VR) games controlled by the power of the mind to
        aid stroke recovery. Research has shown that VR can be an effective tool for rehabilitation, and recent studies
        have explored the use of VR games that are controlled using electroencephalogram (EEG) signals from the brain.
        These games, known as brain-computer interface (BCI) games, allow stroke patients to control their movements in
        a virtual environment using only their thoughts.</p>
      <p>One study conducted in 2016 found that stroke patients who used a BCI game in combination with traditional
        rehabilitation techniques had better motor function recovery than those who only received traditional
        rehabilitation. Another study conducted in 2018 found that stroke patients who used a BCI game showed improved
        upper limb motor function and reduced spasticity.</p>
      <p>The potential benefits of mind-controlled VR games for stroke patients are clear. By using their thoughts to
        control their movements in a virtual environment, patients may be able to engage in a more immersive and
        enjoyable rehabilitation experience. This, in turn, could help to improve motivation and adherence to
        rehabilitation programs, which are crucial for long-term recovery.</p>
      <p>However, there are still many challenges to be addressed before mind-controlled VR games can become a
        mainstream tool for stroke rehabilitation. The technology is still in its early stages, and there are concerns
        around the accuracy and reliability of EEG signals. Additionally, more research is needed to determine the
        optimal parameters for BCI game-based rehabilitation, such as the length and frequency of game sessions.</p>
      <p>Overall, while the potential of mind-controlled VR games for stroke rehabilitation is exciting, there is still
        much work to be done before they can be widely adopted. Nevertheless, the results of existing studies are
        encouraging, and researchers are continuing to explore new ways to use technology to improve stroke recovery.
      </p>
    </nav>

  </main>
  <footer>
    <p>&copy; 2023 IGame</p>
  </footer>
</body>

</html>