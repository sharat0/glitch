<?php
    session_start();
    unset($_SESSION["level_loggedin"]);

    header("location: index.php");
    exit;
?>