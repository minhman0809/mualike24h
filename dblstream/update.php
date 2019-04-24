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

$fbid=$_GET['fbid'];
$live=$_GET['live'];

$sql = "UPDATE `vip_lstream` SET `live`='".$live."' WHERE `fbid`='".$fbid."'";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>