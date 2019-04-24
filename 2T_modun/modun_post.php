<?php
require_once 'modun_function.php';
if($_REQUEST){
    $return = array('error' => 0);
    $t = $_REQUEST['t'];

    if ($t === 'buy-follow') {
        $fbid = _p($_POST['id']);
        if(!preg_match('/[0-9]/' ,$fbid, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'ID FB Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        $id = _p($_POST['id']);
        $name = _p($_POST['user']);
        $package = _p($_POST['package']);
        $subType = _p($_POST['subType']);


        
//echo $limit_time;
        //echo $cmt."<br>";
        if($subType == 1 || $subType == 2){

            
        }else{
            $return['error'] = 1;
            $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
            die(json_encode($return));
        }

        if($package == 1000 || $package == 1500|| $package == 2000|| $package == 2500|| $package == 3000){

            
        }else{
            $return['error'] = 1;
            $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
            die(json_encode($return));
        }

        
        if($subType==1){
             switch ($package){
                case '1000' : $price = 65000;
                break;
                case '1500' : $price = 97500;
                break;
                case '2000' : $price = 130000;
                break;
                case '2500' : $price = 162500;
                break;
                 case '3000' : $price = 195000;
                break;
                
            }
           }

        if($subType==2){
             switch ($package){
                case '1000' : $price = 40000;
                break;
                case '1500' : $price = 60000;
                break;
                case '2000' : $price = 80000;
                break;
                case '2500' : $price = 10000;
                break;
                 case '3000' : $price = 120000;
                break;
                
            }
           }
           
           
        $user = getUser($_SESSION['id']);
        
        if ($user['vnd'] >= $price) {
            
            $truVND = updateVNDUser($user['vnd'] - $price);
           // echo 'tru vnd:'.$truVND."<br>";

            if (insert_buy_follow($fbid, $name, $_SESSION['username'], $package, $subType) && $truVND) {
                
            //  echo 'Mua VIP Thành Công Cho Người Dùng';
                $return['msg'] = 'Mua VIP Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
              
                die(json_encode($return));
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }


    if ($t === 'new_package_vip_like') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $name = _p($_POST['name']);
        $vnd = _p($_POST['vnd']);
        $limitLike = _p($_POST['limitLike']);
        $limitPost = _p($_POST['limitPost']);
        if (check_package($name) === 0) {
            if (add_package($name, $vnd, $limitLike, $limitPost)) {
                $return['msg'] = 'Thêm Mới Gói VIP '.$name.' Thành Công!';
                die(json_encode($return));
            } else {
                $return['error'] = 1;
                $return['msg']   = 'Không Thể Thêm Gói Mới. Vui Lòng Kiểm Tra Lại';
                die(json_encode($return));
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Tên Gói VIP Đã Tồn Tại Trên Hệ Thống, Vui Lòng Sử Dụng Tên Khác!';
            die(json_encode($return));
        }
    }
    if ($t === 'get_package') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $data = array();
        $gP = get_package();
        $long = count($gP);
        if ($gP != 0) {
            for ($i=0; $i < $long; $i++) {
                $data[] = array(
                    $gP[$i]['id'],
                    $gP[$i]['name'],
                    $gP[$i]['price'],
                    $gP[$i]['limit_like'],
                    $gP[$i]['limit_post']
                );
            }
        }
        $return = array('data' => $data);
        die(json_encode($return));
    }
    if ($t === 'update_package_vip_like') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $id = _p($_POST['id']);
        $name = _p($_POST['name']);
        $vnd = _p($_POST['vnd']);
        $limitLike = _p($_POST['limitLike']);
        $limitPost = _p($_POST['limitPost']);
        if (update_package_vip_like($id, $name, $vnd, $limitLike, $limitPost)) {
            $return['msg'] = 'Chỉnh Sửa Gói VIP '.$name.' Thành Công!';
            die(json_encode($return));
        }
    }
    if ($t === 'delete_package') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $id = _p($_POST['id']);
        if (delete_package($id)) {
            $return['msg'] = 'Xóa Thành Công!';
            die(json_encode($return));
        }
    }
    if ($t === 'get_name_package') {
        die(json_encode(get_package()));
    }
    if($t === 'buy-vip'){
        $fbid = _p($_POST['id']);
        if(!preg_match('/[0-9]/' ,$fbid, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'ID FB Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        $name = _p($_POST['user']);
        $name_package = _p($_POST['package']);
        $speed = _p($_POST['speed']);
        $limit_time = _p($_POST['time']);
        $camxuc = _p($_POST['camxuc']);
        $package = getPackage($name_package);
        if($limit_time < 1 || $limit_time > 6 || $speed < 0 || $speed > 100 || !$package['name']){
            $return['error'] = 1;
            $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
            die(json_encode($return));
        }
        $user = getUser($_SESSION['id']);
        //echo $user['vnd']."<br>";
        $price = $package['price']*$limit_time;
        //echo $price."<br>";

        if ($user['vnd'] >= $price) {
            $truVND = updateVNDUser($user['vnd'] - $price);
            
           //echo $truVND;
            if (insert_vip($fbid, $name, $_SESSION['username'], $name_package, $limit_time, time(), $speed, $camxuc) && $truVND) {
                $return['msg'] = 'Mua VIP Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
                $txt = 'Vip Like||'.$_SESSION['username'].'||'.$fbid.'||'.$name.'||'.$name_package.'||'.$limit_time.'||'.date("H:i d-m-Y");
                // _saveVip($txt);
                // _saveVipUser($txt);
                die(json_encode($return));
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }
    if ($t === 'sign-up') {
        
        $username = _p($_POST['username']);
        if(!preg_match('/^[A-Za-z0-9_\.]{6,32}$/' ,$username, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'Tài Khoản Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        
        $password = _p($_POST['password']);
        
        
            if (!checkUser($username)) {
                $creat = creatUser('default', $username, $password, 'email', 0);
                if ($creat) {
                    $return['msg'] = 'Chúc Mừng Bạn Đã Đăng Ký Thành Công, Bây Giờ Vui Lòng Quay Lại Để Đăng Nhập.';
                    die(json_encode($return));
                }
            } else {
                $return['error'] = 1;
                $return['msg']   = 'Tên Tài Khoản Đã Tồn Tại';
                die(json_encode($return));
            }
        
    }
    if($t === 'sign-in') {
        $username = _p($_POST['username']);
        if(!preg_match('/^[A-Za-z0-9_\.]{6,32}$/' ,$username, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'Tài Khoản Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        $password = _p($_POST['password']);
        if (!checkUser($username)) {
            $return['error'] = 1;
            $return['msg']   = 'Người Dùng Không Tồn Tại';
            die(json_encode($return));
        } else {
            $user = getUserbyName($username);
            if ($user['block'] == 'checked') {
                $return['error'] = 1;
                $return['msg']   = 'Tài Khoản Của Bạn Đang Tạm Khóa';
                die(json_encode($return));
            }
            if ($user['pass'] === $password) {
                //setSession($user, $config_site['admin']);
                $_SESSION['username']=$username;
               $_SESSION['id']=$user['id'];
               $_SESSION['fullname']=$user['fullname'];
                $_SESSION['user']=$user['user'];
                  $_SESSION['pass']=$user['pass'];
               $_SESSION['email']=$user['email'];
                $_SESSION['vnd']=$user['vnd'];
                  $_SESSION['block']=$user['block'];
               $_SESSION['chucvu']=$user['chucvu'];
                $_SESSION['apikey']=$user['apikey'];

                $_SESSION['login']=$username;

                //===========
                $return['msg'] = 'Đăng Nhập Thành Công. Vui Lòng Chờ Chuyển Hướng!!';
                die(json_encode($return));
            } else {
                $return['error'] = 1;
                $return['msg']   = 'Mật Khẩu Bạn Nhập Không Đúng Cho Người Dùng Này';
                die(json_encode($return));
            }
        }
    }
    if ($t === 'load-vip-like') {
        $vip = get_vip_like($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                $data[] = array(
                    $vip[$i]['id'],
                    '<a target="_blank" href="https://fb.com/'.$vip[$i]['fbid'].'"><img src="https://graph.facebook.com/'.$vip[$i]['fbid'].'/picture?width=30&height=30" /></a>',
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'],
                    $vip[$i]['camxuc'],
                    round((($vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400))- time())/(24*3600)).' Ngày', 
                    $vip[$i]['speed']//,
                    // '<div class="switch">
     //                    <label>
        //                     <input type="checkbox" class="btnActionModuleItem" '.$vip[$i]['action'].' value="'.$vip[$i]['id'].'">
        //                     <span class="lever switch-col-light-blue"></span>
     //                    </label>
     //                </div>'
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'load-buy-follow') {
        $vip = get_buy_follow($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                if($vip[$i]['sub_type']==1){
                     $data[] = array(
                    $vip[$i]['id'],
                    '<a target="_blank" href="https://fb.com/'.$vip[$i]['fbid'].'"><img src="https://graph.facebook.com/'.$vip[$i]['fbid'].'/picture?width=30&height=30" /></a>',
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'],
                    'Sub Tây',
                    $vip[$i]['time'],
                    $vip[$i]['status']
                );
                }else{
                    $data[] = array(
                    $vip[$i]['id'],
                    '<a target="_blank" href="https://fb.com/'.$vip[$i]['fbid'].'"><img src="https://graph.facebook.com/'.$vip[$i]['fbid'].'/picture?width=30&height=30" /></a>',
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'],
                    'Sub VN',
                    $vip[$i]['time'],
                    $vip[$i]['status']
                );

                }
               
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'load-vip-buff') {
        $vip = get_vip_buff($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                $data[] = array(
                    $vip[$i]['id'],
                    
                    $vip[$i]['fbid'],
                    $vip[$i]['numberLike'],
                    $vip[$i]['camxuc'],
                    $vip[$i]['status'],
                    date('d/m/Y H:i:s', $vip[$i]['time_buy']) 
                
                    //$vip[$i]['time_buy']
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'load-vip-buff-cmt') {
        $vip = get_vip_buff_cmt($_SESSION['username']);
        //echo $vip;
       // print_r($vip);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                
                // echo $vip[$i]['cgt'];
                if($vip[$i]['cgt']==''){
                   $gt='Nam và Nữ';
                }

                if($vip[$i]['cgt']=='1'){
                   $gt='Nam';
                }

                if($vip[$i]['cgt']=='2'){
                   $gt='Nữ';
                }

               
                
                $data[] = array(
                    $vip[$i]['id'],
                    $vip[$i]['fbid'],
                  //  str_replace("=",PHP_EOL,$vip[$i]['cmt']),
                    $vip[$i]['status'],
                    $vip[$i]['package'],
                     date('d/m/Y', $vip[$i]['timebuy']),
                    //$vip[$i]['timebuy'],
                     $vip[$i]['speed'],
                     
                     $gt
                    
                    
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    
   if ($t === 'update_api_key') {
      $apikey =$_POST['apikey'];
      $username=$_SESSION['username'];

      if (update_api_key($apikey, $username)) {
          
         $return['msg'] = 'Thành công';

      }else{
       $return['error'] = 1;
          $return['msg'] = 'Thất bại';
        
      }
      die(json_encode($return));

   }
   

    if ($t === 'action-vip-like') {
        $checked = _p($_POST['checked']);
        $value = _p($_POST['value']);
        if (action_vip_like($checked, $value)) {
            if ($checked == 'checked') {
                $return['msg'] = 'Đã Kích Hoạt Trở Lại VIP LIKE Cho Người Dùng Này';
            } else {
                $return['error'] = 1;
                $return['msg'] = 'Đã Tạm Dừng VIP LIKE Cho Người Dùng Này';
            }
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if ($t === 'action-vip-bot') {
        $checked = _p($_POST['checked']);
        $value = _p($_POST['value']);
        if (action_vip_bot($checked, $value)) {
            if ($checked == 'checked') {
                $return['msg'] = 'Đã Kích Hoạt Trở Lại VIP BOT Cho Người Dùng Này';
            } else {
                $return['error'] = 1;
                $return['msg'] = 'Đã Tạm Dừng VIP BOT Cho Người Dùng Này';
            }
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if ($t === 'get-name-by-cookie') {
        $cookie = _p($_POST['cookie']);
        $data = __c('https://mbasic.facebook.com/profile.php', $cookie);
        if(preg_match('#<title>(.+?)</title>#is',$data, $match)){
            $nameUser = $match[1];
        }
        if(preg_match('#name="fb_dtsg" value="(.+?)"#is',$data, $match)){
            $fb_dtsg = $match[1];
        }
        if(preg_match('#name="target" value="(.+?)"#is',$data, $match)){
            $idUser = $match[1];
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Mã Access Cookie Không Hợp Lệ';
            die(json_encode($return));
        }
        $return['name'] = $nameUser;
        $return['id'] = $idUser;
        $return['fb_dtsg'] = $fb_dtsg;
        die(json_encode($return));
    }
    if ($t === 'buy-vip-bot') {
        $id = _p($_POST['id']);
        if(!preg_match('/[0-9]/' ,$id, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'ID FB Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        $name = _p($_POST['name']);
        $access = _p($_POST['access']);
        $fb_dtsg = _p($_POST['fb_dtsg']);
        $limit_time = _p($_POST['limit_time']);
        $reaction = _p($_POST['reaction']);
        if($limit_time < 1 || $limit_time > 6){
            $return['error'] = 1;
            $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
            die(json_encode($return));
        }
        $package = get_package_vip_bot();
        $user = getUser($_SESSION['id']);
        $price = $package['vnd']*$limit_time;
        if ($user['vnd'] >= $price) {
            $truVND = updateVNDUser($user['vnd'] - $price);
            $txt = 'Vip Bot||'.$_SESSION['username'].'||'.$id.'||'.$name.'||'.$package['name'].'||'.$limit_time.'||'.date("H:i d-m-Y");
            _saveVip($txt);
            _saveVipUser($txt);
            if ($fb_dtsg) {
                if (insert_vip_bot_cookie($id, $name, $_SESSION['username'], $reaction ,$access, $limit_time, $fb_dtsg)) {
                    $return['msg'] = 'Cài VIP BOT Thành Công';
                    die(json_encode($return));
                }
            } else {
                if (insert_vip_bot_token($id, $name, $_SESSION['username'], $reaction ,$access, $limit_time)) {
                    $return['msg'] = 'Cài VIP BOT Thành Công';
                    die(json_encode($return));
                }
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }
    

    if ($t === 'load-vip-bot') {
        $vip = get_vip_bot($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                if ($vip[$i]['type_access'] == 'ACCESS_TOKEN') {
                    if (_checkToken($vip[$i]['access_token'])) {
                        $live_die = '<font color="green">LIVE</font>';
                    } else {
                        $live_die = '<font color="red">DIE</font>';
                    }
                } else {
                    $live_die = '<font color="red">Ko Thể K.Tra</font>';
                }
                $data[] = array(
                    $vip[$i]['id'],
                    '<img src="https://graph.facebook.com/'.$vip[$i]['fbid'].'/picture?width=30&height=30" /><a target="_blank" href="https://fb.com/'.$vip[$i]['fbid'].'"> '.$vip[$i]['fbname'].'</a>',
                    $vip[$i]['type_react'],
                    $vip[$i]['type_access'],
                    date('H:i d/m/Y', $vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400)),
                    '<div class="switch">
                        <label>
                            <input type="checkbox" class="btnActionModuleItem" '.$vip[$i]['action'].' value="'.$vip[$i]['id'].'">
                            <span class="lever switch-col-light-blue"></span>
                        </label>
                    </div>',
                    $live_die
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if($t === 'update-vip-bot'){
        $id = _p($_POST['id']);
        $access = _p($_POST['access']);
        $type_access = _p($_POST['type_access']);
        $type_react = _p($_POST['type_react']);
        $fb_dtsg = _p($_POST['fb_dtsg']);
        if (update_vip_bot($id, $access, $type_access, $type_react, $fb_dtsg)) {
            $return['msg'] = 'Cập Nhật Thành Công';
            die(json_encode($return));
        }
    }
    if ($t === 'edit-package-bot') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $name = _p($_POST['name']);
        $vnd = _p($_POST['vnd']);
        if (edit_package_vip_bot($name, $vnd)) {
            $return['msg'] = 'Chỉnh Sửa Thành Công';
            die(json_encode($return));
        }
    }
    if($t === 'create-gift'){
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $number = _p($_POST['number']);
        $vnd = _p($_POST['vnd']);
        $gift = array();
        for ($i=0; $i < $number ; $i++) {
            $creat = create_gift($vnd);
            if ($creat) {
                $gift[] = $creat;
            }
        }
        if (count($gift) > 0) {
            die(json_encode($gift));
        }
    }
    if ($t === 'load-gift-code') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $gift = get_gift_code();
        $data = array();
        $long = count($gift);
        for ($i=0; $i < $long; $i++) {
            $data[] = array(
                $gift[$i]['id'],
                $gift[$i]['gift'],
                number_format($gift[$i]['vnd']). 'Cash',
                date('H:i d/m/Y', $gift[$i]['time']+(10*24*60*60)),
            );
        }
        $return = array('data' => $data);
        die(json_encode($return));
    }
    if ($t === 'gift') {
        $gift = _p($_POST['gift']);
        $vnd = gift($gift);
        if ($vnd) {
            $return['msg'] = 'Bạn Đã Nhận Được '.number_format($vnd).' Cash từ mã gift '.$gift;
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Mã Gift Không Tồn Tại Hoặc Đã Được Sử Dụng.';
            die(json_encode($return));
        }
    }
    if ($t === 'buy-vip-cmt') {
        $fbid = _p($_POST['id']);
        if(!preg_match('/[0-9]/' ,$fbid, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'ID FB Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        $name = _p($_POST['user']);
        $name_package = _p($_POST['package']);
        $speed = _p($_POST['speed']);
        $limit_time = _p($_POST['time']);
        $cmt = _p($_POST['cmt']);

        //echo $cmt."<br>";
        if($limit_time < 1 || $limit_time > 6 || $speed < 0 || $speed > 12){
// echo "nghiahsgs10";
//          echo $limit_time."<br>";echo $limit_time."<br>";echo $speed."<br>";

            $return['error'] = 1;
            $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
            die(json_encode($return));
        }

        //echo "nghiahsgs";
        //$vipCmt = array(50000,95000,140000,225000,270000,360000,450000);
        switch ($name_package){
            case '5' : $ch = 32500;
                break;
            case '10' : $ch = 65000;
                break;
            case '20' : $ch = 130000;
                break;
            case '30' : $ch = 195000;
                break;
           
            default :
                $return['error'] = 1;
                $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
                die(json_encode($return));
        }
        $user = getUser($_SESSION['id']);
        //print_r($user);
        //echo $user['vnd']."<br>";



       //  echo $ch."<br>";
        // echo $limit_time."<br>";
        $price = $ch*$limit_time;
        //echo $price."<br>";

// echo $fbid."<br>";echo $name."<br>";echo $_SESSION['username']."<br>";echo $name_package."<br>";
// echo $limit_time."<br>";echo $speed."<br>";echo $cmt."<br>";

        if ($user['vnd'] >= $price) {
            //tru tien vnd
            $truVND = updateVNDUser($user['vnd'] - $price);
           // echo 'tru vnd:'.$truVND."<br>";


            if (insert_vip_cmt($fbid, $name, $_SESSION['username'], $name_package, $limit_time, time(), $speed, $cmt) && $truVND) {
                
            //  echo 'Mua VIP Thành Công Cho Người Dùng';
                $return['msg'] = 'Mua VIP Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
                $txt = 'Vip Cmt||'.$_SESSION['username'].'||'.$fbid.'||'.$name.'||'.$name_package.'||'.$limit_time.'||'.date("H:i d-m-Y");
                // _saveVip($txt);
                // _saveVipUser($txt);
                die(json_encode($return));
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }
    if ($t === 'buy-vip-lstream') {
        $fbid = _p($_POST['id']);
        $type = $_POST['type'];
        if(!preg_match('/[0-9]/' ,$fbid, $matchs)){
            $return['error'] = 1;
            $return['msg']   = 'ID FB Bạn Nhập Không Đúng Định Dạng';
            die(json_encode($return));
        }
        $name = _p($_POST['user']);
        $name_package = _p($_POST['package']);
        
        $limit_time = _p($_POST['time']);
        
//echo $limit_time;
        //echo $cmt."<br>";
        if($limit_time < 0 || $limit_time > 6){

            $return['error'] = 1;
            $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
            die(json_encode($return));
        }
          
        $kq=checkidLiveStream($fbid);
        //echo $kq;
        if($kq){
            //if($type=="muaMoi"){
                $return['error'] = 1;
            $return['msg']   = 'Id đã tồn tại trong hệ thống';
            die(json_encode($return));
           // }

           
            
        }
        

        //echo "nghiahsgs";
        //$vipCmt = array(50000,95000,140000,225000,270000,360000,450000);
        //echo $name_package;
        switch ($name_package){
            case '50' : $ch = 40000;
                break;
            case '100' : $ch = 70000;
                break;
            case '150' : $ch = 100000;
                break;
            case '200' : $ch = 130000;
                break;
            case '250' : $ch = 160000;
                break;
            case '300' : $ch = 190000;
                break;
            case '350' : $ch = 220000;
                break;
            case '400' : $ch = 250000;
                break;
            case '500' : $ch = 310000;
                break;
            
            default :
                $return['error'] = 1;
                $return['msg']   = 'Phát Hiện Hành Vi Cheat Hệ Thống. Tài Khoản Sẽ Có Thể Bị Khóa';
                die(json_encode($return));
        }
        $user = getUser($_SESSION['id']);
        //print_r($user);
        //echo $user['vnd']."<br>";



       //  echo $ch."<br>";
        // echo $limit_time."<br>";
        $price = $ch*$limit_time;
        //echo $price."<br>";

// echo $fbid."<br>";echo $name."<br>";echo $_SESSION['username']."<br>";echo $name_package."<br>";
// echo $limit_time."<br>";echo $speed."<br>";echo $cmt."<br>";

        if ($user['vnd'] >= $price) {
            //tru tien vnd
            $truVND = updateVNDUser($user['vnd'] - $price);
           // echo 'tru vnd:'.$truVND."<br>";

             if($type=="muaMoi"){
                if (insert_vip_lstream($fbid, $name, $_SESSION['username'], $name_package, $limit_time, time()) && $truVND) {
                
            //  echo 'Mua VIP Thành Công Cho Người Dùng';
                $return['msg'] = 'Mua VIP Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
                // $txt = 'Vip Cmt||'.$_SESSION['username'].'||'.$fbid.'||'.$name.'||'.$name_package.'||'.$limit_time.'||'.date("H:i d-m-Y");
                // _saveVip($txt);
                // _saveVipUser($txt);
                die(json_encode($return));
            }
            }
             
             if($type=="gianHan"){
                $id=$_POST['stt'];
                if (update_vip_lstream($id,$limit_time) && $truVND) {
                
            //  echo 'Mua VIP Thành Công Cho Người Dùng';
                $return['msg'] = 'Mua VIP Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
                // $txt = 'Vip Cmt||'.$_SESSION['username'].'||'.$fbid.'||'.$name.'||'.$name_package.'||'.$limit_time.'||'.date("H:i d-m-Y");
                // _saveVip($txt);
                // _saveVipUser($txt);
                die(json_encode($return));
            }
            }
            
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }
    if ($t === 'buy-buff') {

    //    echo "nghiahsgs";
        $fbid = $_POST['id'];
        
        $numberLike = $_POST['numberLike'];
        $camxuc = $_POST['camxuc'];
        $serverBuffLike = $_POST['serverBuffLike'];


         // echo $fbid;
         // echo $numberLike;
         // echo $camxuc;
         // echo $serverBuffLike;
//         // echo intval($numberLike) < 20;echo intval($numberLike) > 5000;

        if(intval($numberLike) < 20 || intval($numberLike) > 5000){
// echo "nghiahsgs10";
//          echo $limit_time."<br>";echo $limit_time."<br>";echo $speed."<br>";

            $return['error'] = 1;
            $return['msg']   = 'Số like cần mua phải lớn hơn 20 và nhỏ hơn 5000';
            die(json_encode($return));
        }

       //echo $camxuc;

        if($camxuc == 'like' || $camxuc == 'love' || $camxuc == 'haha'|| $camxuc == 'wow'|| $camxuc == 'sad'|| $camxuc == 'angry'){

            
        }else{
            $return['error'] = 1;
            $return['msg']   = 'không nhận diện được cảm xúc';
            die(json_encode($return));
        }

        
        $user = getUser($_SESSION['id']);
        //echo $user['vnd'];

        if($serverBuffLike=='1'){
            $price = $numberLike*6;
        }else{
            $price = $numberLike*16;
        }
        //echo $price;
        
        

        if ($user['vnd'] >= $price) {
            //tru tien vnd
            $truVND = updateVNDUser($user['vnd'] - $price);
           //echo '<br>tru vnd:'.$truVND."<br>";


            if (insert_vip_buff($fbid, $numberLike, $_SESSION['username'],time(),$camxuc,$serverBuffLike) && $truVND) {
                
            //  echo 'Mua VIP Thành Công Cho Người Dùng';
                $return['msg'] = 'Mua Like Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
                
                die(json_encode($return));
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }
    if ($t === 'buy-buff-cmt') {
        $fbid =$_POST['fbid'];
        $cgt = $_POST['cgt'];
        $package = $_POST['package'];
        $cmt = $_POST['cmt'];
        $speed = $_POST['speed'];

        // echo $numberLike;
        // echo intval($numberLike) < 20;echo intval($numberLike) > 5000;

        if(intval($package) < 10 || intval($package) > 500){
// echo "nghiahsgs10";
//          echo $limit_time."<br>";echo $limit_time."<br>";echo $speed."<br>";

            $return['error'] = 1;
            $return['msg']   = 'Số comment cần mua phải lớn hơn 10 và nhỏ hơn 500';
            die(json_encode($return));
        }
        if(intval($speed) < 0){
// echo "nghiahsgs10";
//          echo $limit_time."<br>";echo $limit_time."<br>";echo $speed."<br>";

            $return['error'] = 1;
            $return['msg']   = 'Tốc độ phải lớn hơn 0';
            die(json_encode($return));
        }
        if(intval($package) % 10!=0){
             $return['error'] = 1;
            $return['msg']   = 'Số comment phải là bội của 10';
            die(json_encode($return));
        }

        $user = getUser($_SESSION['id']);
        
        $price = $package*100;
        

        if ($user['vnd'] >= $price) {
            //tru tien vnd
            $truVND = updateVNDUser($user['vnd'] - $price);
           // echo 'tru vnd:'.$truVND."<br>";


            if (insert_vip_buff_cmt($fbid, $cgt, $_SESSION['username'],$package,$cmt,$speed) && $truVND) {
                
            //  echo 'Mua VIP Thành Công Cho Người Dùng';
                $return['msg'] = 'Mua CMT Thành Công Cho Người Dùng '.$name.' ('.$fbid.')';
                
                die(json_encode($return));
            }
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Đủ Số Dư Để Thực Hiện Mua VIP. Vui Lòng Nạp Thêm';
            die(json_encode($return));
        }
    }
    if ($t === 'load-vip-cmt') {
        $vip = get_vip_cmt($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                //$cmt = str_replace("\n", "<br>----<br>", $vip[$i]['cmt']);
                $data[] = array(
                    $vip[$i]['id'],
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'].' Comment',
                    round((($vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400))- time())/(24*3600)).' Ngày', 
                    $vip[$i]['speed'],
                    // '<div class="switch">
     //                    <label>
        //                     <input type="checkbox" class="btnActionModuleItem" '.$vip[$i]['action'].' value="'.$vip[$i]['id'].'">
        //                     <span class="lever switch-col-light-blue"></span>
     //                    </label>
     //                </div>',
                    '<textarea disabled class="form-control" rows="3">'.$vip[$i]['cmt'].'</textarea>'
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'load-vip-lstream') {
        //echo "nghiahsgs";
        $vip = get_vip_lstream($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                $live=$vip[$i]['live'];

                if($live=="1"){
                    $live='<span class="label label-success">LIVE</span>';
                }else{
                    $live='<span class="badge badge-dark">OFF</span>';
                }

                //$cmt = str_replace("\n", "<br>----<br>", $vip[$i]['cmt']);
                 $dayRemain=round((($vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400))- time())/(24*3600));
                 // if($dayRemain<0){
                 //    $divdayRemain='<div style="color:red">'.$dayRemain.' ngày<div>';
                    
                 // }else{
                 //    $divdayRemain='<div style="color:green">'.$dayRemain.' ngày<div>';
                    
                 // }
                   
                  if($dayRemain<0){
                   // $divdayRemain='<div style="color:red">'.$dayRemain.' ngày<div>';
                    
                 }else{
                    $divdayRemain='<div style="color:green">'.$dayRemain.' ngày<div>';
                    
                 
                

                $data[] = array(
                    $vip[$i]['id'],
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'].' Mắt',
                    $live,
                    // .' Ngày',
                    $divdayRemain,
                    // '<button type="button" onclick="'."xoaIdLstream('".$vip[$i]['id']."')".'" class="btn btn-warning">Xóa</button>',
'<a data-fancybox="" data-animation-duration="700" data-src="#xoafb'.$vip[$i]['id'].'" href="javascript:;" class="btn btn-primary">Xóa</a>
                    <div style="display: none;" id="xoafb'.$vip[$i]['id'].'" class="animated-modal"><p>Bạn có muốn xóa id: '.$vip[$i]['fbid'].' này</p><button type="button" class="btn btn-warning" onclick="'."xoaIdLstream('".$vip[$i]['id']."')".'" class="btn btn-warning">Xóa</button>'
                    
                  

                    
                );
                }
            }
            //echo $data;
            //print_r($data);
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }

    if ($t === 'load-vip-lstream-2') {
        //echo "nghiahsgs";
        $vip = get_vip_lstream($_SESSION['username']);
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                //$cmt = str_replace("\n", "<br>----<br>", $vip[$i]['cmt']);
                 $dayRemain=round((($vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400))- time())/(24*3600));
                 // if($dayRemain<0){
                 //    $divdayRemain='<div style="color:red">'.$dayRemain.' ngày<div>';
                    
                 // }else{
                 //    $divdayRemain='<div style="color:green">'.$dayRemain.' ngày<div>';
                    
                 // }

                  if($dayRemain<0){
                    $divdayRemain='<div style="color:red">'.$dayRemain.' ngày<div>';
                    
                 
                    
                 
                

                $data[] = array(
                    $vip[$i]['id'],
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'].' Mắt',
                    // .' Ngày',
                    $divdayRemain,
                    
'<a data-fancybox="" data-animation-duration="700" data-src="#xoafb'.$vip[$i]['id'].'" href="javascript:;" class="btn btn-primary">Xóa</a>
                    <div style="display: none;" id="xoafb'.$vip[$i]['id'].'" class="animated-modal"><p>Bạn có muốn xóa id: '.$vip[$i]['fbid'].' này</p><button type="button" class="btn btn-warning" onclick="'."xoaIdLstream('".$vip[$i]['id']."')".'" class="btn btn-warning">Xóa</button>',
                    
//                     '<select name="" id="time-gia-han-'.$vip[$i]['id'].'"> 
// <option value="1">1 Tháng</option>
//                                             <option value="2">2 Tháng</option>
//                                             <option value="3">3 Tháng</option>
//                                             <option value="0.166666667">5 ngày</option>
//                                             <option value="0.333333333">10 ngày</option>
//                                             <option value="0.5">15 ngày</option>
//                                             <option value="0.666666667">20 ngày</option>
//                                             <option value="0.833333333">25 ngày</option>
//                                         </select>
//                      <button type="button" onclick="'."giaHanGoiLive('".$vip[$i]['id']."','".$vip[$i]['fbid']."','".$vip[$i]['name']."','".$vip[$i]['name_package']."','".$dayRemain."',)".'" class="btn btn-primary">Gian Hạn</button>
//                                         '

                    
                );
                }
            }
            //echo $data;
            //print_r($data);
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }

    
    if ($t === 'get_api_key') {
        //echo "nghiahsgs";
        $kq = get_api_key($_SESSION['username']);
        die(json_encode($kq));
    }

    if ($t === 'action-vip-cmt') {
        $checked = _p($_POST['checked']);
        $value = _p($_POST['value']);
        if (action_vip_cmt($checked, $value)) {
            if ($checked == 'checked') {
                $return['msg'] = 'Đã Kích Hoạt Trở Lại VIP Comment Cho Người Dùng Này';
            } else {
                $return['error'] = 1;
                $return['msg'] = 'Đã Tạm Dừng VIP Comment Cho Người Dùng Này';
            }
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if ($t === 'action-vip-lstream') {
        $checked = _p($_POST['checked']);
        $value = _p($_POST['value']);
        if (action_vip_lstream($checked, $value)) {
            if ($checked == 'checked') {
                $return['msg'] = 'Đã Kích Hoạt Trở Lại VIP Lstream Cho Người Dùng Này';
            } else {
                $return['error'] = 1;
                $return['msg'] = 'Đã Tạm Dừng VIP Lstream Cho Người Dùng Này';
            }
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if($t === 'notify'){
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $notify = _p($_POST['notify']);
        _saveNotify($notify.'||'.date("H:i d/m/Y")."\n");
        $return['msg'] = 'Đã Tạo Thông Báo Thành Công';
        die(json_encode($return));
    }
    if($t === 'change-pass'){
        $old = _p($_POST['old_pass']);
        $new = _p($_POST['new_pass']);
        $user = getUser($_SESSION['id']);
        if ($user['pass'] !== $old) {
            $return['error'] = 1;
            $return['msg']   = 'Mật Khẩu Cũ Không Chính Xác';
            die(json_encode($return));
        }
        if (updatePassUser($new)) {
            $return['msg']   = 'Mật Khẩu Của Bạn Đã Được Đổi Thành Công';
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Thể Đổi Mật Khẩu';
            die(json_encode($return));
        }
    }
    if ($t === 'add-token') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $arrToken = $_POST['arr_access'];
        $arrID = $_POST['arr_id'];
        if(count($arrToken) == 0){
            $return['error'] = 1;
            $return['msg']   = 'Bạn Không Có Token Mới Nào';
            die(json_encode($return));
        }
        if(addMultiToken($arrToken, $arrID)){
            $return['msg']   = 'Đã Thêm Thành Công '.count($arrToken).' Access Token Vào CSDL';
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if($t === 'load-log-vip-like'){
        $idUser = $_GET['idUser'];
        $data = file_get_contents('../crons/vipLike.log.txt');
        $data = explode("\n", $data);
        $json = array();
        for($i=count($data)-2; $i >= 0; $i--){
            $value = explode("||", $data[$i]);
            if ($value[0] === $_SESSION['username'] && $idUser === $value[1]) {
                $json[] = array(
                    $value[1],
                    '<img src="https://graph.facebook.com/' . $value[1] . '/picture?width=30&height=30" /> <a target="_blank" href="https://fb.com/' . $value[1] . '"> ' . $value[2] . '</a>',
                    $value[3],
                    $value[4],
                    $value[5]
                );
            }
        }
        $response = array();
        $response['data'] = $json;
        echo json_encode($response);
    }
    if($t === 'load-log-vip-cmt'){
        $idUser = $_GET['idUser'];
        $data = file_get_contents('../crons/vipCmt.log.txt');
        $data = explode("\n", $data);
        $json = array();
        for($i=count($data)-2; $i >= 0; $i--){
            $value = explode("||", $data[$i]);
            if ($value[0] === $_SESSION['username'] && $idUser === $value[1]) {
                $json[] = array(
                    $value[1],
                    '<img src="https://graph.facebook.com/' . $value[1] . '/picture?width=30&height=30" /> <a target="_blank" href="https://fb.com/' . $value[1] . '"> ' . $value[2] . '</a>',
                    $value[3],
                    $value[4],
                    $value[5]
                );
            }
        }
        $response = array();
        $response['data'] = $json;
        echo json_encode($response);
    }
    if($t === 'load-log-vip-bot'){
        $idUser = $_GET['idUser'];
        $data = file_get_contents('../crons/vipBot.log.txt');
        $data = explode("\n", $data);
        $json = array();
        for($i=count($data)-2; $i >= 0; $i--){
            $value = explode("||", $data[$i]);
            if ($value[0] === $_SESSION['username'] && $idUser === $value[1]) {
                if ($value[5] === 'Cookie Post') {
                    $a = '<img src="https://www.fordservicepricepromise.com/img/ford_lodding.gif" width = "30" height="30" /> <a target="_blank" href="https://fb.com/"> ' . $value[6] . '</a>';
                } else {
                    $a = '<img src="https://graph.facebook.com/' . $value[5] . '/picture?width=30&height=30" /> <a target="_blank" href="https://fb.com/' . $value[5] . '"> ' . $value[6] . '</a>';
                }
                $json[] = array(
                    $value[1],
                    '<img src="https://graph.facebook.com/' . $value[1] . '/picture?width=30&height=30" /> <a target="_blank" href="https://fb.com/' . $value[1] . '"> ' . $value[2] . '</a>',
                    $value[3],
                    $value[4],
                    $a,
                    $value[7]
                );
            }
        }
        $response = array();
        $response['data'] = $json;
        echo json_encode($response);
    }
    if ($t === 'nap-the-baokim') {
        define('CORE_API_HTTP_USR', 'merchant_19002');
        define('CORE_API_HTTP_PWD', '19002mQ2L8ifR11axUuCN9PMqJrlAHFS04o');
        $bk = 'https://www.baokim.vn/the-cao/restFul/send';
        $nhamang = _p($_POST['nhamang']);
        $mathe = _p($_POST['mathe']);
        $seri = _p($_POST['seri']);
        if($nhamang=='MOBI'){
            $ten = "Mobifone";
        }
        else if($nhamang=='VIETEL'){
            $ten = "Viettel";
        }
        else if($nhamang=='GATE'){
            $ten = "Gate";
        } else if($nhamang=='VTC'){
            $ten = "VTC";
        } else {
            $ten ="Vinaphone";
        }
        $merchant_id = $config_BK['merchant_id'];
        $api_username = $config_BK['api_username'];
        $api_password = $config_BK['api_password'];
        $transaction_id = time();
        $secure_code = $config_BK['secure_code'];
        $arrayPost = array(
            'merchant_id'=>$merchant_id,
            'api_username'=>$api_username,
            'api_password'=>$api_password,
            'transaction_id'=>$transaction_id,
            'card_id'=>$nhamang,
            'pin_field'=>$mathe,
            'seri_field'=>$seri,
            'algo_mode'=>'hmac'
        );
        ksort($arrayPost);
        $data_sign = hash_hmac('SHA1',implode('',$arrayPost),$secure_code);
        $arrayPost['data_sign'] = $data_sign;
        $curl = curl_init($bk);
        curl_setopt_array($curl, array(
            CURLOPT_POST=>true,
            CURLOPT_HEADER=>false,
            CURLINFO_HEADER_OUT=>true,
            CURLOPT_TIMEOUT=>30,
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPAUTH=>CURLAUTH_DIGEST|CURLAUTH_BASIC,
            CURLOPT_USERPWD=>CORE_API_HTTP_USR.':'.CORE_API_HTTP_PWD,
            CURLOPT_POSTFIELDS=>http_build_query($arrayPost)
        ));
        $data = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($data,true);
        if($status==200){
            $amount = $result['amount'];
            $xu = 0;
            switch($amount) {
                case 10000: $xu = 10000; break;
                case 20000: $xu = 20000; break;
                case 30000: $xu = 30000; break;
                case 50000: $xu= 50000; break;
                case 100000: $xu = 100000; break;
                case 200000: $xu = 200000; break;
                case 300000: $xu = 300000; break;
                case 500000: $xu = 500000; break;
                case 1000000: $xu = 1000000; break;
            }
            $user = getUser($_SESSION['id']);
            $vnd = updateVNDUser($user['vnd']+$xu);
            $txt = 'true||'.$_SESSION['username'].'||'.$ten.'||'.$amount.'||'.$mathe.'||'.$seri.'||'.date("H:i d-m-Y").'||Nạp thẻ thành công!';
            $return['msg']   = 'Nạp Thành Công Thẻ: '.$ten.' Với Mệnh Giá: '.$amount;
            die(json_encode($return));
        } else {
            $error = $result['errorMessage'];
            $txt = 'false||'.$_SESSION['username'].'||'.$ten.'||0||'.$mathe.'||'.$seri.'||'.date("H:i d-m-Y").'||'.$error;
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
        _saveCard($txt);
    }
    if ($t === 'nap-the-banthe247') {
        $nhamang = _p($_POST['nhamang']);
        $mathe = _p($_POST['mathe']);
        $seri = _p($_POST['seri']);
        if($nhamang=='VMS'){
            $ten = "Mobifone";
        }else if($nhamang=='VTT'){
            $ten = "Viettel";
        }else if($nhamang=='FPT'){
            $ten = "Gate";
        } else if($nhamang=='VNP'){
            $ten = "Vinaphone";
        }else if($nhamang=='VNM'){
            $ten = "Vietnammobile";
        }else if($nhamang=='MGC'){
            $ten = "Megacard";
        } else if($nhamang == 'ONC') {
            $ten ="OnCash";
        }
        $transid = rand().'_'.$config_BanThe247['partnerId'];
        $sig = md5($config_BanThe247['partnerId'].'-'.$config_BanThe247['secreckey'].'-'.$nhamang.'-'.$seri.'-'.$mathe.'-'.$transid);
        $url = 'http://api.banthe247.com/CardCharge.ashx';
        $url .= '?partnerId='.$config_BanThe247['partnerId'];
        $url .= '&telco='.$nhamang;
        $url .= '&serial='.$seri;
        $url .= '&cardcode='.$mathe;
        $url .= '&transId='.$transid;
        $url .= '&key='.$sig;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        $str = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($str,true);
        if($result['ResCode']==1){
            $amount = $result['Amount'];
            $xu = $amount*1000;
            $user = getUser($_SESSION['id']);
            $vnd = updateVNDUser($user['vnd']+$xu);
            $txt = 'true||'.$_SESSION['username'].'||'.$ten.'||'.$amount.'||'.$mathe.'||'.$seri.'||'.date("H:i d-m-Y").'||Nạp thẻ thành công!';
            $return['msg']   = 'Nạp Thành Công Thẻ: '.$ten.' Với Mệnh Giá: '.$amount;
        } else {
            $error = $result['Message'];
            $txt = 'false||'.$_SESSION['username'].'||'.$ten.'||0||'.$mathe.'||'.$seri.'||'.date("H:i d-m-Y").'||'.$error;
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
        }
        _saveCard($txt);
        _saveCardUser($txt);
        die(json_encode($return));
    }
    if ($t === 'set-vnd') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $username = _p($_POST['user']);
        $vnd = _p($_POST['vnd']);
        $user = getUserbyName($username);
        if ($user['user']) {
            updateVNDUser($vnd+$user['vnd'], 1, $user['id']);
            $txt = 'true||developer||Chuyển Khoản||'.$vnd.'||'.$username.'||null||'.date("H:i d-m-Y").'||Nạp tiền thành công!';
            $return['msg']   = 'Đã Cộng Thành Công '.$vnd.' Cash Cho: '.$username.'('.$user['fullname'].')';
            _saveCard($txt);
            _saveExUser($txt);
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Không Tìm Thấy Người Dùng';
            die(json_encode($return));
        }
    }
    if ($t === 'set-vnd-daily') {
        if (isDaily() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $username = _p($_POST['user']);
        $vnd = _p($_POST['vnd']);
        $user = getUserbyName($username);
        $userDaily = getUser($_SESSION['id']);
        if ($user['user']  && $userDaily['vnd'] > $vnd) {
            updateVNDUser($vnd+$user['vnd'], 1, $user['id']);
            updateVNDDaily($userDaily['vnd']-$vnd, 1, $userDaily['id']);
            $txt = 'true||'.$userDaily['fullname'].'||Chuyển Khoản||'.$vnd.'||'.$username.'||null||'.date("H:i d-m-Y").'||Nạp tiền thành công!';
            $return['msg']   = 'Đã Cộng Thành Công '.$vnd.' Cash Cho: '.$username.'('.$user['fullname'].')';
            _saveCardUser($txt);
            _saveCard($txt);
            _saveExUser($txt);
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Số Dư Không Đủ Hoặc Người Dùng Không Tồn Tại!';
            die(json_encode($return));
        }
    }
    if ($t === 'load-ls-nap-tien') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $src = file_get_contents('card.log.txt');
        $arr_src = explode("\n", $src);
        $data = array();
        for ($i=count($arr_src)-2; $i >= 0; $i--) {
            $value = explode("||", $arr_src[$i]);
            $ch = 'Thành công';
            if($value[0] == 'false') $ch = 'Thất bại';
            $data[] = array(
                $ch,
                $value[1],
                $value[2],
                number_format($value[3]),
                $value[4],
                $value[5],
                $value[6],
                $value[7]
            );
        }
        $return = array('data' => $data);
        die(json_encode($return));
    }
    if ($t === 'load-mua-vip') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $src = file_get_contents('buyvip.log.txt');
        $arr_src = explode("\n", $src);
        $data = array();
        for ($i=count($arr_src)-2; $i >= 0; $i--) {
            $value = explode("||", $arr_src[$i]);
            $data[] = array(
                $value[0],
                $value[1],
                $value[2],
                $value[3],
                $value[4],
                $value[5].' Tháng',
                $value[6]
            );
        }
        $return = array('data' => $data);
        die(json_encode($return));
    }
    if ($t === 'load-mua-vip-member'){
        $src = file_get_contents('../lichsu/'.$_SESSION['username'].'.log.txt');
        $arr_src = explode("\n", $src);
        $data = array();
        for ($i=count($arr_src)-2; $i >= 0; $i--) {
            $value = explode("||", $arr_src[$i]);
            $data[] = array(
                $value[0],
                $value[1],
                $value[2],
                $value[3],
                $value[4],
                $value[5].' Tháng',
                $value[6]
            );
        }
        $return = array('data' => $data);
        die(json_encode($return));
    }
        if ($t === 'load-ls-nap-tien-member') {
        $src = file_get_contents('../lichsunap/'.$_SESSION['username'].'.log.txt');
        $arr_src = explode("\n", $src);
        $data = array();
        for ($i=count($arr_src)-2; $i >= 0; $i--) {
            $value = explode("||", $arr_src[$i]);
            $ch = 'Thành công';
            if($value[0] == 'false') $ch = 'Thất bại';
            $data[] = array(
                $ch,
                $value[1],
                $value[2],
                number_format($value[3]),
                $value[4],
                $value[5],
                $value[6],
                $value[7]
            );
        }
        $return = array('data' => $data);
        die(json_encode($return));
    }
    if ($t === 'get-token') {
        $type = _p($_POST['type']);
        if($type == 'access_token'){
            $getToken = getTokenToServer('access_token');
        } else {
            $getToken = getTokenToServer('fbid');
        }
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        die(json_encode($getToken));
    }
    if ($t === 'del-token') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $tokenDIE = $_POST['token_die'];
        if(count($tokenDIE) == 0){
            $return['msg']   = 'Bạn Không Có Token DIE Nào';
            die(json_encode($return));
        }
        if(delMultiToken($tokenDIE)){
            $return['msg']   = 'Đã Xóa Thành Công '.count($tokenDIE).' Access Token DIE';
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if ($t === 'load-manage-vip-like-admin') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $vip = get_vip_like('admin');
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                $data[] = array(
                    $vip[$i]['id'],
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'],
                    $vip[$i]['name_buy'],
                    $vip[$i]['camxuc'],
                    date('H:i d/m/Y', $vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400)),
                    $vip[$i]['speed'],
                    '<div class="switch">
                        <label>
                            <input type="checkbox" class="btnActionModuleItem" '.$vip[$i]['action'].' value="'.$vip[$i]['id'].'">
                            <span class="lever switch-col-light-blue"></span>
                        </label>
                    </div>'
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'update-vip-like-admin') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $id  = _p($_POST['id']);
        $fbid = _p($_POST['fbid']);
        $name = _p($_POST['name']);
        $package = _p($_POST['package']);
        $speed = _p($_POST['speed']);
        $camxuc = _p($_POST['camxuc']);
        $update = updateVipLikeByAdmin($id, $fbid, $name, $package, $speed, $camxuc);
        if ($update) {
            $return['msg'] = "Chỉnh Sửa Thành Công";
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg'] = "Không Thể Chỉnh Sửa";
            die(json_encode($return));
        }
    }
    if ($t === 'update-vip-like') {
        $id  = _p($_POST['id']);
        $fbid = _p($_POST['fbid']);
        $speed = _p($_POST['speed']);
        $name = _p($_POST['name']);
        $camxuc = _p($_POST['camxuc']);
        $update = updateVipLikeByUser($id, $fbid, $name, $speed, $camxuc);
        if ($update) {
            $return['msg'] = "Chỉnh Sửa Thành Công";
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg'] = "Không Thể Chỉnh Sửa";
            die(json_encode($return));
        }
    }
    if ($t === 'update-vip-cmt') {
        $id  = _p($_POST['id']);
        $cmt = _p($_POST['cmt']);
        $fbid  = _p($_POST['fbid']);
        $name = _p($_POST['name']);
        $update = updateVipCmt($id, $cmt, $fbid, $name);
        if ($update) {
            $return['msg'] = "Chỉnh Sửa Thành Công";
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg'] = "Không Thể Chỉnh Sửa";
            die(json_encode($return));
        }
    }
    if ($t === 'load-manage-vip-cmt-admin') {
        $vip = get_vip_cmt('admin');
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                //$cmt = str_replace("\n", "<br>----<br>", $vip[$i]['cmt']);
                $data[] = array(
                    $vip[$i]['id'],
                    $vip[$i]['fbid'],
                    $vip[$i]['name'],
                    $vip[$i]['name_package'].' Comment',
                    $vip[$i]['name_buy'],
                    date('H:i d/m/Y', $vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400)),
                    $vip[$i]['speed'],
                    '<div class="switch">
                        <label>
                            <input type="checkbox" class="btnActionModuleItem" '.$vip[$i]['action'].' value="'.$vip[$i]['id'].'">
                            <span class="lever switch-col-light-blue"></span>
                        </label>
                    </div>',
                    '<textarea disabled class="form-control" rows="3">'.$vip[$i]['cmt'].'</textarea>'
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'update-vip-cmt-admin') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $id  = _p($_POST['id']);
        $fbid = _p($_POST['fbid']);
        $name = _p($_POST['name']);
        $speed = _p($_POST['speed']);
        $cmt = _p($_POST['cmt']);
        $package = _p($_POST['package']);
        $update = updateVipCmtByAdmin($id, $fbid, $name, $package, $cmt, $speed);
        if ($update) {
            $return['msg'] = "Chỉnh Sửa Thành Công";
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg'] = "Không Thể Chỉnh Sửa";
            die(json_encode($return));
        }
    }
    if ($t === 'delete-vip') {
       
        $id = $_POST['id'];
        $type= $_POST['type'];
        if (delete_vip($id,$type)) {
            $return['msg'] = 'Xóa Thành Công!';
            die(json_encode($return));
        }
    }
    if ($t === 'load-vip-bot-admin') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $vip = get_vip_bot('admin');
        $data = array();
        $long = count($vip);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                if ($vip[$i]['type_access'] == 'ACCESS_TOKEN') {
                    if (_checkToken($vip[$i]['access_token'])) {
                        $live_die = '<font color="green">LIVE</font>';
                    } else {
                        $live_die = '<font color="red">DIE</font>';
                    }
                } else {
                    $live_die = '<font color="red">Ko Thể K.Tra</font>';
                }
                $data[] = array(
                    $vip[$i]['id'],
                    '<img src="https://graph.facebook.com/'.$vip[$i]['fbid'].'/picture?width=30&height=30" /><a target="_blank" href="https://fb.com/'.$vip[$i]['fbid'].'"> '.$vip[$i]['fbname'].'</a>',
                    $vip[$i]['type_react'],
                    $vip[$i]['type_access'],
                    date('H:i d/m/Y', $vip[$i]['time_buy']+($vip[$i]['limit_time']*30*86400)),
                    '<div class="switch">
                        <label>
                            <input type="checkbox" class="btnActionModuleItem" '.$vip[$i]['action'].' value="'.$vip[$i]['id'].'">
                            <span class="lever switch-col-light-blue"></span>
                        </label>
                    </div>',
                    $live_die
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'load-member') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $mem = get_member();
        $data = array();
        $long = count($mem);
        if ($vip !== 0) {
            for ($i=0; $i < $long; $i++) {
                $data[] = array(
                    $mem[$i]['id'],
                    $mem[$i]['fullname'],
                    $mem[$i]['user'],
                    $mem[$i]['chucvu'],
                    $mem[$i]['vnd'],
                    '<div class="switch">
                        <label>
                            <input type="checkbox" class="btnActionModuleItem" '.$mem[$i]['block'].' value="'.$mem[$i]['id'].'">
                            <span class="lever switch-col-light-blue"></span>
                        </label>
                    </div>'
                );
            }
            $return = array('data' => $data);
            die(json_encode($return));
        }
    }
    if ($t === 'action-member') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $checked = _p($_POST['checked']);
        $value = _p($_POST['value']);
        if (action_member($checked, $value)) {
            if ($checked == 'checked') {
                $return['error'] = 1;
                $return['msg'] = 'Tài Khoản Người Dùng Này Đã Bị Tạm Khóa';
            } else {
                $return['msg'] = 'Đã Mở Khóa Cho Tài Khoản Người Dùng Này';
            }
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xảy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if ($t === 'update-member') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $id  = _p($_POST['id']);
        $fullname = _p($_POST['fullname']);
        $user = _p($_POST['user']);
        $email = _p($_POST['email']);
        $vnd = _p($_POST['vnd']);
        $update = updateMember($id, $fullname, $user, $email, $vnd);
        if ($update) {
            $return['msg'] = "Chỉnh Sửa Thành Công";
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg'] = "Không Thể Chỉnh Sửa";
            die(json_encode($return));
        }
    }
    if ($t === 'buff-like') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $sl = _p($_POST['sl']);
        $getToken = getTokenBySL($sl);
        if ($getToken) {
            $return['msg'] = "GET Token Thành Công";
            $return['access_token'] = $getToken;
            die(json_encode($return));
        } else {
            $return['error'] = 1;
            $return['msg']   = 'Đã Xãy Ra Lỗi';
            die(json_encode($return));
        }
    }
    if ($t === 'buff-cmt') {
        if (isAdmin() == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Không Được Đâu Sói Ạ.';
            die(json_encode($return));
        }
        $sl = _p($_POST['sl']);
        $sex = _p($_POST['sex']);
        $getToken = getTokenBySL($sl+50);
        $result_token = array();
        if($getToken) {
            foreach ($getToken as $value) {
                $me = _me($value);
                if (count($result_token) == $sl) {
                    break;
                }
                if ($me != 0) {
                    if ($me->gender == $sex) {
                        array_push($result_token, $value);
                    }
                    if($sex == 'all'){
                        array_push($result_token, $value);
                    }
                }
            }
            $return['access_token'] = $result_token;
            die(json_encode($return));
        }
    }
}
?>