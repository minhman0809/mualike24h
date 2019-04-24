<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $config_site['name'];?> MUA LIKE 24H</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?php echo $config_site['url'];?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo $config_site['url'];?>/plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.7/sweetalert2.min.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $config_site['url'];?>/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" />
    <link href="<?php echo $config_site['url'];?>/css/custom.css" rel="stylesheet">
    
    <script src="2T_tpl/jquery.js"></script>
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css">
         
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.js"></script>
  
    <style type="text/css">
        .table td {
           text-align: center;
        }
        .table th {
           text-align: center;
        }
    </style>
    <script src="<?php echo $config_site['url'];?>/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        const   CURRENT_URL = document.URL,
               // PRICE_BOT   = <?php echo $package_vip_bot['vnd'];?>;
                prefix      = '2T_',
                modun       = 'modun';
    </script>
</head>

<body class="theme-blue-grey">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="loader-inner">
                <div class="loading one"></div>
            </div>
            <div class="loader-inner">
                <div class="loading two"></div>
            </div>
            <div class="loader-inner">
                <div class="loading three"></div>
            </div>
            <div class="loader-inner">
                <div class="loading four"></div>
            </div>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar" style="background: url('https://res-zaloapp.zadn.vn/pc/banners/newpattern-1.png'), linear-gradient(rgb(79, 193, 170), rgb(79, 193, 170));">
        <div class="container-fluid">
        <!--<script type="text/javascript" src="http://www.hethonglikeviet.info/css/flash-cau-doi.js"></script>-->
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <!-- <a class="navbar-brand" href="index.php"><img src="/images/logo3.png"></a> -->
                <a class="navbar-brand" href="/">MUA LIKE 24H</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                 
       

       <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="http://bottim.nghiahsgs.com/home.php">
            <i class="fa fa-fw fa-user-secret"></i>Hi <?php echo $_SESSION['username'] ?>          </a>

        </li>


<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="http://bottim.nghiahsgs.com/home.php">
            <i class="fa fa-money"></i> <?php echo number_format($_SESSION['vnd']) ?> vnđ
          </a>

        </li>



        
        <li class="nav-item">
         <!--  <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="/logout.php">
            <i class="fa fa-fw fa-sign-out">Logout</i>
        </a> -->
         <a  href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout
        </a>
        </li>
<!-- 
        <a href="logout.php" ><i class="fa fa-fw fa-sign-out">Đăng Xuất</i></a> -->
      

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info bg-cyan" style="background: url('https://res-zaloapp.zadn.vn/pc/banners/newpattern-1.png'), linear-gradient(rgb(79, 193, 170), rgb(79, 193, 170));">
              
                <!-- <div class="user-info bg-green" style="background-image: none;"> -->
                <div class="image">
                    <img src="facebook.png" width="48" height="48" alt="User">
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b style="color:light-blue"><?php echo $_SESSION['username'] ?></b></div>
                  
                </div>
            <!-- </div> -->
            </div>


            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">DANH MỤC CHỨC NĂNG</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>TRANG CHỦ</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">thumb_up</i>
                            <span>VIP LIKE</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-vip-like">MUA VIP</a>
                            </li>

                            <li>
                                <a href="?act=manage-vip-like">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">visibility</i>
                            <span>VIP LSTREAM</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-vip-lstream">MUA VIP</a>
                            </li>
                            <li>
                                <a href="?act=manage-vip-lstream">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">thumb_up</i>
                            <span>BUFF LIKE</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-vip-buff">BUFF LIKE</a>
                            </li>

                            <li>
                                <a href="?act=manage-vip-buff">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">comment</i>
                            <span>BUFF CMT</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-buff-cmt">BUFF CMT</a>
                            </li>

                            <li>
                                <a href="?act=manage-vip-buff-cmt">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">comment</i>
                            <span>VIP CMT</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-vip-cmt">MUA VIP</a>
                            </li>

                            <li>
                                <a href="?act=manage-vip-cmt">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">cast</i>
                            <span>BUY FOLLOW</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-follow">BUY FOLLOW</a>
                            </li>

                            <li>
                                <a href="?act=manage-buy-follow">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>


                    <!--  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">comment</i>
                            <span>VIP CMT</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=buy-vip-cmt">MUA VIP</a>
                            </li>

                            <li>
                                <a href="?act=manage-vip-cmt">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">monetization_on</i>
                            <span>TÀI KHOẢN</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?act=nap-tien">NẠP TIỀN</a>
                            </li>
                            <li>
                                <a href="?act=view-api">XEM API</a>
                            </li>
                            <!-- <li>
                                <a href="?act=view-history">LỊCH SỬ</a>
                            </li>
                            <li>
                            <a href="?act=change-pass">ĐỔI MẬT KHẨU</a>
                            </li> -->
                           <!--  <li>
                                <a href="?act=gift">SỬ DỤNG GIFTCODE</a>
                            </li> -->
                        </ul>
                    </li>
                   <!--  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           <i class="material-icons">widgets</i>
                            <span>CÔNG CỤ HỖ TRỢ</span>
                        </a>
                        <ul class="ml-menu">
                           <li>
                                <a href="/tools/gettoken" target="_blank">GET TOKEN</a>
                            </li>

                            <li>
                                <a href="/tools/get" target="_blank">GET TOKEN SLL</a>
                            </li>
                            
                             <li>
                                <a href="/tools/checkavt" target="_blank">CHECK TOKEN</a>
                            </li>
                            
                             <li>
                                <a href="/tools/loc" target="_blank">LỌC TOKEN TRÙNG</a>
                            </li>
                            <li>
                                <a href="/tools/stt" target="_blank">TỰ ĐỘNG ĐĂNG STT BẰNG TOKEN</a>
                            </li>
                            <li>
                                <a href="/tools/batkhien" target="_blank">BẬT KHIÊN AVATAR BẰNG TOKEN</a>
                            </li>
                            
                        </ul>
                    </li> -->
                   <!--  <li style="background: url('https://res-zaloapp.zadn.vn/pc/banners/newpattern-1.png'), linear-gradient(rgb(79, 193, 170), rgb(79, 193, 170));">
                        <a href="https://www.facebook.com/groups/hethonglikeviet" target="_blank">
                            <i class="material-icons">group</i>
                            <span>Hethonglikeviet Community</span>
                        </a>
                    </li> -->
                    
                     
                    
                    
                    <li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    