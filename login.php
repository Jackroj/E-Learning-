<?php
include './header.php';
if(!isset($_POST['submit'])) {
?>
<article id="front_article">
    <h3>Administrator And Student Login</h3>
<form name="f" action="" method="post">
    <table id="login_tab">
        <thead>
            <tr>
                <th colspan="2">
                    LOGIN
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>UserId</th>
            <tr>
                <td><input type="text" name="userid" placeholder="Enter UserId" required></td>
            <tr>
                <th>Password</th>
            <tr>    
                <td><input type="password" name="pwd" placeholder="Enter Password" required></td>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="SignIn">
        </tfoot>
    </table>
</form>
</article>
<?php
} else {
    include './db.php';
    $userid = $_POST['userid'];
    $pwd = $_POST['pwd'];
   $result = mysqli_query($link, "select * from userregn where userid='$userid' and pwd='$pwd'");
   if(mysqli_num_rows($result)>0) {
       
       $name = mysqli_query($link, "select name from userregn where userid='$userid'");
       $row = $name->fetch_assoc();
       session_start();
           $_SESSION['user']=$row['name'];
           header("Location:userhome.php");
       }
    if($userid=="admin" && $pwd=="admin") {
        $_SESSION['user']=$userid;
        header("Location:adminhome.php");
    } else {
            echo "<div class='msg'>Invalid Userid/Password...<span><a href='login.php'>Back</a></span></div>";
    
} 
}
include './footer.php';
?>