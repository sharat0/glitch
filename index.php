<!DOCTYPE html>
<html>

<head>
  <title>Event Rules & Guidelines</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Michroma&amp;family=Raleway:wght@200;400;600;700;800&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="guidelines.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Michroma&amp;family=Raleway:wght@200;400;600;700;800&amp;display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>

</head>

<body>

  <nav>
    <a href="index.php">
      <img src="assets/kjc-flag-latest.png" width="260px" height="55">
    </a>

    <div class="nav-links">
      <?php
        session_start(); 
        if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)){
          echo '<a href="home.php" class="nav-item login">Home</a>';
          if($_SESSION['type'] == 1){
            echo '<a href="score" class="nav-item login">Score</a>';
        }
          echo '<a href="logout.php" class="nav-item">Logout</a>';
        }
        else{
          echo '<a href="login.php" class="nav-item login">Login</a>';
        }
      ?>
    </div>
  </nav>
  <img src="img/glitch.png" alt="GLITCH" id="logo">
  <h1 class="michroma">Event Rules & Guidelines</h1>
  <div class="container">
    <div class="accordion" id="eventRules">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Code of Conduct
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#eventRules">
          <div class="card-body">
            <p>All attendees, speakers, sponsors and volunteers at our event are required to agree with the following
              code of conduct. Organizers will enforce this code throughout the event. We expect cooperation from all
              participants to help ensure a safe environment for everybody.</p>
            <ul>

              <li><b>Participants:</b> Each team is allowed to send a maximum of two participants.</li>

              <li><b>Format:</b> The Glitch event will consist of multiple rounds of challenges related to web
              application security, cryptography, and ethical hacking.
            </li>
            
            <li>
              <b>Time Limit:</b> The complete time alloted for participants to clear all 6 leves is 2hr.
            </li>
            
            <li>
                <b>Communication:</b> Participants are not allowed to communicate with anyone except volunteers 
                during the event.
              </li>
              
              <li><b>Photography and Recording: </b>Photography and recording of any kind is prohibited during the event, except by official event
                photographers and videographers.</li>

                <li><b>Cheating:</b> Any form of cheating, including the use of pre-written code or assistance from others,
                will result in immediate disqualification.</li>
                
                <li>
                <b>Tools: </b>Participants are allowed to use any tools, software or websites to solve the challenges,
                        as long as they do not engage in any malicious activities or attacking any live server including ours.
                </li>
                
                <li>
                  <b>Decision:</b> The decision of the judges and event coordinators will be final and binding.
                  These are the event rules for the Glitch event at the Xactitude
                fest at Kristu College College. These rules are designed to ensure a fair and competitive environment
                for all participants, while promoting ethical hacking and cybersecurity skills.
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Marking Scheme
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#eventRules">
          <div class="card-body">
            <p>The event schedule is subject to change. Please check the event website for the most up-to-date schedule.
            </p>
            <ul>
              <li><b>Scoring:</b>
              </li>

              <li><b>Flags: </b>Points will be awarded based on the number of challenges solved. For each captured flag, 5 points will be awarded.</li>
              <li><b>Questions: </b>Each challenge contains 5 questions. 1 point is awarded for each question answered correctly.</li>
              <li><b>Hints: </b>Each challenge contains 1 hint for the participants to solve the challenge easily. 2 points are deducted for each hint.</li>
              <li><b>Tie Breaker: </b>In case of any tie, time will be used as tie-breaker.</li>
              <li><b>Judging Criteria: </b>The participant with the highest number of points at the end of the event will be declared the winner.</li>
              <li><b>Note: </b>The decision of judges will be final.</li>
            
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="demo">
    <h1 class="michroma">Challenge Demo</h1>
    <img src="img/demo.png" id="demo-img">
    <div id="explaination">
      <ul>
        <li><b>1. Riddle: </b>This section contains a riddle solving which, you get one step closer to the flag.</li>
        <li><b>2. Bugged Page: </b>This is a hyperlink that redirects you to the bugged page for the challenge.</li>
        <li><b>3. Questions: </b>These are 1 point questions helping participants to get closer to the flag as well as to score better points.</li>
        <li><b>4. Flag: </b>This section contains the form to hold the flag. The flag format is: <b>GLITCH{jvRYa7xL19%#*dYz2&}</b></li>
        <li><b>5. Hint: </b>In case you are not able to find the flag you can use the hint. Using hint results in deduction of 2 points.</li>
      </ul>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <script>
    const buttons = document.querySelectorAll('.btn-link');
    // Add a click event listener to each button
    buttons.forEach(button => {
      button.addEventListener('click', function () {
        // Get the parent card element
        const card = this.parentElement.parentElement;

        // Toggle the 'show' class on the card
        card.classList.toggle('show');
      });
    });
  </script>
</body>

</html>