<?php
require_once '2T_config/config_server.php';
if (!$_SESSION['login']) {
    session_destroy();
    header("Location: sign-in.php");
}
/************************************/
$result = mysqli_query($conn, "SELECT * FROM package_vip_bot LIMIT 1");
if ($result) {
    $package_vip_bot = mysqli_fetch_assoc($result);
}
/************************************/
require_once '2T_tpl/tpl_head.php';
function count_sys($table){
    global $conn;
    $result = mysqli_query($conn, "SELECT id FROM $table");
    return mysqli_num_rows($result);
}
?>
<?php
if ($_GET['act']) {
    
    
    if ($_GET['act'] == 'buy-vip-like') {
        require_once '2T_view/view_buy_vip_like.php';
    }
    if ($_GET['act'] == 'buy-vip-lstream') {
        require_once '2T_view/view_buy-vip-lstream.php';
    }
    if ($_GET['act'] == 'buy-vip-buff') {
        require_once '2T_view/view_buy_vip_buff.php';
    }
    // if ($_GET['act'] == 'buy-vip-buff-cmt') {
    //     require_once '2T_view/view_buy_buff_cmt.php';
    // }
    if ($_GET['act'] == 'buy-buff-cmt') {
        require_once '2T_view/view_buy_buff_cmt.php';
    }

    if ($_GET['act'] == 'buy-vip-cmt') {
        require_once '2T_view/view_buy_vip_cmt.php';
    }

    
    if ($_GET['act'] == 'manage-vip-like') {
        require_once '2T_view/view_manage_vip_like.php';
    }
    if ($_GET['act'] == 'manage-vip-buff') {
        require_once '2T_view/view_manage_vip_buff.php';
    }
    if ($_GET['act'] == 'manage-vip-buff-cmt') {
        require_once '2T_view/view_manage_vip_buff_cmt.php';
    }
    
    if ($_GET['act'] == 'manage-vip-lstream') {
        require_once '2T_view/view_manage_vip_lstream.php';
    }
     if ($_GET['act'] == 'manage-vip-cmt') {
        require_once '2T_view/view_manage_vip_cmt.php';
    }

    //
    
     if ($_GET['act'] == 'buy-follow') {
        require_once '2T_view/view_buy_follow.php';
    }
     if ($_GET['act'] == 'manage-buy-follow') {
         require_once '2T_view/view_manage_buy_follow.php';
    }

    
    if ($_GET['act'] == 'nap-tien') {
        $logID = $_GET['id'];
        require_once '2T_view/view_nap_tien.php';
    }
    
    //api
    if ($_GET['act'] == 'view-api') {
        $logID = $_GET['id'];
        require_once '2T_view/view_api.php';
    }
} else {
    require_once '2T_view/view_home.php';
}
?>
<?php
require_once '2T_tpl/tpl_footer.php';
?>