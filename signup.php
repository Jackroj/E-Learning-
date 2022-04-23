<?php
// include './header.php';
if(!isset($_POST['submit'])) {
?>

<form name="f" action="" method="post" onsubmit="return validate_regn()">
    <table class="form_tab">
        <thead>
            <tr>
                <th colspan="2">
                    REGISTRATION
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Enter Name" required></td>
            </tr>
            <tr>
                <th>Roll Number</th>
                <td><input type="text" name="rollno" placeholder="Your RollNo" required></td>
            </tr>
            <tr>
                <th>Degree</th>
                <td>
                    <select name="degree">
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Year</th>
                <td>
                    <select name="year">
                        <option value="I Year">I Year</option>
                        <option value="II Year">II Year</option>
                        <option value="III Year">III Year</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>UserId (Any MailId)</th>            
                <td><input type="text" name="userid" placeholder="Enter UserId" required></td>
            </tr>
            <tr>
                <th>Password</th>            
                <td><input type="password" name="pwd" placeholder="Enter Password" required></td>
            </tr>
            <tr>
                <th>Confirm Password</th>            
                <td><input type="password" name="cpwd" placeholder="Confirm Password" required></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Register">
        </tfoot>
    </table>
</form>
<?php
} else {
    include './db.php';
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $degree = $_POST['degree'];
    $year = $_POST['year'];
    $userid = $_POST['userid'];
    $pwd = $_POST['pwd'];
    mysqli_query($link, "insert into userregn (name,rollno,degree,year,userid,pwd) values ('$name','$rollno','$degree','$year','$userid','$pwd')") or die("<div class='msg'>".  mysqli_error($link)."</div>");
    echo "<div class='msg'>UserId Generated...<span><a href='login.php'>Login</a><span></div>";
}
// include './footer.php';
?>