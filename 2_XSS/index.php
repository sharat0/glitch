<?php
    header("X-XSS-Protection: 0");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>

    <style>
        *{
            margin: 0 0;
            padding: 0 0;
            box-sizing: border-box;
        }
        body{
            color: #fff;
            height: 100vh;
            background-color: #000;
            /* background: url(img/jarvis-xss.png) no-repeat center; */
            background: #000;
            background-size: cover;
            overflow: hidden;
        }

        #particles-js{
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: 1;
        }

        form{
            margin-top: 8%;
            width: 60%;
            height: 70vh;
            margin-left: 20%;
            background: rgba(255,255,255,.2);
            box-shadow: 0 0 50px #fff;
            position: absolute;
            z-index: 999;
        }
        
        input[type='text']{
            margin-top: 20%;
            border: none;
            border-bottom: 2px solid #fff;
            width: 70%;
            margin-left:15%;
            background-color: transparent;
        }
        
        input[type='submit']{
            background-color: transparent;
            border: 2px solid #fff;
            font-size:18px;
            padding: 5px 20px;
            margin-left: 40%;
            margin-top: 25px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <form action="" method="post">
        <input type="text" name="text" id="pass" placeholder="Enter Your Command"> <br><br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    $text=null;
    $script='';
        if (isset($_POST['submit'])) {
            $text=$_POST['text'];
            if ($text=="<script>alert(document.cookie);</script>") {
                die("<script>alert('GLITCH{ZG9jdW1lbnQuY29va2llKCk7}');</script>");
            }
            else{
                $script= substr($text, 0, 8);
                if ($script<>'<script>') {
                    echo "<script>alert('Sorry, Invalid Command Format!');</script>";
                    
                }
                else {
                    echo "<script>alert('Access Denied');</script>";
                }
            }
        }

    ?>
</body>
<script src="particles.js"></script>
<script src="app.js"></script>
</html>
