<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: index.php');
        exit;
    }
    else{
        $uid=$_SESSION['id'];
        require('essentials/_conn.php');
        mysqli_query($conn,"INSERT into duration (uid, level, type) values ($uid, '5', '1')");

    }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Glitch | Challenge #5</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    
    <!-- Linking Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">

        <style>
            .flag-input {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 25px;
}

/* All CSS goes here*/
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
display: flex;
flex-wrap: wrap;
}


nav {
display: flex;
height: 10vh;
width: 100vw;
padding: 0px 5vh 0px 5vh;
background-color: var(--bgcolor); /*Content starts flowing over the navbar when scrolled without bgcolor property*/
}



/* ============================ Class Definitions ============================ */

/* raleway is a shorthand alias for font-raleway*/
.font-raleway, .raleway {
font-family: Raleway;
}

/* michroma is a shorthand alias for font-michroma*/
.font-michroma, .michroma {
font-family: Michroma;
}

/* Use this in conjunction with the above fonts */
.btn-primary {
background-color: var(--marine-blue);
color: var(--white);
border: none;
border-radius: 8px;
}


.nav-logo {
    width: 20vw;
    object-fit: scale-down;
}

.challenge-page {
display: flex;
flex-direction: column;
/* align-items: center;  */
justify-content: space-around;
height: 90vh;
margin: 0px 5vh 0px 5vh;
/* padding: 0px 5vh 0px 5vh; */
}

.challenge-container {
display: flex;
flex-direction: row;
/* flex-wrap: wrap; */
justify-content: center;
}

.challenge-section {
display: flex;
flex: 1;
flex-direction: column;
justify-content: center;
align-items: center;
margin-right: 64px;
min-width: 40vw;
}
.challenge-section > p {
letter-spacing: 1.5px;
word-spacing: 4px;
line-height: 2rem;
}
.challenge-section > a {
display: flex;
color: var(--pale-white);
margin: 16px;
letter-spacing: 2px;
}
.challenge-section > h4 {
font-weight: 500;
word-spacing: 2px;
line-height: 2rem;
}
.challenge-section > textarea {
height: 96px;
width: 40vw;
font-size: 16px;
color: var(--pale-white);
background-color: var(--dark-blue);
border: none;
border-radius: 8px;
resize: none;
}
.challenge-section > textarea:focus, .challenge-section > textarea:hover {
outline: 2px var(--marine-blue) solid;
/* border: #0066FF; */
}
.challenge-section button {
width: 128px;
height: 48px;
cursor: pointer;
margin: 2rem;
margin-left: 35%;
}

.hint{
height: 96px;
width: 40vw;
font-size: 16px;
color: var(--pale-white);
background-color: var(--dark-blue);
border: none;
border-radius: 8px;
text-align: center;
}

.challenge-section > a > img{
height: 20px;
width: 20px;
margin: 0px 8px 0px 8px;
}

.challenge-questions {
display: flex;
flex-direction: column;
justify-content: center;
/* align-items: center; */
/* flex: 1; */
border-radius: 8px;
background-color: var(--dark-blue);
margin-left: 64px;
min-width: 40vw; /* An attempt to make the UI less cluttered */
}
.challenge-questions > form {
display: flex;
flex-direction: column;
align-items: center;
}

.question > label {
font-family: Michroma;
font-size: 12px;
}
.question > input{
/* width: 80%; */
height: 32px;
margin: 16px;
font-family: Michroma;
color: var(--pale-white);
background-color: transparent;
/* This can't be converted to use vairables  */
border: 2px solid #4C518A; 
border-top: none;
border-left: none;
border-right: none;
text-align: center;
}
.question > input:focus, .question > input:hover {
outline: none;
border-bottom: 2px solid var(--marine-blue);
}
.challenge-questions button {
width: 128px;
height: 48px;
font-size: 16px;
align-self: center;
font-family: Michroma;
margin: 32px 0px 16px 0;
cursor: pointer;    /*This makes the button look clickable, lol*/
}

.flag-input {
display: flex;
flex-direction: column;
align-items: center;
padding-bottom: 25px;
}
.flag-input > form {
display: flex;
flex-direction: row;
}
.flag-input > form > input {
flex: 9;
width: 50vw;
height: 64px;
border-radius: 8px;
font-family: Michroma;
letter-spacing: 2.5px;
text-align: center;
margin: 0px 8px 0px 8px;
}
.flag-input > form > button {
flex: 1;
font-family: Michroma;
font-size: 16px;
margin: 0px 8px 0px 8px;
cursor: pointer;
}

