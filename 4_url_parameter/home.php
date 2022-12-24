<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        *{
            background-color:#000;
        }

        #text, #data{
            color: #fff;
            line-height: 30px;
            font-size: 18px;
            padding-left: 20px;
            padding-top: 20px;
        }
        a{
            color: #fff;
            text-decoration: none;
            display: inline-block;
            border: 2px solid #fff;
            padding: 5px 20px;
            margin-top: 5%;
        }
    </style>
</head>
<body>
<?php
	$id = 1;
	if($_GET['id']<>21)
	{
	    echo "<span id='text'>ID= ".$_GET['id']."</span>";
    }
    else {
        echo "<div id='data'>";
        echo "Cores: 8+8 <br>
        Threads: 24 <br>
        Base Clock: 3.2GHz P-core, 2.4GHz E-core <br>
        Boost Clock : 5.2GHz P-core, 3.9GHz E-core <br>
        Overclocking: Yes <br>
        L3 Cache (smart): 30MB <br>
        L2 Cache: 14 <br>
        MBMTP: 241W<br>
        PCIe 5.0 <br>
        lanes: 16<br>
        Chipset: Z690<br>
        GLITCH{MzVuUTFlZEA}<br>
        Memory: 4x DIMM, 128GB, DDR5-6200 (OC)<br>
        Expansion slots: 4x M.2 PCIe, 2x PCIe 3.0 x4, 1x PCIe 5.0 x16, 6x SATA 6GB/s<br>
        Video ports: 1x <br>
        DisplayPort 1.4<br>
        USB ports: 20x<br>
        Storage: 4x M.2; 6x SATA<br>
        Network: Intel Wi-Fi 6; Intel i225V 2.5G LAN<br>
        Lighting: 2x aRGB (3-pin), 2x RGB (4-pin)<br>
        </div>";
    }
    // header("location:home.php?id=$id");
    ?>
    <br>    
    <a href="logout.php">Logout</a>
</body>
</html>