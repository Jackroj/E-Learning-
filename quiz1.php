<?php
include './student_header.php';
include './db.php';
?>
<article id="front_article">
    <?php
        $unit = $_POST['unit'];
        
        $result = mysqli_query($link, "select id,qn,ans1,ans2,ans3,ans4,cans from quiz where unit ='$unit' order by id");
        
if(!isset($_POST['submit1'])) {
    $unit = $_POST['unit'];
?>
  <form id="form" name="form" method="post" action="" onsubmit="">            
      <input type="hidden" name="unit" value="<?php echo $unit;?>">
                <table id="report_tab" style="color:snow;">
                        <thead><tr>
                          <td>Questions</td>
	<td width="30%" align="center"><!--div id="ttimer"></div--></td>
                        </tr>
                        <tr>
                          <td colspan="2" height="355">
	<table width="95%" border="1" cellspacing="2" cellpadding="2">
	<tr>
	<th>Question
	<th>Answer
            <tbody>
<?php
	//$rs = mysql_query("select id,qn,ans1,ans2,ans3,ans4,cans from quiz where unit ='$unit' order by id") or die(mysql_error());
	while($r = mysqli_fetch_row($result)) {
		echo "<tr>";
		echo "<th align='right' width='50%'>$r[1]";
		echo "<td>";
		echo "<input type='radio' name='$r[0]' value='$r[2]' required>$r[2]<br>";
		echo "<input type='radio' name='$r[0]' value='$r[3]' required>$r[3]<br>";
		echo "<input type='radio' name='$r[0]' value='$r[4]' required>$r[4]<br>";
		echo "<input type='radio' name='$r[0]' value='$r[5]' required>$r[5]<br>";		
	}
?>
            </tbody></table>
                            <br />
		<br />
                            <p style="text-align: center;">
                                <label>
                        <input name="submit1" type="submit" value="Submit" />
                                </label>
                               <label>
                                <input type="reset">
                              </label>
                            </p></td>
                        </tr>
                  </table>
                </form>
<?php
} else {
    $unit = $_POST['unit'];
	$rs = mysqli_query($link,"select id,qn,cans from quiz where unit='$unit' order by id");
	while($r = mysqli_fetch_row($rs)) {
		$id[] = $r[0];
		$ans[] = $_POST["$r[0]"];
		$qn[] = $r[1];
		$cans[] = $r[2];
	}

	$count=0;
	$tot=count($id);
	echo "<table id='report_tab' align='center' border='1'><tr><th colspan='3'>REVIEW<tr><th>Question<th>Correct Answer<th>Your Answer";
	foreach($id as $k=>$v) {
		echo "<tr>";
		echo "<td width='50%'>$qn[$k]<td>$cans[$k]<td>$ans[$k]";	
		if($cans[$k]==$ans[$k]) {
			$count++;
		}
	}
		$per = $count/$tot*100;
	echo "<tr><th colspan='3'>Correctly Answered : $count";
	echo "<tr><th colspan='3'>Percentage Obtained : $per%";
	echo "</table>";
	echo "<script>alert('Congradulation ! Your participation Certificate Issued successfully, click here below for Download') </script>";
	echo "<br/>";
	echo "<a href='./pdf/pdf_details.php' target='_blank' style='text-align: center'>Click Here!</a>";
}
?>
</article>
<?php
include './footer.php';
?>