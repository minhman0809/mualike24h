<?php 
require_once 'config.php';
global $conn;

$apikey=$_GET['apikey'];
$fbid=$_GET['fbid'];

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
if($userName==''){
    echo "err_apikey";
    return;
}

    
    $result = mysqli_query($conn, "DELETE FROM vip_lstream WHERE fbid = '$fbid'");
    if ($result){
        echo "{'success':'true'}";
        return ;
    }else{
        echo "{'error':'true'}";
        return ;
    }
    

 ?>