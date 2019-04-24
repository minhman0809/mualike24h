
<?php
include("config.php");

$fbid=$_GET['fbid'];
$name_package=$_GET['name_package'];
$limit_time=$_GET['timeRemain']/30;

$name=$fbid;
$name_buy='phanvantuong';



$time_buy=time();
$action='checked';

 //echo '$timeThucHien:'.$timeThucHien;
$sql = "INSERT INTO `vip_lstream`(`fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`, `action`) VALUES ('".$fbid."','".$name."','".$name_buy."','".$name_package."','".$limit_time."','".$time_buy."','".$action."')";


echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Add okay r";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();