<?php
include './student_header.php';
?>
<article id="front_article">
    <form name="f" action="quiz1.php" method="post">
    <table class="form_tab">
        <tr>
            <th colspan="2" style="text-align: center;">QUIZ
        </tr>
        <tr>
            <th>Select Unit</th>
            <td>
                <select name="unit">
                    <option value="unit1">Unit I</option>
                            <option value="unit2">Unit II</option>
                            <option value="unit3">Unit III</option>
                            <option value="unit4">Unit IV</option>
                            <option value="unit5">Unit V</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="2"  style="text-align: center;">
                <input type="submit" name="submit" value="GO">
            </th>
        </tr>
    </table>
    </form>
</article>
<?php
include './footer.php';
?>