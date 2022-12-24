<?php
    header("X-XSS-Protection: 0");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .nothing{
            display: none;
        }
    </style>
</head>
<script>
    document.cookie = "username=John Doe";
    </script>
<body>
    <?php
    // $flag="ZG9jdW1lbnQuY29va2llKCk7"; 
    // setcookie('flag', "",  time() - 30);
    // setcookie("ai_user", "", time() - 3600);
    // setcookie("PHPSESSID", "", time() - 3600);
    ?>
    <form action="" method="post">
        Flag: <input type="text" name="text" id="pass"> <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <div class="nothing">
    <?php
        if (isset($_POST['submit'])) {
            $text= $_POST['text'];
            if ($text=="<script>alert(document.cookie);</script>") {
                echo "<script>alert('ZG9jdW1lbnQuY29va2llKCk7');</script>"
            }
            else{
                echo "<script>alert(Try Harder!);</script>";
            }
            echo $text;
        }

    ?>
    </div>
</body>
</html>
