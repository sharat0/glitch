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


    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/6d20788c52.js" crossorigin="anonymous"></script>
    <title>Chat</title>

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
            overflow-y: scroll;
        }

         .text{
            display: block;
            background-color: #3ca0ff;
            width: 80%;
            color: #fff;
            padding: 5px 20px;
            margin-left: 7%;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .msg{
            display: block;
            margin-bottom: 20px;
        }

        h1{
            padding-top: 5%;
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
        }

        .name{
            display: block;
            margin-bottom: 15px;
        }

        .name img{
            width: 28px;
            height: 28px;
            margin-top: 1%;
            border: 2px solid #fff;
            padding: 0px 5px;
            border-radius: 50%;
            color: #fff;
        }
        .btn{
            display: block;
            text-decoration: none;
            font-size: 20px;
            width: 30%;
            border: 2px solid #000;
            text-align: center;
            margin-left: 33%;
            margin-bottom: 20px;
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

        #closed{
            background-color: red;
            font-size: 20px;
            text-align: center;
            color: #fff;
            padding: 10px 0;
            position: sticky;
        }

        #expired{
            display: block;
            background-color: rgb(122,122,122); 
            font-size: 32px;
            padding: 10px 0;
            text-align: center;
            color: #fff;
        }
    </style>
</head>
<body>

<?php
    if(isset($_GET['chat_id']))
    {
        if ($_GET['chat_id']==7041) {
            echo '<div id="chats" class="chats">
            <h1 id="text">Robert Miller</h1>
            
            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i> You</span>
                <span class="sender msg">Hey, are you here? I just found this out-dated place which nobody knows about.</span>
            </div>
            
            <div class="text">
            <span class="name"><i class="fa-regular fa-user"></i> Robert</span>
                <span class="sender msg">Yes, I am. Are you?</span>
            </div>

            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i> You</span>
                <span class="sender msg">Yes, I am. I just wanted to check in and make sure we are both on the same page.</span>
            </div>
        
            <div class="text">
                <span class="name"><i class="fa-regular fa-user"></i> Robert</span>
                <span class="you msg">Definitely. So, what is the plan?</span>
            </div>
        
            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i> You</span>
                <span class="you msg">I think we should share the secret pass code now. I dont want to risk it getting intercepted.</span>
            </div>

            <div class="text">
            <span class="name"><i class="fa-regular fa-user"></i> Robert</span>
            <span class="you msg">Agreed. What\'s the code?</span>
            </div>
            
            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i> You</span>
                <span class="sender msg">The code is GLITCH{MzVuUTFlZEA}</span>
            </div>
            
            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i>You</span>
                <span class="sender msg">Got it. I\'ll make sure to keep it safe.</span>
            </div>
            
            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i> You</span>
                <span class="sender msg">Good. And remember, don\'t share it with anyone else</span>
            </div>
        
            <div class="text">
                <span class="name"><i class="fa-regular fa-user"></i> Robert</span>
                <span class="you msg">Of course not. I\'ll only use it for our planned operation.</span>
            </div>
            
            <div class="text">
                <span class="name"><i class="fa-solid fa-user"></i> You</span>
                <span class="sender msg"> Okay, great. I\'ll see you soon.</span>
            </div>
        
            <div class="text">
                <span class="name"><i class="fa-regular fa-user"></i> Robert</span>
                <span class="you msg">Sounds good. See you.</span>
            </div>
    
        
            <div id="expired">User ID expired</div>
        
            <br>    
                    
            </div>';
    
        }
        else{
            echo '<div id="chats" class="chats">';
        echo '<div id="expired">Chat Does Not Exists</div>';
        echo '</div>';
        }
    }
    else {
        echo '<div id="chats" class="chats">';
        echo '<div id="expired">Chat Does Not Exists</div>';
        echo '</div>';
    }
?>
    

</body>
</html>