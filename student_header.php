<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>e-Learning</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body onload="call_timer()">
        <header>
            <img src="Images/llogo.jpg" id="llogo">
            <h1>E-Tutorial</h1>
            <img src="Images/rlogo.jpg" id="rlogo">
            <br>
            <marquee>
            PadmaPriya
            </marquee>
        </header>
        <div id="mainlink">
                <a href="userhome.php">Subject</a>
                <a href="feedback.php">Feed Back</a>
                <a href="video.php">Videos</a>
                <a href="quiz.php">Quiz</a>
                <a href="signout.php">Logout</a>
        </div>
        <section>
            <nav>
                <!--a href="index.php">About Site</a>
                <a href="login.php">Login</a>
                <a href="signup.php">SignUp</a-->
            </nav>
            <article>