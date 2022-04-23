<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>e-Learning</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <header>
            <h1>e-Learning</h1>
        </header>
        <section>
            <nav>
                <a href="userhome.php">Home</a>
                <a href="signout.php">SignOut</a>
            </nav>
            <article>