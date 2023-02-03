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
      mysqli_query($conn,"INSERT into duration (uid, level, type) values ($uid, '2-bugged', '1')");

  }

?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Qoogle</title>
    <style>
       #submit{
    width: 10%;
    height: 4vh;
    font-size: 1.1rem;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
  }

  #error_msg{
    display: block;
    margin-top:30px;
    font-size: 22px;
  }
    </style>
  </head>
  <body>
    <main>
      <center>
        <img src="Qoogle.png" width="20%" height="5%" id="googleimg">
        <form id="form" action="" method="post"> 
            <input type="search" id="query" name="text" placeholder="Search...">
            <input type="submit" value="Search" name="submit" id="submit">
          </form>

          <?php
    $text=null;
    $script='';
        if (isset($_POST['submit'])) {
            $text=$_POST['text'];
            $script_check=substr($text,0,14);
            $end_check=substr($text,strlen($text)-11, strlen($text)-1);
            if ($script_check=="<script>alert(" && $end_check==");</script>") {
                echo ("<script>alert('GLITCH{ZG9jdW1lbnQuY29va2llKCk7}');</script>");
                
            }
            else{
                  echo "<span id='error_msg'>No search results for <b>".$text."</b></span>";
                }
            }

    ?>

        <div id="Bottomdiv">
            <span id="text">Google offered in:</span>
            <a href="">हिन्द</a>ी
            <a href="">বাংলা</a>
            <a href="">తెలుగు</a>
            <a href="">मराठी</a>
            <a href="">தமிழ்</a>
            <a href="">ગુજરાતી</a>
            <a href="">ಕನ್ನಡ</a>
            <a href="">മലയാളം</a>
            <a href="">ਪੰਜਾਬੀ</a>
          </ul>
        </div>
        


      </center>
    </main>
  </body>
</html>