#submitted{
    color: var(--pale-white);
    background-color: var(--dark-blue);
    padding: 0.5% 5%;
    border-radius: 10px;
    text-align: center;
}
#submitted a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    border-bottom: 1px solid #fff;
}

.submitted-mcq{
    background: transparent;
    color: #39ff39;
    border: 2px solid #39ff39;
    border-radius: 10px;
    cursor: not-allowed !important;
}

/* ================================ Navbar ================================*/
.nav-links {
margin-left: auto;
/*align-self aligns on cross axis (vertical rn)*/
align-self: center; 
}

.nav-item {
color:  var(--white);
font-family: Michroma;
text-decoration: None;
margin: 0px 32px 0px 32px;
}
.active {
text-decoration: underline;
}

.nav-item:hover {
text-decoration: underline;
}
        </style>
    </head>

<body>

        <!-- Navbar (Shakir) -->
        <nav>
            <a href="/">
                <img src="assets/kjc-flag-latest.png" width="256px" height="64">
            </a>
            
            <div class="nav-links">
                <a href="home.php" class="nav-item">Home</a>
                <a href="/about" class="nav-item">About</a>
                <a href="/contact-us" class="nav-item">Contact Us</a>
            </div>
        </nav>
    


            <!-- Challenge #1 (Shakir)-->
    <!-- Main axis will be vertical-->
    <div id="challenge-1" class="challenge-page">

        <!--This will hold the actual challenge and MCQs-->
        <div class="challenge-container">

            <!-- Main axis will be horizontal-->
            <!--Actual Challenge-->
            <div class="challenge-section">
                <h1 class="michroma">&nbsp; <b>#5 </b> Zip Zapper</h1>
                <p style="text-align: center;">The data is in the treasure chest,
                                    You have to look into it,
                                    But perhaps before that,
                                    You have to unlock and empty it.</p>

                <a href="levels/ZipZapper/ZipZapper.rar" download>
                    <b>Download file here to get started?</b>
                    <img src="assets/hyperlink.png">
                </a>


                <!-- HINT SECTION -->

                <form action="" method="post">
                    <h4 class="raleway">Need a hint? Marks will be deducted for every hint received</h4>
                    <button type="submit" class='btn-primary michroma' name='hint' id="hint">Get Hint</button>
                </form>
            <?php
                require('essentials/_conn.php');
                $uid=$_SESSION['id'];
                $name=$_SESSION['name'];
                $score=0;
                $used=null;
                    
                $hint_check="SELECT * FROM score where uid='$uid' and level='5' and type='3'";
                $hintcres=mysqli_query($conn, $hint_check);
                if($hintcres){
                    $num=mysqli_num_rows($hintcres);
                    if ($num>0) {
                        $hintsql="SELECT * from hints where level='5'";
                        $hintres=mysqli_query($conn, $hintsql);
                        $row = mysqli_fetch_assoc($hintres);
                            $hint=$row['hint'];
                            echo "<span class='hint'> $hint </span>";
                        }
                    }
                    
                       if (isset($_POST['hint'])) {
                            
                            $hint_check="SELECT * FROM score where uid='$uid' and level='5' and type='3'";
                            $hintcres=mysqli_query($conn, $hint_check);
                            if($hintcres){
                                $num=mysqli_num_rows($hintcres);
                                if ($num!=0) {
                                    echo "<script>alert('Only 1 hint is allowed in a level');</script>";
                                }
                                else{
                                    $hintsql="SELECT * from hints where level='5'";
                                    $hintres=mysqli_query($conn, $hintsql);
                                    $row = mysqli_fetch_assoc($hintres);
                                        $hint=$row['hint'];
                                        echo "<span class='hint'> $hint </span>";
                                        $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '5', '3', '-2')";
                                        $res=mysqli_query($conn, $sql);
                                }
                            }
                        }
                        
                ?>

            </div>

            <!--MCQs-->
            <div class="challenge-questions">
                <form action="" id="challenge-1" method="POST">
                    <div class="question">
                        <label>Password for 3rd file?</label>
                        <input type="text" name="c1q1" id='c1q1' placeholder="********n">
                    </div>
                    <div class="question">
                        <label>Name of the 5th file?</label>
                        <input type="text" name="c1q2" id='c1q2' placeholder="P***********e">
                    </div>
                    <div class="question">
                        <label>Password for 5th file?</label>
                        <input type="text" name="c1q3" id='c1q3' placeholder="*********R">
                    </div>
                    <div class="question">
                        <label>Name for last file?</label>
                        <input type="text" name="c1q4" id='c1q4' placeholder="C*****************r">
                    </div>
                    <div class="question">
                        <label>Password for last file?</label>
                        <input type="text" name="c1q5" id='c1q5' placeholder="*********N">
                    </div>
                    <?php 
                $submitted="SELECT * FROM score WHERE uid='$uid' and (level='5' and type='2')";
                $res=mysqli_query($conn, $submitted);
                if ($res) {
                    if (mysqli_num_rows($res)<>0) {
                        echo '<button type="button" class="submitted-mcq" id="do-login" disabed>Submitted</button>';
                    }
                    else{
                        echo '<button type="submit" class="btn-primary" id="do-login" name="mcq">Submit</button>';

                    }
                }
            ?>
                </form>
            </div>
        </div>


        <!--This will hold flag submission input-->
        <div class="flag-input">
        <?php
                 $l1="SELECT * from score where uid='".$_SESSION['id']."' and (level='5' and type='1')";
                 $r1=mysqli_query($conn, $l1);
                 if ($r1) {
                     if(mysqli_num_rows($r1)>0){
                         $lc=true;
                     }
                 }

                 if ((isset($lc))) {
                    echo "<div id='submitted'>
                    <h2 class='Raleway'>Flag Already Submitted
                    <br>
                    <a href='challenge-5.php' target= _BLANK>Next Level</a>
                    </div>";
                 }
                 else {
                    echo '<h2 class="Raleway">Captured a flag? Enter below to submit it</h2>
                    <form action="" id="flag-1" method="POST">
                    <input type="text" name="flag-1" placeholder="&nbsp;Flag Format Glitch{b73bf7d3ba1a517644661bc4bcd85f9a}" required>
                    <button type="submit" name="c1f" class="btn-primary">Submit</button> <br>
                </form>';
                 }
            ?>
        </div>
    </div>
        

