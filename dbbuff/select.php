<?php 
//select.php
 ?>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
include("config.php");
$tbName='vip_buff';
$sql = "SELECT `id`, `fbid`, `numberLike`, `name_buy`, `time_buy`, `likeDone`, `status`,`camxuc` FROM "."`".$tbName."`";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["fbid"].'|'.$row["numberLike"].'|'.$row["time_buy"].'|'.$row["name_buy"].'|'.$row["status"].'|'.$row["camxuc"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>