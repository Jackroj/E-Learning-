<?php
include './aheader.php';
?>
<article id="front_article">
    <?php
    if(!isset($_GET['id'])) {
    $result = mysqli_query($link, "select * from quiz order by unit") or die(mysqli_error($link));
    echo "<table id='report_tab'><thead><tr><th>Unit<th>Question<th>Ans1<th>Ans2<th>Ans3<th>Ans4<th>CAns<th>Task<tbody>";
    while($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        foreach($row as $k=>$r) {
            if($k!=0 && $k!=2)
                echo "<td>$r";
            else if($k==2)
                echo "<td width='100px'>$r";
        }
        echo "<td><a id='rep_link' href='showquiz.php?id=$row[0]' onclick=\"javascript:return confirm('Are You Sure to Delete ?')\">Delete</a>";
    }
    echo "</table>";
    } else {
        $id = $_GET['id'];
        mysqli_query($link, "delete from quiz where id=$id") or die(mysqli_error($link));
        echo "<div class='msg'>Question Deleted...</div>";
    }
    ?>
</article>
<?php
include './footer.php';
?>