    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                <i class="fa fa-commenting" aria-hidden="true"></i> VIP COMMENT<small>Đăng Ký Sử Dụng Vip Comment</small>
                            </h2>
                        </div>
                        <div class="body" style="min-height: 180px;background-image: url('https://res-zaloapp.zadn.vn/pc/banners/footer-t1.png'); background-repeat: no-repeat; background-position: right bottom;">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <label for="email_address">POST ID (*)</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" onchange="update()" id="id" class="form-control" placeholder="Vui Lòng Nhập Chính Xác FB ID Người Hưởng Like">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email_address">Ghi chú</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="note" onchange="update()" class="form-control" placeholder="Ghi chú">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Chọn Gói Comment</label>
                                        <select name="" id="package-vip" onchange="update()" class="form-control" required="required">
                                            <option value="5">5 Bình Luận</option>
                                            <option value="10">10 Bình Luận</option>
                                            <option value="20">20 Bình Luận</option>
                                            <option value="30">30 Bình Luận</option>
                                            
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Số tháng muốn mua</label>
                                        <select name="" id="package-time" onchange="update()" class="form-control" required="required">
                                            <option value="1">1 tháng</option>
                                            <option value="2">2 tháng</option>
                                            <option value="3">3 tháng</option>
                                            <option value="4">4 tháng</option>
                                            
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tốc Độ CMT</label>
                                        <select name="" id="speed" onchange="update()" class="form-control" required="required">
                                            <option value="0">Nhanh</option>
                                            <option value="1">5-20 phút</option>
                                            
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nội Dung Comment</label>
                                        <textarea name="" id="cmt" class="form-control" rows="6" placeholder="Bạn Nên Nhập Nhiều Bình Luận Khác Nhau Để Không Có Sự Trùng Lặp. Mỗi Lần Xuống Hàng Tương Ứng Với 1 Bình Luận" required="required"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <ul>
                                        <li>
                                            <p class="font-bold font-underline col-pink">Lưu ý:</p>
                                            <ul>
                                                <li><p class="font-bold">Đăng STT kèm dấu * STT đó sẽ không tăng CMT.</p>
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
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card animated bounceInRight">
                        <div class="header">
                            <h2>
                                <i class="fa fa-desktop" aria-hidden="true"></i> Chi Tiết Gói VIP
                            </h2>
                        </div>
                        <div class="body" style="padding: 2px;">
                           <ul class="list-group">
                                <li class="list-group-item">Số Lượng Comment:<span class="badge bg-pink" id="name-vip">NULL</span></li>
                                <li class="list-group-item">Ghi chú:<span class="badge bg-cyan" id="ghi-chu">NULL</span></li>
                                <li class="list-group-item">ID Post:<span class="badge bg-cyan" id="id-post">NULL</span></li>
                                <li class="list-group-item">Thanh Toán<span class="badge bg-cyan" id="price">NULL</span></li>
                            </ul>
                            <div class="text-center" style="margin-bottom: 10px;">
                                <button type="button" class="btn bg-light-green waves-effect" id="buy" onclick="buy()">
                                    <i class="fa fa-shopping-cart"></i> Thanh Toán
                                </button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="active">
                                        <th>
                                            <center>Tên Gói Vip</center>
                                        </th>
                                        <th>
                                            <center><font color="red">Tiền (VND)</font></center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>




                                        <td>
                                            <center>5 Comment</center>
                                        </td>
                                        <td>
                                            <center>32500 VND</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>10 Comment</center>
                                        </td>
                                        <td>
                                            <center>65000 VND</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>20 Comment</center>
                                        </td>
                                        <td>
                                            <center>130000 VND</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>30 Comment</center>
                                        </td>
                                        <td>
                                            <center>195000 VND</center>
                                        </td>
                                    </tr>
                                     
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(() => {
            // $("#speed").ionRangeSlider({
            //     min: 1,
            //     max: 12,
            //     from: 6
            // });
        })
        function buy(){
            var id = $("#id").val();
            var note = $("#note").val();
            var package = $("#package-vip").val();
            var cmt = $("#cmt").val();
           var time = $("#package-time").val();
            var speed = $("#speed").val();

            if(!id || !note || !package || !cmt){
                showNotification('bg-red', 'Vui Lòng Điền Đầy Đủ Thông Tin');
                return;
            }
            $("#buy").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t       : 'buy-vip-cmt',
                    id      : id,
                    user    : note,
                    package : package,
                    cmt     : cmt,
                    speed:speed,
                    
                    time:time, //1 thang
                    cmt     : cmt


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
        
        function update(){
            var id = $("#id").val();
            var note = $("#note").val();
            var package = $("#package-vip").val();
            

            $("#name-vip").text(package + ' Bình Luận');
            var ch;
            switch (package){
                case '5' : ch = 32500;
                break;
                case '10' : ch = 65000;
                break;
                case '20' : ch = 130000;
                break;
                case '30' : ch = 195000;
                break;
               

            }
            $("#price").text(number_format(ch) + ' Cash');

            $("#name-vip").text(package);
           
            $("#ghi-chu").text(note);

            $("#id-post").text(id);
           
        }
    </script>