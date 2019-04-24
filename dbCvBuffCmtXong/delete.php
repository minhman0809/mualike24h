<?php 
//delete.php

 ?>
<?php 
require_once 'config.php';
global $conn;

$id=$_GET['id'];


    
$result = mysqli_query($conn, "DELETE FROM dbCvBuffCmtXong WHERE id = '$id'");
    if ($result){
        echo "{'success':'true'}";
        return ;
    }else{
        echo "{'error':'true'}";
        return ;
    }
    

 ?>