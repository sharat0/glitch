<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-sizing: border-box;
        }

        body{
            background-color: #000;
            color: #fff;
            padding-top: 10%;
        }

        ul> li{
            list-style-type: none;
            margin-bottom: 45px;
            
        }
        
        li> a{
            margin-left: 20%;
            text-decoration: none;
            color: #fff;
            display: block;
            width: 60%;
            text-align: center;
            font-size: 20px;
            padding: 7px 0;
            border: 2px solid #fff;
            transition: all .3s ease;
            box-shadow: 0 0 10px #fff;
        }
        
        li>a:hover{
            background: rgba(255,255,255,0.8);
            color: #000;
        }

    </style>
</head>
<body>
    <ul>
        <li><a href="1_source/index.php" target="_blank" rel="noopener noreferrer">Source Code Intrusion</a></li>
        <li><a href="2_XSS/index.php" target="_blank" rel="noopener noreferrer">XSS</a></li>
        <li><a href="3_directory_traversal/index.php" target="_blank" rel="noopener noreferrer">Directory Traversal</a></li>
        <li><a href="4_url_parameter/index.php" target="_blank" rel="noopener noreferrer">URL Parameter</a></li>
        <li><a href="7_Image_OSINT/image.php" target="_blank" rel="noopener noreferrer">Image OSINT</a></li>
        
    </ul>
</body>
</html>