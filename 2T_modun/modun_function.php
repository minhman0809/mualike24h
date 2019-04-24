<?php
require_once '../2T_config/config_server.php';
// Thêm Mới Các Gói VIP
function check_package($name) {
	global $conn;
	$result = mysqli_query($conn, "SELECT id FROM package_vip WHERE name = '$name'");
	if (mysqli_num_rows($result) > 0)
		return 1;
	return 0;
}
function add_package($name, $vnd, $limitLike, $limitPost) {
	global $conn;
	$result = mysqli_query($conn, "INSERT INTO package_vip (name, price, limit_like, limit_post) VALUES ('$name', '$vnd', '$limitLike', $limitPost)");
	if ($result)
		return 1;
	return 0;
}
function get_package() {
	global $conn;
	$return = array();
	$result = mysqli_query($conn, "SELECT * FROM package_vip");
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
	return 0;
}
function get_package_vip_bot() {
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM package_vip_bot WHERE id = 1");
	$row    = mysqli_fetch_assoc($result);
	return $row;
}
function update_package_vip_like($id, $name, $vnd, $limitLike, $limitPost) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE package_vip SET name = '$name', price = '$vnd', limit_like = '$limitLike', limit_post ='$limitPost' WHERE id = '$id'");
	if ($result)
		return 1;
	return 0;
}
function delete_package($id) {
	global $conn;
	$result = mysqli_query($conn, "DELETE FROM package_vip WHERE id = '$id'");
	if ($result)
		return 1;
	return 0;
}
function get_name_package() {
	global $conn;
	$result = mysqli_query($conn, "SELECT name FROM package_vip");
	$row    = mysqli_fetch_assoc($result);
	return $row;
}
function getPackage($name_package) {
	global $conn;
	$return = array();
	$result = mysqli_query($conn, "SELECT * FROM package_vip WHERE name = '$name_package' LIMIT 1");
	$row    = mysqli_fetch_assoc($result);
	return $row;
}
function insert_vip($fbid, $name, $name_buy, $name_package, $limit_time, $time_buy, $speed, $camxuc) {
	global $conn;
	$result = mysqli_query($conn, "INSERT INTO vip_like (fbid, name, name_buy, name_package, limit_time, time_buy, speed, action, camxuc) VALUES ('$fbid', '$name', '$name_buy', '$name_package', '$limit_time', '$time_buy', '$speed', 'checked', '$camxuc')");
	if ($result)
		return 1;
	return 0;
}
//
function getUser($id) {
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM member WHERE id = '$id' LIMIT 1");
	$row    = mysqli_fetch_assoc($result);
	return $row;
}
function getUserbyName($username) {
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM member WHERE user = '$username' LIMIT 1");
	$row    = mysqli_fetch_assoc($result);
	return $row;
}
function updateVNDUser($newVND, $_c = 0, $id = 0) {
	if ($id == 0) {
		$id = $_SESSION['id'];
	}
	if ($_c == 0) {
		$_SESSION['vnd'] = $newVND;
	}
	global $conn;
	$result = mysqli_query($conn, "UPDATE member SET vnd = ".$newVND." WHERE id = '" . $id . "'");
	if ($result) {
		return 1;
	}
	return 0;
}
function updateVNDDaily($newVND, $_c = 0, $id = 0) {
	if ($id == 0) {
		$id = $_SESSION['id'];
	}
	if ($_c == 0) {
		$_SESSION['vnd'] = $newVND;
	}
	global $conn;
	$result = mysqli_query($conn, "UPDATE member SET vnd = '$newVND' WHERE id = '" . $id . "'");
	if ($result) {
		return 1;
	}
	return 0;
}
function updatePassUser($newPass) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE member SET pass = '$newPass' WHERE id = '" . $_SESSION['id'] . "'");
	if ($result)
		return 1;
	return 0;
}
function checkUser($username) {
	global $conn;
	$result = mysqli_query($conn, "SELECT id FROM member WHERE user = '$username'");
	if (mysqli_num_rows($result) > 0)
		return 1;
	return 0;
}
function checkidLiveStream($fbid) {
	global $conn;
	$sql="SELECT * FROM `vip_lstream` WHERE `fbid` = '".$fbid."'";
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0)
		return 1;
	return 0;
}
function creatUser($fullname, $user, $pass, $email, $vnd = 0) {
	global $conn;
	$result = mysqli_query($conn, "INSERT INTO member (fullname, user, pass, email, vnd) VALUES ('$fullname', '$user', '$pass', '$email', $vnd)");
	if ($result)
		return 1;
	return 0;
}
function setSession($userA, $admin) {
	$_SESSION['login']    = 1;
	$_SESSION['fullname'] = $userA['fullname'];
	$_SESSION['id']       = $userA['id'];
	$_SESSION['username'] = $userA['user'];
	$_SESSION['email']    = $userA['email'];
	$_SESSION['vnd']      = $userA['vnd'];
	$_SESSION['chucvu'] = $userA['chucvu'];
	if ($userA['chucvu'] == 'admin') {
		$_SESSION['admin'] = 1;
	}
}
function get_vip_like($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM vip_like");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM vip_like WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}

function get_api_key($username) {
	global $conn;
	$return = array();
	$result = mysqli_query($conn, "SELECT * FROM `member` WHERE user='".$username."'");
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
	return 0;
}

function get_buy_follow($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM buy_follow");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM buy_follow WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}

function get_vip_buff($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM vip_buff");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM vip_buff WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}
function get_vip_buff_cmt($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM vip_buff_cmt");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM vip_buff_cmt WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		//echo $return;
		return $return;

	}
}
function get_member() {
	global $conn;
	$return = array();
	$result = mysqli_query($conn, "SELECT * FROM member");
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}
function get_vip_cmt($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM vip_cmt");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM vip_cmt WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}
function get_vip_lstream($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM vip_lstream");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM vip_lstream WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}
function get_vip_bot($name_buy) {
	global $conn;
	$return = array();
	if ($name_buy == 'admin') {
		$result = mysqli_query($conn, "SELECT * FROM vip_bot");
	} else {
		$result = mysqli_query($conn, "SELECT * FROM vip_bot WHERE name_buy = '$name_buy'");
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}
function action_vip_like($checked, $value) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE vip_like SET action = '$checked' WHERE id = '$value'");
	if ($result)
		return 1;
	return 0;
}
function update_api_key($apikey, $username) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE member SET apikey = '$apikey' WHERE user = '$username'");
	if ($result)
		return 1;
	return 0;
}
function action_vip_cmt($checked, $value) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE vip_cmt SET action = '$checked' WHERE id = '$value'");
	if ($result)
		return 1;
	return 0;
}
function action_vip_lstream($checked, $value) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE vip_lstream SET action = '$checked' WHERE id = '$value'");
	if ($result)
		return 1;
	return 0;
}
function action_member($checked, $value) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE member SET block = '$checked' WHERE id = '$value'");
	if ($result)
		return 1;
	return 0;
}
function action_vip_bot($checked, $value) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE vip_bot SET action = '$checked' WHERE id = '$value'");
	if ($result)
		return 1;
	return 0;
}
function insert_vip_bot_cookie($id, $name, $name_buy, $reaction, $access, $limit_time, $fb_dtsg) {
	global $conn;
	$result = mysqli_query($conn, "INSERT INTO vip_bot (fbid, fbname, name_buy, type_react, type_access, access_token, access_cookie, limit_time, time_buy, action, fb_dtsg) VALUES ('$id', '$name', '$name_buy', '$reaction', 'ACCESS_COOKIE', 'NULL', '$access', '$limit_time', '" . time() . "', 'checked', '$fb_dtsg')");
	if ($result)
		return 1;
	return 0;
}
function insert_vip_bot_token($id, $name, $name_buy, $reaction, $access, $limit_time) {
	global $conn;
	$result = mysqli_query($conn, "INSERT INTO vip_bot (fbid, fbname, name_buy, type_react, type_access, access_token, access_cookie, limit_time, time_buy, action) VALUES ('$id', '$name', '$name_buy', '$reaction', 'ACCESS_TOKEN','$access', 'NULL',  '$limit_time', '" . time() . "', 'checked')");
	if ($result)
		return 1;
	return 0;
}
function update_vip_bot($id, $access, $type_access, $type_react, $fb_dtsg = '') {
	global $conn;
	if ($type_access === 'TOKEN') {
		$result = mysqli_query($conn, "UPDATE vip_bot SET type_react = '$type_react', access_token = '$access', type_access = 'ACCESS_TOKEN' WHERE id = '$id'");
	}
	if ($type_access === 'COOKIE') {
		$result = mysqli_query($conn, "UPDATE vip_bot SET type_react = '$type_react', type_access = 'ACCESS_COOKIE', access_cookie = '$access', fb_dtsg = '$fb_dtsg' WHERE id = '$id'");
	}
	if ($result)
		return 1;
	return 0;
}
function edit_package_vip_bot($name, $vnd) {
	global $conn;
	$result = mysqli_query($conn, "UPDATE package_vip_bot SET name = '$name', vnd = '$vnd'");
	if ($result)
		return 1;
	return 0;
}
function create_gift($vnd) {
	global $conn;
	$gift   = generateRandomString();
	$result = mysqli_query($conn, "INSERT INTO gift_code (gift, vnd, `time`) VALUES ('$gift', '$vnd', '" . time() . "')");
	if ($result)
		return $gift;
	return 0;
}
function get_gift_code() {
	global $conn;
	$return = array();
	$result = mysqli_query($conn, "SELECT * FROM gift_code");
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$return[] = $row;
		}
		return $return;
	}
}
function insert_vip_cmt($fbid, $name, $name_buy, $name_package, $limit_time, $time_buy, $speed, $cmt) {
	global $conn;

	$sql="INSERT INTO `vip_cmt`(`fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`, `speed`, `action`, `cmt`) VALUES ('".$fbid."', '".$name."', '".$name_buy."', '".$name_package."', '".$limit_time."', '".$time_buy."', '".$speed."', 'checked', '".$cmt."')";
	//echo $sql."<br>";
	$result = mysqli_query($conn, $sql);
	if ($result)
		return 1;
	return 0;
}
function insert_vip_lstream($fbid, $name, $name_buy, $name_package, $limit_time, $time_buy) {
	global $conn;

	$sql="INSERT INTO `vip_lstream`(`fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`,  `action`) VALUES ('".$fbid."', '".$name."', '".$name_buy."', '".$name_package."', '".$limit_time."', '".$time_buy."', 'checked')";
	//echo $sql."<br>";
	$result = mysqli_query($conn, $sql);
	if ($result)
		return 1;
	return 0;
}
function update_vip_lstream($id,$limit_time) {
	global $conn;
    $time_buy=time();
  //  $limit_time=$limit_time+
	$sql="UPDATE `vip_lstream` SET limit_time = '$limit_time',time_buy = '$time_buy' WHERE id='$id'";
	
	
	//echo $sql."<br>";
	$result = mysqli_query($conn, $sql);
	if ($result)
		return 1;
	return 0;
}
function insert_buy_follow($fbid, $name, $name_buy, $name_package, $sub_type) {
	global $conn;

	$sql="INSERT INTO `buy_follow`(`fbid`, `name`, `name_buy`, `name_package`, `sub_type`) VALUES ('".$fbid."', '".$name."', '".$name_buy."', '".$name_package."', '".$sub_type."')";

	//echo $sql."<br>";
	$result = mysqli_query($conn, $sql);
	if ($result)
		return 1;
	return 0;
}
function insert_vip_buff($fbid, $numberLike, $name_buy, $time_buy,$camxuc,$serverBuffLike) {
	global $conn;

	$sql="INSERT INTO `vip_buff`(`fbid`, `numberLike`, `name_buy`,`time_buy`,`camxuc`,`serverBuffLike`) VALUES ('".$fbid."', '".$numberLike."', '".$name_buy."', '".$time_buy."', '".$camxuc."', '".$serverBuffLike."')";
	//echo $sql."<br>";
	$result = mysqli_query($conn, $sql);
	if ($result)
		return 1;
	return 0;
}
function insert_vip_buff_cmt($fbid, $cgt, $name_buy, $package,$cmt,$speed) {
	global $conn;
     
    // $soLanLap=intval($package)/10;
     $timebuy=time();
    // for ($i=0; $i < $soLanLap; $i++) { 
     	
     	//$package=10;

        $status=0;
        
     	$sql="INSERT INTO `vip_buff_cmt`(`fbid`, `note`, `name_buy`, `package`, `cmt`, `status`, `timebuy`, `speed`, `cgt`) VALUES ('".$fbid."','note', '".$name_buy."', '".$package."', '".$cmt."', '".$status."', '".$timebuy."', '".$speed."', '".$cgt."')";
	//echo $sql."<br>";
	$result = mysqli_query($conn, $sql);

	//$time+=$speed*60;

    // }
	
	if ($result)
		return 1;
	return 0;
}
function gift($gift) {
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM gift_code WHERE gift = '$gift' LIMIT 1");
	if (mysqli_num_rows($result) > 0) {
		$gift    = mysqli_fetch_assoc($result);
		$getUser = getUser($_SESSION['id']);
		updateVNDUser($getUser['vnd'] + $gift['vnd']);
		$del_gift = mysqli_query($conn, "DELETE FROM gift_code WHERE id = '" . $gift['id'] . "'");
		return $gift['vnd'];
	}
	return 0;
}
function addMultiToken($arrToken, $arrID) {
	global $conn;
	$sql = array();
	for ($i = 0; $i < count($arrToken); $i++) {
		$sql[] = '(' . ($arrID[$i]) . ', "' . $arrToken[$i] . '")';
	}
	$insert = mysqli_query($conn, 'INSERT INTO access_token (fbid, access_token) VALUES ' . implode(',', $sql));
	if ($insert)
		return 1;
	return 0;
}
function generateRandomString($length = 10) {
	$characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString     = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return strtoupper($randomString);
}
function isAdmin() {
	if ($_SESSION['admin'] == 1)
		return 1;
	return 0;
}
function isDaily() {
	global $conn;
	
	if ($_SESSION['chucvu'] == 'daily')
		return 1;
	return 0;
}
function getTokenToServer($type) {
	global $conn;
	$token  = array();
	$result = mysqli_query($conn, "SELECT * FROM access_token");
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			$token[] = $row[$type];
		}
	}
	return $token;
}
function delMultiToken($tokendie) {
	global $conn;
	foreach ($tokendie as $key => $value) {
		mysqli_query($conn, "DELETE FROM access_token WHERE access_token = '$value'");
	}
	return 1;
}
function updateVipLikeByAdmin($id, $fbid, $name, $package, $speed, $camxuc) {
	global $conn;
	$update = mysqli_query($conn, "UPDATE vip_like SET fbid = '$fbid', name = '$name', name_package = '$package', speed = '$speed', camxuc = '$camxuc' WHERE id = '$id'");
	if ($update) {
		return 1;
	}
	return 0;
}
function updateMember($id, $fullname, $user, $email, $vnd) {
	global $conn;
	$update = mysqli_query($conn, "UPDATE member SET fullname = '$fullname', user = '$user', chucvu = '$email', vnd = '$vnd' WHERE id = '$id'");
	if ($update) {
		return 1;
	}
	return 0;
}
function updateVipLikeByUser($id, $fbid, $name, $speed, $camxuc) {
	global $conn;
	$update = mysqli_query($conn, "UPDATE vip_like SET fbid = '$fbid', name = '$name', speed = '$speed', camxuc = '$camxuc' WHERE id = '$id'");
	if ($update) {
		return 1;
	}
	return 0;
}
function updateVipCmt($id, $cmt, $fbid, $name) {
	global $conn;
	$update = mysqli_query($conn, "UPDATE vip_cmt SET cmt = '$cmt', fbid = '$fbid', name = '$name' WHERE id = '$id'");
	if ($update) {
		return 1;
	}
	return 0;
}
function updateVipCmtByAdmin($id, $fbid, $name, $package, $cmt, $speed) {
	global $conn;
	$update = mysqli_query($conn, "UPDATE vip_cmt SET fbid = '$fbid', name = '$name', speed = '$speed', name_package = '$package', cmt = '$cmt' WHERE id = '$id'");
	if ($update) {
		return 1;
	}
	return 0;
}
function delete_vip($id, $type) {
	global $conn;
	$name_buy=$_SESSION['user'];
    $sql="DELETE FROM $type WHERE id = '$id' AND name_buy='".$name_buy."'";
    //echo $sql;
	$result = mysqli_query($conn, $sql);
	if ($result)
		return 1;
	return 0;
}
function getTokenBySL($sl) {
	global $conn;
	$token  = array();
	$result = mysqli_query($conn, "SELECT access_token FROM access_token ORDER BY RAND() LIMIT $sl");
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			$token[] = $row['access_token'];
		}
	}
	return $token;
}
function _p($t) {
	$t = addslashes($t);
	$t = stripslashes($t);
	return $t;
}
function _i($t) {
	global $conn;
	return mysql_real_escape_string($conn, $t);
}
function _c($url) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json'
	));
	return curl_exec($ch);
}
function _saveNotify($txt) {
	$file = @fopen('notify.txt', 'a+');
	@fwrite($file, $txt);
	@fclose($file);
}
function _saveCard($txt) {
	$file = @fopen('card.log.txt', 'a+');
	@fwrite($file, $txt . "\n");
	@fclose($file);
}
function _saveVip($txt) {
	$file = @fopen('buyvip.log.txt', 'a+');
	@fwrite($file, $txt . "\n");
	@fclose($file);
}
function _saveVipUser($txt) {
	$file = @fopen('../lichsu/'.$_SESSION['username'].'.log.txt', 'a+');
	@fwrite($file, $txt . "\n");
	@fclose($file);
}
function _saveCardUser($txt) {
	$file = @fopen('../lichsunap/'.$_SESSION['username'].'.log.txt', 'a+');
	@fwrite($file, $txt . "\n");
	@fclose($file);
}
function _saveExUser($txt) {
$file = @fopen('../lichsunap/'.$_POST['user'].'.log.txt', 'a+');
	@fwrite($file, $txt . "\n");
	@fclose($file);
}
function __c($url, $cookie) {
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Expect:'
	));
	$page = curl_exec($ch);
	curl_close($ch);
	return $page;
}
function _checkToken($token){
	$url = 'https://graph.fb.me/me/?access_token='.$token;
	$json = json_decode(file_get_contents($url));
	if ($json->id) return 1;
	return 0;
}
function _me($token){
	$url = 'https://graph.fb.me/me/?access_token='.$token;
	$json = json_decode(file_get_contents($url));
	if ($json->id) return $json;
	return 0;
}
?>