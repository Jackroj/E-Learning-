<?php
include './aheader.php';
if(!isset($_SESSION['user'])) {
    header("Location:index.php");
}
?>
<article id="front_article">
    <?php
    if(!isset($_POST['submit'])) {
    ?>
    <div class="rdiv">
        <a href="showquiz.php">Show Quiz</a>
    </div>
    <form name="f" action="" method="post" onsubmit="return check()">
        <table class="form_tab">
            <thead>
                <tr>
                    <th colspan="2">QUIZ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Unit Number</th>
                    <td>
                        <select name="unitno">
                            <option value="unit1">Unit I</option>
                            <option value="unit2">Unit II</option>
                            <option value="unit3">Unit III</option>
                            <option value="unit4">Unit IV</option>
                            <option value="unit5">Unit V</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Question</th>
                    <td><textarea name="qn" required></textarea></td>
                </tr>
                <tr>
                    <th>Choice 1</th>
                    <td><input type="text" name="ans1" required></td>
                </tr>
                <tr>
                    <th>Choice 2</th>
                    <td><input type="text" name="ans2" required></td>
                </tr>
                <tr>
                    <th>Choice 3</th>
                    <td><input type="text" name="ans3" required></td>
                </tr>
                <tr>
                    <th>Choice 4</th>
                    <td><input type="text" name="ans4" required></td>
                </tr>
                <tr>
                    <th>Correct Choice</th>
                    <td><input type="text" name="cans" required></td>
                </tr>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" value="Store">
                    </th>                    
                </tr>
            </tfoot>
            </tbody>
        </table>
    </form>
    <?php
    } else {
        extract($_POST);
        $qn = addslashes($qn);
        $ans1 = addslashes($ans1);
        $ans2 = addslashes($ans2);
        $ans3 = addslashes($ans3);
        $ans4 = addslashes($ans4);
        $cans = addslashes($cans);
        mysqli_query($link, "insert into quiz (unit,qn,ans1,ans2,ans3,ans4,cans) values ('$unitno','$qn','$ans1','$ans2','$ans3','$ans4','$cans')") or die("<div class='msg'>".mysqli_error($link)."</div>");
        echo "<div class='msg'><span>Question Stored</span><a href='adminhome.php'>Back</a></div>";
    }
    ?>    
</article>
<?php
include './footer.php';
?>