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
        mysqli_query($conn,"INSERT into duration (uid, level, type) values ($uid, '2', '1')");
    }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Glitch | Challenge #2</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="style.css">

    
    <!-- Linking Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

        <!-- Navbar (Shakir) -->
        <nav>
            <a href="home.php">
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
                <h1 class="michroma">&nbsp; <b>#2. </b>Scripting Showdown</h1>
                <p style="text-align: center;">This one demands your input,
                    So put it inside the fields,
                    But what it demands,
                    Remains to be seen,
                    As the script is not always there,
                    So think outside the box,
                    The clue will reveal itself,
                    As the climax stops.</p>

                <a href="levels/Qoogle"  target="_blank">
                    <b>Visit Qoogle</b>
                    <img src="assets/hyperlink.png">
                </a>


                <!-- HINT SECTION -->

                <form action="" method="post">
                    <h4 class="raleway">Need a hint? Marks will be deducted for every hint received</h4>
                    <button type="submit" class='btn-primary michroma' name='hint' id="hint" <?php if (isset($used) == '1'){echo "disabled"; }?>>Get Hint</button>
                </form>

                <?php
                require('essentials/_conn.php');
                $uid=$_SESSION['id'];
                $name=$_SESSION['name'];
                $score=0;
                $used=null;
                    
                $hint_check="SELECT * FROM score where uid='$uid' and level='2' and type='3'";
                $hintcres=mysqli_query($conn, $hint_check);
                if($hintcres){
                    $num=mysqli_num_rows($hintcres);
                    if ($num>0) {
                        $hintsql="SELECT * from hints where level='2'";
                        $hintres=mysqli_query($conn, $hintsql);
                        $row = mysqli_fetch_assoc($hintres);
                            $hint=$row['hint'];
                            echo "<span class='hint'> $hint </span>";
                        }
                    }
                    
                       if (isset($_POST['hint'])) {
                            
                            $hint_check="SELECT * FROM score where uid='$uid' and level='2' and type='3'";
                            $hintcres=mysqli_query($conn, $hint_check);
                            if($hintcres){
                                $num=mysqli_num_rows($hintcres);
                                if ($num!=0) {
                                    echo "<script>alert('Only 1 hint is allowed in a level');</script>";
                                }
                                else{
                                    $hintsql="SELECT * from hints where level='1'";
                                    $hintres=mysqli_query($conn, $hintsql);
                                    $row = mysqli_fetch_assoc($hintres);
                                        $hint=$row['hint'];
                                        echo "<span class='hint'> $hint </span>";
                                        $used=1;
                                        $cnt=1;
                                        $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '2', '3', '-2')";
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
                        <label>Purpose of "document.cookie" function?</label>
                        <input type="text" name="c1q1" id='c1q1' placeholder="a**** *****e">
                    </div>
                    <div class="question">
                        <label>Purpose of a "alert()" function?</label>
                        <input type="text" name="c1q2" id='c1q2' placeholder="****p">
                    </div>
                    <div class="question">
                        <label>Purpose of a "script" tag in XSS?</label>
                        <input type="text" name="c1q3" id='c1q3' placeholder="I***** *********t">
                    </div>
                    <div class="question">
                        <label>XSS stands for?</label>
                        <input type="text" name="c1q4" id='c1q4' placeholder="C**** **** *******g">
                    </div>
                    <div class="question">
                        <label>Purpose of a "CSP header"??</label>
                        <input type="text" name="c1q5" id='c1q5' placeholder="*********n">
                    </div>
                    <?php 
                $submitted="SELECT * FROM score WHERE uid='$uid' and (level='2' and type='2')";
                $res=mysqli_query($conn, $submitted);
                if ($res) {
                    if (mysqli_num_rows($res)<>0) {
                        echo '<button type="submit" class="btn-primary btn-reset" id="do-login" name="reset">Reset</button>';
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
                 $l1="SELECT * from score where uid='".$_SESSION['id']."' and (level='2' and type='1')";
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
                    <a href='challenge-3.php' target= _BLANK>Next Level</a>
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
        if ($q1=="access cookie") {
            $score++;
        }
        if ($q2=="popup") {
            $score++;
        }
        if ($q3=="insert javascript") {
            $score++;
        }
        if ($q4=="cross site scripting") {
            $score++;
        }
        if ($q5=="protection") {
            $score++;
        }

        $sql_check="SELECT * FROM score where uid='$uid' and level='2' and type='2'";
        $check_res=mysqli_query($conn, $sql_check);
        if($check_res){
            $num= mysqli_num_rows($check_res);
            if ($num!=0) {
                echo "<script>alert('Questions can be answered only once');</script>";
            }
            else{
                $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '2', '2', '$score')";
                $res=mysqli_query($conn, $sql);
                if ($res) {
                    echo "<meta http-equiv='refresh' content='0'>";

                }
                else {
                    echo "<script>alert('Unable to store data');</script>";
                    
                }
            }
        }
       
    }

    // RESET
    if(isset($_POST['reset'])){
        $sql="DELETE FROM score WHERE uid='$uid' and (level='2' and type='2')";
        $res=mysqli_query($conn, $sql);
        if ($res) {
            echo "<meta http-equiv='refresh' content='0'>";

        }
        else
        {
            echo "<script>alert('Unable to reset');</script>";
        }
    }


    // CHECKING FLAG SUBMISSIONS

    if (isset($_POST['c1f'])) {
        $flag=$_POST['flag-1'];

        $sql_check="SELECT * FROM score where uid='$uid' and level='2' and type='1'";
        $check_res=mysqli_query($conn, $sql_check);
        if($check_res){
            $num= mysqli_num_rows($check_res);
            if ($num!=0) {
                echo "<script>alert('Duplicate flag submissions are not allowed');</script>";
            }
            else{
                if ($flag=='GLITCH{ZG9jdW1lbnQuY29va2llKCk7}') {
                    $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '2', '1', '5')";
                    $res=mysqli_query($conn, $sql);
                    mysqli_query($conn,"INSERT into duration (uid, level, type) values ($uid, '2', '2')");
                    echo "<meta http-equiv='refresh' content='0'>";
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