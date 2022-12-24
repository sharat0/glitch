<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- FONT CSS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <!-- FONT CSS ENDS HERE -->

    <link rel="stylesheet" href="style1.css">

    <title>LogIn</title>
</head>

<body>
    <div id="main">
        <span class="logo"><img src="/img/logo2.png" alt=""></span>
        <div id="centerbox">
            <div class="forms">
                <span class="head">
                    LogIn
                </span>
                <form action="" method="POST">
                    <span class="formtext">Username</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" id="user" value="admin">

                    <span class="formtext">Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="">

                    <button type="submit" name="login" id="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['login'])) {
            $conn=mysqli_connect('localhost', 'root', '', 'ctf') or die('Unable to Connect');
            $user=$_POST['user'];
            $pass=$_POST['password'];
            
            $sql="SELECT * from jarvis_login where user= '$user' and password= '$pass'";
            $res=mysqli_query($conn, $sql);

            if ($res) {
                if(mysqli_num_rows($res)>0)
                {
                  echo 'Login Success';
                  $row = mysqli_fetch_assoc($res);
                  $id=$row['id'];
                  $_SESSION['loggedin']=true;
                $_SESSION['name']=$user;
                $_SESSION['uid']=$id;
                  header("location:home.php?id=$id");

                }
                  else
                        echo '<script>alert("Login failed");</script>';
            }
        }
        

    ?>
</body>

</html>