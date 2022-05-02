<?php
include './aheader.php';
include './db.php';
$sql = "SELECT `id`, `message`, `name`, `time_stamp` FROM `feed_back` ";
$result = $link->query($sql);
?>
<style>
    .container .form {
background-color: #878e8e;
margin: 1em;
padding: 1em;
color: #fff;
}
.container table th, .container table tbody td{
    padding-left: 6em;
}
</style>
<div class="container">
    <div class="form">
        <table>
            <th class="td">SI/NO</th>
            <th class="td">Name</th>
            <th class="td">Message</th>
            <th class="td">Date</th>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["message"] ?></td>
                <td><?php echo $row["time_stamp"] ?></td>
                </tr>
                <?php }
                }else{?>
    
                <caption><?php echo "No data found....";?></caption>
                
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php
include './footer.php';
?>