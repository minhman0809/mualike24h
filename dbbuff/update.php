<?php 
//update.php
 ?>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
include("config.php");
 $tbName='vip_buff';
$fbid=$_GET['fbid'];
$time_buy=$_GET['time_buy'];
$name_buy=$_GET['name_buy'];
$status=$_GET['status'];
$sql = "UPDATE `".$tbName."` SET `status`='".$status."' WHERE `fbid`='".$fbid."' AND `time_buy`='".$time_buy."' AND `name_buy`='".$name_buy."'";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>