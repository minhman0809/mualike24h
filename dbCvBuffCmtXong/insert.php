 <?php 
//insert.php

 ?>
<?php
require_once 'config.php';
global $conn;
$fbid= $_POST['fbid'];
$cmt= $_POST['cmt'];
$qty= $_POST['qty'];

$time     = time();


$sql    = "INSERT INTO `dbCvBuffCmtXong`(`fbid`, `cmt`, `time`, `qty`) VALUES ('" . $fbid . "', '" . $cmt . "', '" . $time . "', '" . $qty . "')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "{'success':true}";
        } else {
            echo "{'error':'error_insert_db'}";
        }
