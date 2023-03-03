<!DOCTYPE html>
<html>
<?php
 // if(date('d')==25)
// {
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: index.php');
        exit;
    }
// }
// else
// {
//     echo '<script>alert("Time restricted");</script>';
//     header('location: index.php');
// }

?>
<head>
	<meta charset="UTF-8" />
	<title>Glitch 2023</title>

    <!-- Linking Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="home.css">

    <style>

       .inline-flex{
            display: inline-flex;
            justify-content: space-between;
            text-align: center;
            width: 100%;
        }

        .xact{
            margin-top: 1%;
            margin-right: 1%;
        }

        .nav-links{
            display: inline-flex;
            justify-content: space-between;
            text-align: center;
            width: 50%;
            margin-top: 1%;
            margin-right: 1%;
        }

        .nav-item{
            text-decoration: none;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            font-size: 1.2rem;
            margin-left: 2%;
        }

        .nav-item.active{
            color: #FFC300;
        }

        .nav-item:hover{
            color: #FFC300;
        }

        .card-header{
            width: 60%;
            margin-left: 20%; 
            margin-top: 2%;
        }

        .flex-inline{
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .text{
            display: inline-block;
        }

        .card{
            width: 60%;
            margin-left: 20%;
            margin-top: 2%;
            padding: 2%;
            border: 1px solid black;
            border-radius: 10px;
        }

        .card-header{
            width: 60%;
            margin-left: 20%; 
            margin-top: 2%;
        }

        .flex-inline{
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .text{
            display: inline-block;
        }

        .card{
            width: 60%;
            margin-left: 20%;
            margin-top: 2%;
            padding: 2%;
            border: 1px solid black;
            border-radius: 10px;
        }

        .card-header{
            width: 60%;
            margin-left: 20%; 
            margin-top: 2%;
        }

        .flex-inline{
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .text{
            display: inline-block;
        }

        .card{
            width: 60%;
            margin-left: 20%;
            margin-top: 2%;
            padding
       }

       .kjlogo{
        width: 260px;
        height:55px;
       }    </style>
</head>

<body>

    <!-- Navbar (Shakir) -->
    <nav class="inline-flex">
        <a href="index.php">
            <img src="assets/kjc-flag-latest.png" class="kjlogo">
        </a>
        <div class="xact">
        <img src="assets/Xactitude.svg" alt="Xactitude">
        </div>
    </nav>


    <div>
        <?php
            require('essentials/_conn.php');
            $lc1=null;
            $lc2=null;
            $lc3=null;
            $lc4=null;
            $lc5=null;
            $lc6=null;

            $l1="SELECT * from score where uid='".$_SESSION['id']."' and (level='1' and type='1')";
            $r1=mysqli_query($conn, $l1);
            if ($r1) {
                if(mysqli_num_rows($r1)>0){
                    $lc1=true;
                }
            }

            $l2="SELECT * from score where uid='".$_SESSION['id']."' and (level='2' and type='1')";
            $r2=mysqli_query($conn, $l2);
            if ($r2) {
                if(mysqli_num_rows($r2)>0){
                    $lc2=true;
                }
            }

            $l3="SELECT * from score where uid='".$_SESSION['id']."' and (level='3' and type='1')";
            $r3=mysqli_query($conn, $l3);
            if ($r3) {
                if(mysqli_num_rows($r3)>0){
                    $lc3=true;
                }
            }
            
            $l4="SELECT * from score where uid='".$_SESSION['id']."' and (level='4' and type='1')";
            $r4=mysqli_query($conn, $l4);
            if ($r4) {
                if(mysqli_num_rows($r4)!=0){
                    $lc4=true;

                }
            }

            $l5="SELECT * from score where uid='".$_SESSION['id']."' and (level='5' and type='1')";
            $r5=mysqli_query($conn, $l5);
            if ($r5) {
                if(mysqli_num_rows($r5)>0){
                    $lc5=true;
                }
            }

            $l6="SELECT * from score where uid='".$_SESSION['id']."' and (level='6' and type='1')";
            $r6=mysqli_query($conn, $l6);
            if ($r6) {
                if(mysqli_num_rows($r6)>0){
                    $lc6=true;
                }
            }


        ?>
        <div class="home">
            <img src="img/glitch.png" alt="Glitch" id="logo">
            <h2 class="head2">A Cyber Security Inter-Collegiate Event</h2>
        </div>
        <div class="flex">
            <a href="challenge-1.php" target="_blank" rel="noopener noreferrer" class="btn <?php $res1 = (isset($lc1)) ? "cleared" : "" ; echo $res1; ?>">Level 1</a>
            <a href="challenge-2.php" target="_blank" rel="noopener noreferrer" class="btn <?php $res2 = (isset($lc2)) ? "cleared" : "" ; echo $res2; ?>">Level 2</a>
        </div>
        <div class="flex">
            <a href="challenge-3.php" target="_blank" rel="noopener noreferrer" class="btn <?php $res3 = (isset($lc3)) ? "cleared" : "" ; echo $res3; ?>">Level 3</a>
            <a href="challenge-4.php" target="_blank" rel="noopener noreferrer" class="btn <?php $res4 = (isset($lc4)) ? "cleared" : "" ; echo $res4; ?>">Level 4</a>
        </div>
        <div class="flex">
            <a href="challenge-5.php" target="_blank" rel="noopener noreferrer" class="btn <?php $res5 = (isset($lc5)) ? "cleared" : "" ; echo $res5; ?>">Level 5</a>
            <a href="challenge-6.php" target="_blank" rel="noopener noreferrer" class="btn <?php $res6 = (isset($lc6)) ? "cleared" : "" ; echo $res6; ?>">Level 6</a>
        </div>
        <?php
            echo $lc4;
            ?>
    </div>


</body>
</html>