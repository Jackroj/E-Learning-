<?php
session_start();
include './db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>e-Learning</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <header>
            <img src="Images/llogo.jpg" id="llogo">
            <h1>E-Tutorial</h1>
            <img src="Images/rlogo.jpg" id="rlogo">
            <marquee>
            PadmaPriya
            </marquee>
        </header>
        <div id="mainlink">
                <a href="adminhome.php">Quiz</a>
                <a href="feedback_view.php">Feedback</a>
                <a href="signout.php">Signout</a>
                <!--<a href="index.php">Videos</a>
                <a href="index.php">Images</a-->
        </div>
        <section>
            <nav>
                <!--a href="index.php">About Site</a>
                <a href="login.php">Login</a-->
                <!--a href="signup.php">SignUp</a-->
            </nav>
            <article>