    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                VIP LSTREAM<small>Đăng Ký Sử Dụng VIP LIVE STREAM</small>
                            </h2>
                        </div>
                        <div class="body" style="min-height: 180px;background-image: url('https://res-zaloapp.zadn.vn/pc/banners/footer-t1.png'); background-repeat: no-repeat; background-position: right bottom;">
                            <div class="row clearfix">
                                
                                <div class="col-md-6">
                                    <label for="email_address">ID Facebook (*)</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" onchange="update()" id="id" class="form-control" placeholder="Vui Lòng Nhập Chính Xác ID FB Người Hưởng Like">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email_address">Tên Người Dùng</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="user" onchange="update()" class="form-control" placeholder="Nhập Tên Nick Facebook">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Chọn Gói VIP</label>
                                        <select name="" id="package-vip" onchange="update()" class="form-control" required="required">
                                             <option value="50">50 mắt</option>
                                            <option value="100">100 mắt</option>
                                            <option value="150">150 mắt</option>
                                            <option value="200">200 mắt</option>
                                            <option value="250">250 mắt</option>
                                            <option value="300">300 mắt</option>
                                            <option value="350">350 mắt</option>
                                            <option value="400">400 mắt</option>
                                            <option value="500">500 mắt</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input" class="control-label">Thời Gian Sử Dụng</label>
                                        <select name="" id="time-vip" onchange="update()" class="form-control" required="required"> 
                                            <option value="1">1 Tháng</option>
                                            <option value="2">2 Tháng</option>
                                            <option value="3">3 Tháng</option>
                                            <!-- <option value="0.166666667">5 ngày</option>
                                            <option value="0.333333333">10 ngày</option> -->
                                            <option value="0.5">15 ngày</option>
                                            <!-- <option value="0.666666667">20 ngày</option>
                                            <option value="0.833333333">25 ngày</option> -->
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <ul>
                                        <li>
                                            <p class="font-bold font-underline col-pink">Lưu ý:</p>
                                            <ul>
                                                <li><p class="font-bold">Chúng Tôi không hoàn lại gói VIP đã thanh toán.</p></li>
                                                <li><p class="font-bold">Cám ơn đã sử dụng dịch vụ của chúng tôi.</p></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <i class="fa fa-desktop" aria-hidden="true"></i> Chi Tiết Gói VIP
                            </h2>
                        </div>
                        <div class="body" style="padding: 2px;">
                           <ul class="list-group">
                                <li class="list-group-item">Tên Gói VIP:<span class="badge bg-pink" id="name-vip">NULL</span></li>
                                <li class="list-group-item">Giới Hạn Live Mỗi Bài:<span class="badge bg-cyan" id="sl-mat">NULL</span></li>
                                <li class="list-group-item">Tên Người Dùng:<span class="badge bg-cyan" id="name-user">NULL</span></li>
                                <li class="list-group-item">ID Thụ Hưởng:<span class="badge bg-cyan" id="id-user">NULL</span></li>
                                <li class="list-group-item">Thời Gian Sử Dụng:<span class="badge bg-cyan" id="limit-time">NULL</span></li>
                                <li class="list-group-item">Giới Hạn Bài Đăng:<span class="badge bg-cyan" id="limit-post">NULL</span></li>
                                <li class="list-group-item">Thanh Toán<span class="badge bg-cyan" id="price">NULL</span></li>
                            </ul>
                            <div class="text-center" style="margin-bottom: 10px;">
                                <button type="button" class="btn bg-light-green waves-effect" id="buy" onclick="buy()">
                                    <i class="fa fa-shopping-cart"></i> Thanh Toán
                                </button>
                                <button type="button" class="btn bg-deep-orange waves-effect" onclick="reset()"><i class="fa fa-times" aria-hidden="true"></i> Đặt Lại</button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Gói VIP</th>
                                        <th>VNĐ/Tháng</th>
                                    </tr>
                                </thead>
                                <tbody id="table-vip">

                                    <tr><td>50</td><td>40.000</td></tr>
                                    <tr><td>100</td><td>70.000</td></tr>
                                    <tr><td>150</td><td>100.000</td></tr>
                                    <tr><td>200</td><td>130.000</td></tr>
                                    <tr><td>250</td><td>160.000</td></tr>
                                    <tr><td>300</td><td>190.000</td></tr>
                                    <tr><td>350</td><td>220.000</td></tr>
                                    <tr><td>400</td><td>250.000</td></tr>
                                    <tr><td>500</td><td>310.000</td></tr>
                        
                                   
                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var USER;
        var checked;
        $("#cookies").change(function() {
            if(this.checked) {
                $("#accessToken").fadeOut("slow", function(){
                    $("#accessCookie").fadeIn("slow");
                });
                checked = 1;
            } else {
                $("#accessCookie").fadeOut("slow", function(){
                    $("#accessToken").fadeIn("slow");
                });
                checked = 0;
            }
        });
        function buy(){
            var id = $("#id").val();
            var user = $("#user").val();
            var package = $("#package-vip").val();
            
            var time = $("#time-vip").val();
            
            if(!id || !user || !package|| !time){
                showNotification('bg-red', 'Vui Lòng Điền Đầy Đủ Thông Tin');
                return;
            }
            $("#buy").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t       : 'buy-vip-lstream',
                    id      : id,
                    user    : user,
                    package : package,
                    time    : time,
                    type:"muaMoi"
                    
                },
                success: (data) => {
                    $("#buy").html('<i class="fa fa-shopping-cart"></i> Thanh Toán');
                    if (data.error) {
                        showNotification('bg-red', data.msg);
                    } else {
                        // showNotification('bg-green', data.msg);
                        // $("input").val('');
                        // $("textarea").val('');
                         alert(data.msg);
                        location.reload();
                    }
                }
            })
        }
        function reset(){
           location.reload();
        }
        function update(){
            //$("#name-vip").fadeOut('slow', function(){
                $("#name-vip").text($('#package-vip').val()).fadeIn('slow');
                 $("#sl-mat").text($('#package-vip').val()+' LIVE').fadeIn('slow');
           // })
            //$("#limit-time").fadeOut('slow', function(){
                $("#limit-time").text($('#time-vip').val()+' Tháng').fadeIn('slow');

                $("#name-user").text($('#user').val());

                $("#id-user").text($('#id').val());

 $("#limit-post").text("UNLIMIT");


var time = $("#time-vip").val();
console.log(time);
var package = $("#package-vip").val();
console.log(package);
var ch;

            switch (package){
               
                

                case '50' : ch = 40000;
                break;
            case '100' : ch = 70000;
                break;
            case '150' : ch = 100000;
                break;
            case '200' : ch = 130000;
                break;
            case '250' : ch = 160000;
                break;
            case '300' : ch = 190000;
                break;
            case '350' : ch = 220000;
                break;
            case '400' : ch = 250000;
                break;
            case '500' : ch = 310000;
                break;
            }
           // console.log(ch);
           // console.log(time*ch);
            $("#price").text(number_format(time*ch) + ' Cash');


            // })

            
            // $("#price").fadeOut('slow', function(){
            //     $("#price").text(number_format(PRICE_BOT*$('#time-vip').val()) + ' Cash').fadeIn('slow');
            // })
        }
        function update_name(){
            var TOKEN = $("#accessToken").val();
            $.ajax({
                url: 'https://graph.facebook.com/me',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    access_token: TOKEN
                },
                success: (data) => {
                    USER = data;
                    $("#name-user").fadeOut('slow', function(){
                        $("#name-user").text(data.name).fadeIn('slow');
                    });
                    $("#id-user").fadeOut('slow', function(){
                        $("#id-user").text(data.id).fadeIn('slow');
                    })
                    $("#reaction-user").fadeOut('slow', function(){
                        $("#reaction-user").text($('#reaction').val()).fadeIn('slow');
                    })
                    $("#limit-time").fadeOut('slow', function(){
                        $("#limit-time").text($('#time-vip').val()+' Tháng').fadeIn('slow');
                    })
                    $("#price").fadeOut('slow', function(){
                        $("#price").text(number_format(PRICE_BOT*$('#time-vip').val()) + ' Cash').fadeIn('slow');
                    })
                },
                error: (data)=>{
                    showNotification('bg-red', 'Mã Access Token Không Hợp Lệ');
                    return;
                }
            })
        }
        function update_name_by_cookie(){
            var COOKIE = $("#accessCookie").val();
            $.ajax({
                url: prefix+modun+'/modun_post.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    t: 'get-name-by-cookie',
                    cookie: COOKIE
                },
                success: (data) => {
                    if (data.error == 1) {
                        showNotification('bg-red', data.msg);
                        return;
                    }
                    USER = data;
                    $("#name-user").fadeOut('slow', function(){
                        $("#name-user").text(data.name).fadeIn('slow');
                    });
                    $("#id-user").fadeOut('slow', function(){
                        $("#id-user").text(data.id).fadeIn('slow');
                    })
                    $("#reaction-user").fadeOut('slow', function(){
                        $("#reaction-user").text($('#reaction').val()).fadeIn('slow');
                    })
                    $("#limit-time").fadeOut('slow', function(){
                        $("#limit-time").text($('#time-vip').val()+' Tháng').fadeIn('slow');
                    })
                    $("#price").fadeOut('slow', function(){
                        $("#price").text(number_format(PRICE_BOT*$('#time-vip').val()) + ' Cash').fadeIn('slow');
                    })
                }
            })
        }
    </script>