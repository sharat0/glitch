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
            <img src="assets/kjc-flag-latest.png" class="kjlogo">
            </a>
            
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
                    echo "<meta http-equiv='refresh' content='0'>";

                }
                else {
                    echo "<script>alert('Unable to store data');</script>";
                    
                }
            }
        }
       
    }

    // RESET MCQ SUBMISSIONS
    if (isset($_POST['reset'])) {
        $sql="DELETE FROM score where uid='$uid' and level='5' and type='2'";
        $res=mysqli_query($conn, $sql);
        if ($res) {
            echo "<meta http-equiv='refresh' content='0'>";

        }
        else {
            echo "<script>alert('Unable to reset');</script>";
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