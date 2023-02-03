<!DOCTYPE html>
<html>
<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: ../../index.php');
        exit;
    }
    else{
      $uid=$_SESSION['id'];
      require('essentials/_conn.php');
      mysqli_query($conn,"INSERT into duration (uid, level, type) values ($uid, '4-bugged', '1')");

  }

?>
<head>
  <title>Path Pirates</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
  <style>
       *{
      margin: 0 0;
      padding: 0 0;
    }

    #home{
      font-family: Arial, sans-serif;
      text-align: center;
      background: url('img/bg.jpg') no-repeat center;
      background-attachment: fixed;
      background-size: cover;
      overflow-x: hidden;
    }

    img {
      padding-top: 1%;
      padding-bottom: 1%;
      width: 50%;
      /* filter: drop-shadow(0px 0px 10px #000); */
    }

    p {
    }
    
    p {
      width: 80%;
      margin: 0 auto;
      font-size: 28px;
      font-weight: bold;
      line-height: 2rem;
      text-align: justify;
      font-family: 'Old Standard TT', serif;

    }
  </style>
</head>

<body>
  <div id="home">
    <img src="img/text.png" alt="Pirates">
    <img src="img/internet.jpg" alt="Path">
    <p>
      Once upon a time, there was a young and ambitious hacker named Alex. Alex had always been fascinated with the world
      of hacking and had spent many hours learning about different types of attacks and vulnerabilities.</p>

      <br>
    <p>One day, Alex learned about a hacking competition named "Glitch" where the goal was to find a hidden flag inside a
      server. The competition was open to all hackers around the world and the prize for the winner was a large sum of
      money and recognition in the hacking community.</p>

      <br>

    <p>
      Determined to win, Alex set out to find the flag. He spent many hours studying the server, trying different
      techniques and methods to find a way in. He tried different types of attacks such as SQL injection, XSS and
      directory traversal but nothing seemed to work.
    </p>

    <br>

    <p>
      As the competition was drawing to a close and time was running out, Alex became desperate. He knew that he had to
      find the flag before it was too late. He decided to take a different approach and started to analyze the server's
      code and files.
    </p>

    <br>

    <p>
      Finally, after hours of hard work and determination, Alex found a hidden file containing the flag. He was overjoyed,
      he had found the flag and had won the competition. He knew that he had succeeded because of his determination and
      skill.
    </p>

    <br>

    <p>
      Alex was declared the winner of the competition and received the prize money and recognition in the hacking
      community. He was proud of himself and knew that he had what it takes to be a successful hacker.
    </p>

    <br>

    <p>
      From that day on, Alex became known as one of the best hackers in the world and continued to participate in many
      hacking competitions and challenged himself to find new ways to hack into servers. He was always determined to find
      the flag, no matter how difficult it may seem.
    </p>
  </div>

</body>

</html>