
 <?php 
//delete.php

 ?>
<?php 
require_once 'config.php';
global $conn;

$id=$_GET['id'];


    
$result = mysqli_query($conn, "DELETE FROM dbCvBuffCmt WHERE id = '$id'");
    if ($result){
        echo "{'success':'true'}";
        return ;
    }else{
        echo "{'error':'true'}";
        return ;
    }
    

 ?>