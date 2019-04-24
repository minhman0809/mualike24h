<?php
session_start();
//error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$config_TT = array(
    array(
        'type' => 'nganhang',
        'name' => 'VIETCOMBANK',
        'stk'  => '0041000292848',
        'chutk'=> 'LUC VAN THANG',
        'cn'   => 'Thanh Khê, Đà Nẵng',
        'ndung'=> $_SESSION['username']. ' Mua VIP',
        'logo'  => 'images/vcb.png'
    ),
    array(
        'type' => 'nganhang',
        'name'  => 'AGRIBANK',
        'stk' => '5023205120465',
        'chutk'     => 'LUC VAN THANG',
        'cn'   => 'Phú Thiện, Gia Lai',
        'ndung' => $_SESSION['username']. ' Mua VIP',
        'logo'  => 'http://www.agribankemobilebanking.vn/wp-content/themes/agribank_mobile/images/logo.png'
    )
);
$config_site = array(
    'url' => 'http://mualike24h.com',
    'name' => 'MUALIKE24H',
    'admin' => array('developer','vuongyeuhue'),
);
$config_BK = array(
    'merchant_id' => '30380',
    'api_username'=> 'c1c4e582ngrokio',
    'api_password'=> 'DSraiw8grmWpyQgrCsTd',
    'secure_code' => '538a5f3d73108c2c'
);
$config_BanThe247 = array(
    'partnerId' => '15321',
    'secreckey'=> '433465188_84347_D247'
);
$config_gC = array(
    'api_url' => 'https://www.google.com/recaptcha/api/siteverify',
    'site_key'=> '6Lc3Sj4UAAAAACkgxzpAAuF1UN7a_Azzk7EGD5-t',
    'secret_key'=> '6Lc3Sj4UAAAAAH071zSaaaw49D4GGmDNtJOCSf4C'
);
$config_db = array(
    'db_host' => 'localhost',
    'db_user' => 'u308316020_nghia',
    'db_name' => 'u308316020_like',
    'db_pass' => '261997'
);
$conn = mysqli_connect($config_db['db_host'], $config_db['db_user'], $config_db['db_pass'], $config_db['db_name']);
mysqli_set_charset($conn,"utf8");
?>