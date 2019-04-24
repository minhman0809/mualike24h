<?php 
require_once 'config.php';
global $conn;

$apikey=$_GET['apikey'];
$note=$_GET['note'];

$userName='';

$result0 = mysqli_query($conn, "SELECT * FROM member WHERE `apikey`='".$apikey."'");
if (mysqli_num_rows($result0) > 0) {
        while ($row0 = mysqli_fetch_assoc($result0)) {
            $userName = $row0['user'];
        }
        //echo $userName;
        
}else{
    echo "err_apikey";
    return;
}


    $return = array();
    $sql="SELECT * FROM `vip_lstream` WHERE `name_buy`='".$userName."' AND `note`='".$note."'";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        //return $return;
        $kq=json_encode($return);
        
        echo $kq;
        return;
    }
    // return 0;
    $kq="{'data':'null'}";
     echo $kq;
 ?>