<?php

    require('essentials/_conn.php');
   
    if (isset($_POST['mcq'])) {
    
        
        $q1= strtolower($_POST['c1q1']);
        $q2= strtolower($_POST['c1q2']);
        $q3= strtolower($_POST['c1q3']);
        $q4= strtolower($_POST['c1q4']);
        $q5= strtolower($_POST['c1q5']);

        $score=0;

        // NEED TO REPLACE TEXT WITH ANSWEERS
        if ($q1=="forbidden") {
            $score++;
        }
        if ($q2=="puzzle paradise") {
            $score++;
        }
        if ($q3=="dismantler") {
            $score++;
        }
        if ($q4=="compressor conqueror") {
            $score++;
        }
        if ($q5=="blockchain") {
            $score++;
        }

        $sql_check="SELECT * FROM score where uid='$uid' and level='5' and type='2'";
        $check_res=mysqli_query($conn, $sql_check);
        if($check_res){
            $num= mysqli_num_rows($check_res);
            if ($num!=0) {
                echo "<script>alert('Questions can be answered only once');</script>";
            }
            else{
                $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '5', '2', '$score')";
                $res=mysqli_query($conn, $sql);
                if ($res) {
                    header('location: challenge-5.php');
                }
                else {
                    echo "<script>alert('Unable to store data');</script>";
                    
                }
            }
        }
       
    }


    // CHECKING FLAG SUBMISSIONS

    if (isset($_POST['c1f'])) {
        $flag=$_POST['flag-1'];

        $sql_check="SELECT * FROM score where uid='$uid' and level='5' and type='1'";
        $check_res=mysqli_query($conn, $sql_check);
        if($check_res){
            $num= mysqli_num_rows($check_res);
            if ($num!=0) {
                echo "<script>alert('Duplicate flag submissions are not allowed');</script>";
            }
            else{
                if ($flag=='GLITCH{V@f36s4!F9HAjpE*}') {
                    $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '5', '1', '5')";
                    $res=mysqli_query($conn, $sql);
                    mysqli_query($conn,"INSERT into duration (uid, level, type) values ($uid, '5', '2')");
                    header('location: challenge-5.php');
                }
                else{
                    echo "<script>alert('Incorrect flag! Try again.');</script>";
                }
            }
        }
        
    }


?>
    
</body>
</html>