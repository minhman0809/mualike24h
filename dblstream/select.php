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
$tbName='vip_lstream';
$sql = "SELECT `id`, `fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`, `action` FROM "."`".$tbName."`";


//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["fbid"].'|'.$row["name"].'|'.$row["name_buy"].'|'.$row["name_package"].'|'.$row["limit_time"].'|'.$row["time_buy"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>