<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: ../../index.php');
        exit;
    }

    if (!isset($_SESSION['level_loggedin']) || ($_SESSION['level_loggedin'])!= true) {
        header('location: login.php');
        exit;
    }
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>

        body {
        background: #DCDDDF url(https://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
        color: #000;
        }
        
        #chats, .chats{
            background-color: #fff;
            width: 50%;
            height: 90vh;
            margin-top: 5vh;
            margin-left: 22.5%;
            border-radius: 20px;
            box-shadow: 0 0 20px #000;
        }

        h1{
            padding-top: 10%;
            padding-bottom: 2%;
            text-align: center;
            color: #7E7E7E;
            font-size: 42px;
        }
        h2{
            text-align: center;
        }

        .chat{
            display: block;
            width:50%;
            margin-left: 25%;
            text-align: center;
            padding: 10px 0;
            border-radius: 10px;
            font-size: 20px;
            color: #fff;
            background-color: #3ca0ff;
            cursor: pointer;
            text-decoration: none;
        }

        .btn{
            display: block;
            text-decoration: none;
            font-size: 20px;
            width: 30%;
            border: 2px solid rgb(122,122,122);
            text-align: center;
            margin-left: 33%;
            margin-bottom: 20px;
            margin-top: 10%;
            border-radius: 20px;
            height: 30px;
            padding-top: 10px;
            color: #000;
            transition: .5s ease-in-out;
            
        }
        
        .btn:hover{
            cursor: pointer;
            background: #DCDDDF url(https://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
        }
    </style>
</head>
<body>
    <div id="chats" class="chats">
<?php
	$id = 1;
    $names=array("Gary Brixey", "Dorothy Patterson", "Aletha Macleod", "Jeffrey Redding", "Geraldine Neal", "Claude Laflamme", "Lawrence Arnold", "Jeffrey Medina", "Helen Hurtado", "Mary McGriff", "Helen Ervin", "Johnny Shepard", "Robert Huerta", "Susan Shimer", "Wanda Jones", "Patricia Kroon","James Epps");
    if (isset($_GET['user_id'])) {      
        
        $id=$_GET['user_id']-1;

        if($_GET['user_id']>=1 && $_GET['user_id']<=17){

            if($_GET['user_id']<>5)
            {
                echo "<h1 id='text'>Welcome back ".$names[$id]."</h1>";
                echo "<h2 id='text'>You have not started any chat yet!</h1>";
                echo '<span class="btn" onclick="popup()">Start a new Chat</span>';
                echo '<a href="logout.php" class="btn">Logout</a>';
            }
            else {
                echo "<h1 id='text'>Welcome back ".$names[$id]."</h1>";
                echo "<h2 id='text'>Chats</h1>";
                echo '<a href="talks.php?chat_id=7041" class="chat">Robert Miller</a>';
                echo '<a href="logout.php" class="btn">Logout</a>';
        
            }
        }

        else{
            echo "<h1 id='note'>This account does not exists!</h1>";
        }

    }
    else{
        header("location:logout.php");
    }
    ?>
    <br>    
            
    </div>

</body>
<script>
    function popup() {
        alert("Oops! You account is no more active to start a new chat. Please try some other user_id");
    }
    function openChat(){
        document.getElementById("chats").style.display="none";
    }
</script>
</html>