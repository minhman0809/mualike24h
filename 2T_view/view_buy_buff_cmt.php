    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                <i class="fa fa-commenting" aria-hidden="true"></i> BUFF COMMENT<small>Đăng Ký Sử Dụng Buff Comment</small>
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
                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: red">Giới tính</label>

                                         <select name="" id="cgt" onchange="update()" class="form-control" required="required">

                                            <option value="">Nam và Nữ</option>
                                            <option value="1">Chỉ Nam</option>
                                            <option value="2">Chỉ Nữ</option>
                                            

                                        </select>
                                        <!-- <input onchange="update()" type="text" name="" id="package-vip"> -->
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Số Comment muốn mua</label>
                                        <!-- <select name="" id="package-vip" onchange="update()" class="form-control" required="required">
                                            <option value="5">5 Bình Luận</option>
                                            <option value="10">10 Bình Luận</option>
                                            <option value="20">20 Bình Luận</option>
                                            <option value="30">30 Bình Luận</option>
                                            <option value="40">40 Bình Luận</option>
                                            <option value="50">50 Bình Luận</option> 

                                        </select>-->
                                        <!-- <input onchange="update()" type="text" name="" id="package-vip"> -->
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" onchange="update()" id="package-vip" class="form-control" placeholder="Lớn hơn 10 và nhỏ hơn 500) (bội của 10)(10,20,30 ... 500)">
                                        </div>
                                        </div>
                                         
                                        
                                        
                                    </div>
                                </div>
                                
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Giá 1 cmt</label>
                                       
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" onchange="update()" readonly="" value="100" class="form-control">
                                        </div>
                                      </div>

                                        
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="speed" class="control-label">Tốc độ 10 cmt (đơn vị là phút) (vd điền 1 nghĩa là 10cmt/1 phút)</label>
                                        <!-- <input type="text" name="" readonly="" value="1" id="speed"> -->

                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" onchange="update()" id="speed" class="form-control" value="1">
                                        </div>
                                    </div>
                                        
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
                                <!-- <li class="list-group-item">Ghi chú:<span class="badge bg-cyan" id="ghi-chu">NULL</span></li> -->
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
                                            <center>500 VND</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>10 Comment</center>
                                        </td>
                                        <td>
                                            <center>1000 VND</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>20 Comment</center>
                                        </td>
                                        <td>
                                            <center>2000 VND</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>30 Comment</center>
                                        </td>
                                        <td>
                                            <center>3000 VND</center>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <center>40 Comment</center>
                                        </td>
                                        <td>
                                            <center>4000 VND</center>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <center>50 Comment</center>
                                        </td>
                                        <td>
                                            <center>5000 VND</center>
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

           


            var fbid = $("#id").val();
            var cgt = $("#cgt").val();
            var package = $("#package-vip").val();
           

            var cmt = $("#cmt").val();

cmt = cmt.replace(/=/g, '');
cmt = cmt.replace(/\|/g, '');
cmt = cmt.replace(/\n/g, '=');
//console.log(res);

 var speed = $("#speed").val();

console.log(fbid);
console.log(cgt);
console.log(package);
console.log(cmt);
console.log(speed);


            if(!fbid || !package || !cmt|| !speed){
                showNotification('bg-red', 'Vui Lòng Điền Đầy Đủ Thông Tin');
                return;
            }
            $("#buy").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t       : 'buy-buff-cmt',
                    fbid      : fbid,
                    cgt    : cgt,
                    package : package,
                    cmt     : cmt,
                    speed:speed
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
            var ch=package*100;
            // switch (package){
            //     case '5' : ch = 500;
            //     break;
            //     case '10' : ch = 1000;
            //     break;
            //     case '20' : ch = 2000;
            //     break;
            //     case '30' : ch = 3000;
            //     break;
            //     case '40' : ch = 4000;
            //     break;
            //     case '50' : ch = 5000;
            //     break;
                

            // }

            $("#price").text(number_format(ch) + ' Cash');

            $("#name-vip").text(package);
           
            $("#ghi-chu").text(note);

            $("#id-post").text(id);
           
        }
    </script>