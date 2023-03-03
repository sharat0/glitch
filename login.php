<!DOCTYPE html>
<html lang="en" >
<head>
<?php
    // PHP CODE FOR LOGIN VALIDATION
      if (isset($_POST['submit'])) {
        require('essentials/_conn.php');

        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $query="SELECT * from login where email='$email' and pass='$pass'";
        $res=mysqli_query($conn, $query);

        if ($res) {
          if(mysqli_num_rows($res)>0)
          {
            $row = mysqli_fetch_assoc($res);
            $name=$row['name'];
            $id=$row['id'];
            $type=$row['type'];
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$name;
            $_SESSION['id']=$id;
            $_SESSION['type']= $type;

            header("location:home.php");
          }
		    else
			      echo '<script>alert("Login failed");</script>';
        }
		}
    ?>

  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
<title>Glitch | Xactitude</title>
<meta name="title" content="Glitch | Xactitude">
<meta name="description" content="Welcome to Glitch CTF, the ultimate test of cyber security skills. Join us as we challenge participants to navigate through real-world scenarios, crack codes and outsmart hackers in this thrilling Capture The Flag event. Are you ready to take on the Glitch?">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Glitch | Xactitude">
<meta property="og:description" content="Welcome to Glitch CTF, the ultimate test of cyber security skills. Join us as we challenge participants to navigate through real-world scenarios, crack codes and outsmart hackers in this thrilling Capture The Flag event. Are you ready to take on the Glitch?">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Glitch | Xactitude">
<meta property="twitter:description" content="Welcome to Glitch CTF, the ultimate test of cyber security skills. Join us as we challenge participants to navigate through real-world scenarios, crack codes and outsmart hackers in this thrilling Capture The Flag event. Are you ready to take on the Glitch?">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
  

  <style>
    
body {
  background: #101223;
  font-family: Assistant, sans-serif;
  display: flex;
  min-height: 90vh;
}
.login {
  color: white;
  background: linear-gradient(to bottom,#1C1E35, #0066FF);
  margin: auto;
  box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
  border-radius: 8px;
  padding: 50px;
  height: 60vh;
  width: 30%;
}
.login .head {
  display: center;
  align-items: center;
  justify-content: center;
  padding-left: 18%;
  padding-bottom: 5%;
}
.login .head .company {
  font-size: 2.2em;
}
.login .msg {
  text-align: center;
}
.login .form input[type=text].text {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  color: white;
  font-size: 1em;
  outline: none;
  margin-top: 35px;
  width: 80%;
  margin-left: 10%;
}
.login .form .text::placeholder {
  color: #D3D3D3;
}
.login .form input[type=password].password {
  width: 80%;
  margin-left: 10%;
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  color: white;
  font-size: 1em;
  outline: none;
  margin-bottom: 20px;
  margin-top: 50px;
  margin-bottom: 70px;
}
.login .form .password::placeholder {
  color: #D3D3D3;
}
.login .form .btn-login {
  background: none;
  text-decoration: none;
  color: white;
  border-radius: 3px;
  padding: 5px 2em;
  transition: 0.5s;
  height: 50px;
  font-size: 1.2rem;
  margin-left: 35%;
  outline: none;
  border: 2px solid #fff;

}
.login .form .btn-login:hover {
  background: white;
  color: dimgray;
  transition: 0.5s;
  cursor: pointer;
}
.login .forgot {
  text-decoration: none;
  color: white;
  float: right;
}
footer {
  position: absolute;
  color: #136a8a;
  bottom: 10px;
  padding-left: 20px;
}
footer p {
  display: inline;
}
footer a {
  color: green;
  text-decoration: none;
}
footer a:hover {
  text-decoration: underline;
}
footer .heart {
  color: #B22222;
  font-size: 1.5em
}
img{
  width: 80%;
  margin-top: 10%;
  margin-bottom: 5%;
}

@media (min-width:300px) and (max-width:650px) {
  .login {
    color: white;
    background: #000;
    background: linear-gradient(to bottom,#1C1E35, #0066FF);
    margin: auto;
    box-shadow: 0px 2px 10px rgb(0 0 0 / 20%), 0px 10px 20px rgb(0 0 0 / 30%), 0px 30px 60px 1px rgb(0 0 0 / 50%);
    border-radius: 8px;
    padding: 50px;
    height: 50vh;
    width: 60%;
  }

  .login .form .btn-login {
    background: none;
    text-decoration: none;
    color: white;
    border-radius: 3px;
    padding: 5px 2em;
    transition: 0.5s;
    height: 40px;
    font-size: 1.2rem;
    margin-left: 20%;
    outline: none;
    border: 2px solid #fff;
}
.login .form input{
  width: 100% !important;
  margin-left: 0 !important;
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  color: white;
  font-size: 1em;
  outline: none;
}

}


@media (min-width:600px) and (max-width:950px) {

  .login .form .btn-login {
    background: none;
    text-decoration: none;
    color: white;
    border-radius: 3px;
    padding: 5px 2em;
    transition: 0.5s;
    height: 40px;
    font-size: 1.2rem;
    margin-left: 22%;
    outline: none;
    border: 2px solid #fff;
}

}
  </style>

</head>
<body>
<section class='login' id='login'>
<div class='head'>
  <a href="index.php"><img src="img/glitch.png" alt="Glitch" id="logo"></a>
  </div>
  <div class='form'>
    <form action="" method="POST">
  <input type="text" placeholder='Email' class='text' id='username' name='email' required><br>
  <input type="password" placeholder='••••••••••••••' class='password' name='pass' required><br>
  <button type="submit" class='btn-login' id='do-login' name='submit'>Login</button>
    </form>

  </div>
</section>

</body>
</html>
