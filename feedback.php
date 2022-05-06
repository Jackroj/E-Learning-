<?php
include './student_header.php';
include './db.php';

if (!isset($_POST['submit'])) {

if(isset($_SESSION['user'])) {
    $name = $_SESSION['user'];
      } 
?>

<div class="container">
    <div class="card">
        <form  method="POST">
            <label for="feedback">Share Your Experinence</label>
            <input type="text" name="name" value="<?php echo $name ?>" placeholder="Please enter your name" required>
            <textarea name="feedback"  cols="10" rows="10" placeholder="Let us know..." required></textarea>
            <button type="submit" name="submit">Send</button>
        </form> 
    </div>
</div>
<?php 

} else{
    $feedback = $_POST['feedback'];  
    $name = $_POST['name'];  
    // echo $name;
    mysqli_query($link, "INSERT INTO `feed_back`(`message`, `name`) VALUES ('$feedback','$name')") or die("<div class='msg'>".  mysqli_error($link)."</div>");
    echo("<div class='msg'>Thank you for your feedback..<span><a href='userhome.php'>Back</a></span></div>");
}




include './footer.php';
?>