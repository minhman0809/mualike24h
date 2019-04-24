<?php
require_once 'config.php';
global $conn;
$apikey       = $_POST['apikey'];
$userName     = '';
$fbid         = $_POST['fbid'];
$name         = $_POST['name'];
$name_package = $_POST['name_package'];
$limit_time   = $_POST['limit_time'];
$note   = $_POST['note'];
$time_buy     = time();
$sql0         = "SELECT * FROM `member` WHERE `apikey`='" . $apikey . "'";
// echo $sql0;
$result0      = mysqli_query($conn, $sql0);
if (mysqli_num_rows($result0) > 0) {
    while ($row0 = mysqli_fetch_assoc($result0)) {
        $userName = $row0['user'];
    }
    // echo $userName;
} else {
    echo "err_apikey";
    return;
}
if ($userName == '') {
    echo "err_apikey";
    return;
}
//start lay gia tien
if ($limit_time < 0 || $limit_time > 6) {
    echo "{'error':'error_cheat_limit_time'}";
    return;
}
if (checkidLiveStream($fbid)) {
    echo "{'error':'error_uid_exist'}";
    return;
}
switch ($name_package) {
    case '50':
        $ch = 40000;
        break;
    case '100':
        $ch = 70000;
        break;
    case '150':
        $ch = 100000;
        break;
    case '200':
        $ch = 130000;
        break;
    case '250':
        $ch = 160000;
        break;
    case '300':
        $ch = 190000;
        break;
    case '350':
        $ch = 220000;
        break;
    case '400':
        $ch = 250000;
        break;
    case '500':
        $ch = 310000;
        break;
    default:
        echo "{'error':'error_cheat_limit_time'}";
        return;
}
$price = $ch * $limit_time;
//echo $price. '<br>';
//end lay gia tien
// tru tien+ mua hang
// $price = '5000';
$user  = getUser($userName);
//echo $user['vnd'] . '<br>';
if ($user['vnd'] >= $price) {
    //tru tien
    $truVND = updateVNDUser($user['vnd'] - $price, $userName);
    if ($truVND) {
        $return = array();
        $sql    = "INSERT INTO `vip_lstream`(`fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`,  `action`,  `note`) VALUES ('" . $fbid . "', '" . $name . "', '" . $userName . "', '" . $name_package . "', '" . $limit_time . "', '" . $time_buy . "', 'checked','" . $note . "')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "{'success':true}";
        } else {
            echo "{'error':'error_insert_db'}";
        }
    } else {
        echo "{'error':'error_db_money'}";
    }
} else {
    echo "{'error':'error_not_enough'}";
}
?>
<?php
function getUser($userName)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM `member` WHERE user = '$userName'");
    $row    = mysqli_fetch_assoc($result);
    return $row;
}
function updateVNDUser($newVND, $userName)
{
    global $conn;
    $result = mysqli_query($conn, "UPDATE member SET vnd = " . $newVND . " WHERE user = '" . $userName . "'");
    if ($result) {
        return 1;
    }
    return 0;
}
function checkidLiveStream($fbid)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT id FROM vip_lstream WHERE fbid = '$fbid'");
    if (mysqli_num_rows($result) > 0)
        return 1;
    return 0;
}
?>