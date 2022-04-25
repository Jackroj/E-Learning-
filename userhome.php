<?php
include './student_header.php';
session_start();
if(isset($_SESSION['user'])) {
  $name = $_SESSION['user'];
    } 
    ?>
    <div class="user_name">
        <h1>Welcome! <?php echo $name ?></h1>
    </div>
<article id="front_article">
    <h3>Units of Software Engineering</h3>
    <span>
    <a href="unit1.php">Unit-I&nbsp;&nbsp;&nbsp;: Planning a Software</a>
    <a href="unit2.php">Unit-II&nbsp;&nbsp;: Software Cost & Estimation</a>
    <a href="unit3.php">Unit-III&nbsp;: Software Requirements & Definition</a>
    <a href="unit4.php">Unit-IV&nbsp;&nbsp;: Software Design</a>
    <a href="unit5.php">Unit-V&nbsp;&nbsp;&nbsp;: Validation Technique & Software Maintenance</a>
    </span>
</article>
<?php
include './footer.php';
?>