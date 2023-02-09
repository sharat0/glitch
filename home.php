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

                
        :root {
            --white: #FFFFFF;
            --pale-white: #ECECEC;
            --dark-blue: #1C1E35;
            --bgcolor: #101223;
            --greyish-blue: #4C518A;
            --marine-blue: #0066FF;
        }
        body {
            background-color: var(--bgcolor);
            color: var(--pale-white);
            font-family: Raleway;
        }
        #glitchimg{
            padding-left: 40%;
            padding-top: 5%;
        }
        /* ================================ Navbar ================================*/

        nav {
            display: flex;
            align-items: center;
            position: sticky;
            top: 0px;
            padding: 0px 5vh 0px 5vh;
            background-color: var(--bgcolor);
        }

        .nav-links {
            margin-left: auto;
            align-self: center; 
        }


        .nav-item {
            color:  var(--white);
            font-family: Michroma;
            text-decoration: None;
            margin: 0px 32px 0px 32px;
            padding-bottom: 10px;
        }

        .nav-item:hover {
            border-bottom: 1px solid #fff;
        }


        .font-raleway, .raleway {
            font-family: Raleway;
        }


        /* HEADINGS AND OTHER TEXTS */


        .head1{
            font-family: Michroma;
            text-align: center;
            font-size: 48px;
            margin-bottom: 0 !important;
        }

        .head2{
            font-family: Michroma;
            text-align: center;
            font-size: 1rem;
            margin-bottom: 40px !important;
        }


        /* BUTTONS */

        .btn-primary {
            background-color: var(--marine-blue);
            border: none;
            border-radius: 8px;
        }


        .flex {
            display: flex;
            width: 100%;
        }


        .btn{
            background-color: var(--marine-blue);
            color: var(--white);
            border: none;
            border-radius: 8px;
            width: 25%;
            height: 70px;
            font-family: Michroma;
            text-align: center;
            font-size: 20px;
            transition: .3s ease;
            cursor: pointer;
            margin-left: 15%;
            margin-bottom: 5%;
        }

        .btn:hover{
            background: transparent;
            border: 2px solid var(--white);
        }

        .cleared{
            border: 2px solid #39ff39 !important;
            background: transparent !important;
            color: #39ff39 !important;
        }

        img#logo{
            width: 30%;
            margin-left: 35%;
            margin-top: 50px; 
        }

        .btn {
            background-color: var(--marine-blue);
            color: var(--white);
            border: none;
            border-radius: 8px;
            width: 25%;
            height: 60px;
            font-family: Michroma;
            text-align: center;
            font-size: 20px;
            transition: .3s ease;
            cursor: pointer;
            margin-left: 15%;
            margin-bottom: 5%;
            padding-top: 1.4%;
            text-decoration: none;
        }

    </style>
</head>

<body>

    <!-- Navbar (Shakir) -->
    <nav>
        <a href="home.php">
            <img src="assets/kjc-flag-latest.png" width="256px" height="64">
        </a>
        
        <div class="nav-links">
            <a href="home.php" class="nav-item active">Home</a>
            <a href="/about" class="nav-item">About</a>
            <a href="logout.php" class="nav-item">Logout</a>
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