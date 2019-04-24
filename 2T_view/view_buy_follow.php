
        <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                BUY FOLLOW<small>Đăng Ký Sử Dụng BUY FOLLOW</small>
                            </h2>
                        </div>
                        <div class="body" style="min-height: 180px;">
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

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Chọn Gói VIP</label>
                                        <select name="" id="package-vip" onchange="update()" class="form-control" required="required">
                                            <option value="1000">1000</option>
                                            <option value="1500">1500</option>
                                            <option value="2000">2000</option>
                                            <option value="2500">2500</option>
                                            <option value="3000">3000</option>
                                          

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="input" class="control-label">Loại follow</label>
                                       <!--  <select id="sub-type-change" onchange="update()" class="form-control" required="required">
                                            <option value="1">sub tây</option>
                                            <option value="">sub việt nam</option>
                                          
                                        </select> -->
                                        <input type="text" name="" readonly="" value="sub việt nam">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="email_address">Chọn server sub</label>
                                    <div class="form-group">
                                        <select id="serverSub" onchange="update()">
                                            <option value="1">Server 1 (rate 65)</option>
                                            <!--<option value="2">Server 2 (rate 40)</option>-->
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
                                                <li><p class="font-bold">Do chính sách của facebook, mỗi nick facebook,trong vòng 30h chỉ được tăng max 3k sub nên ctv căn giờ mua cho chuẩn</p></li>
                                                 <li><p class="font-bold">Server 1 sub sẽ tăng ngay và luôn</p></li>
                                                 <li><p class="font-bold">Server 2 sub sẽ tăng đều trong 1 ngày</p></li>
                                                 <li><p class="font-bold">Chất lượng 2 server như nhau</p></li>

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
                               
                                <li class="list-group-item">Tên Người Dùng:<span class="badge bg-cyan" id="name-user">NULL</span></li>
                                <li class="list-group-item">ID Thụ Hưởng:<span class="badge bg-cyan" id="id-user">NULL</span></li>

                                <li class="list-group-item">Loại sub:<span class="badge bg-cyan" id="sub-type">Việt Nam</span></li>

                                
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
                                        <th>VNĐ</th>
                                    </tr>
                                </thead>
                                <tbody id="table-vip"><tr>                                        <td>1000 sub vn 1</td>                                        <td>65.000</td>                                    </tr><tr>                                        <td>1000 sub vn 2</td>                                        <td>40.000</td>                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script type="text/javascript">
        
        function buy(){
            var id = $("#id").val();
            var user = $("#user").val();
            var package = $("#package-vip").val();
            
            var subType = $("#serverSub").val();
            
            
            if(!id || !user || !package|| !subType){
                showNotification('bg-red', 'Vui Lòng Điền Đầy Đủ Thông Tin');
                return;
            }
            $("#buy").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t       : 'buy-follow',
                    id      : id,
                    user    : user,
                    package : package,
                    subType    : subType
                    
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
       function update() {
    //$("#name-vip").fadeOut('slow', function(){
    $("#name-user").text($('#user').val());
    $("#id-user").text($('#id').val());
    $("#name-vip").text($('#package-vip').val());
    let serverSub = $("#serverSub").val();
    var package = $("#package-vip").val();
    var subType = $("#sub-type-change").val();
    console.log(subType);
    console.log(package);
    var price = 0;
    if (serverSub == 1) {
        switch (package) {
            case '1000':
                price = 65000;
                break;
            case '1500':
                price = 97500;
                break;
            case '2000':
                price = 130000;
                break;
            case '2500':
                price = 162500;
                break;
            case '3000':
                price = 195000;
                break;
        }
    } else {
        switch (package) {
            case '1000':
                price = 40000;
                break;
            case '1500':
                price = 60000;
                break;
            case '2000':
                price = 80000;
                break;
            case '2500':
                price = 100000;
                break;
            case '3000':
                price = 120000;
                break;
        }
    }
    $("#price").text(number_format(price) + ' Cash');
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
    <script src="http://mualike24h.com/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="http://mualike24h.com/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="http://mualike24h.com/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="http://mualike24h.com/plugins/node-waves/waves.js"></script>
    <script src="http://mualike24h.com/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="http://mualike24h.com/plugins/raphael/raphael.min.js"></script>
    <script src="http://mualike24h.com/plugins/morrisjs/morris.js"></script>
    <script src="http://mualike24h.com/plugins/chartjs/Chart.bundle.js"></script>
    <script src="http://mualike24h.com/plugins/flot-charts/jquery.flot.js"></script>
    <script src="http://mualike24h.com/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="http://mualike24h.com/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="http://mualike24h.com/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="http://mualike24h.com/plugins/flot-charts/jquery.flot.time.js"></script>
    <script src="http://mualike24h.com/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="http://mualike24h.com/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="http://mualike24h.com/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.7/sweetalert2.min.js"></script>
    <script src="http://mualike24h.com/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
    <script src="http://mualike24h.com/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="http://mualike24h.com/js/admin.js"></script>
    <script src="http://mualike24h.com/js/pages/index.js"></script>
    <script src="http://mualike24h.com/js/demo.js"></script>
    <script type="text/javascript">
        function showNotification(colorName, text) {
            if (colorName === null || colorName === '') { colorName = 'bg-black'; }
            if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
            var allowDismiss = true;
            $.notify({
                message: text
            },
            {
                type: colorName,
                allow_dismiss: allowDismiss,
                newest_on_top: true,
                timer: 1000,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated fadeOutUp'
                },
                template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
            });
        }
        function number_format( number, decimals, dec_point, thousands_sep ) {
            var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
            var d = dec_point == undefined ? "," : dec_point;
            var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
            var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t);
        }
    </script>
    