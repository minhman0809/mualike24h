
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                <i class="fa fa-heartbeat" aria-hidden="true"></i> BUFF LIKE<small>Liên hệ admin <b>0982.149.607</b></small>
                            </h2>
                        </div>
                        <div class="body" style="min-height: 180px;background-image: url('https://res-zaloapp.zadn.vn/pc/banners/footer-t1.png'); background-repeat: no-repeat; background-position: right bottom;">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label for="email_address">ID bài viết</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" onchange="update()" id="id" class="form-control" placeholder="ID bài viết">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="email_address">Số like muốn mua</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="user" onchange="update()" class="form-control" placeholder="Số like muốn mua">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="email_address">Chọn server like</label>
                                    <div class="form-group">
                                        <select id="serverBuffLike" onchange="update()">
                                            <option value="1">Server 6 Đồng/1 Like</option>
                                            <option value="2">Server 16 Đồng/1 Like</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Chọn Gói VIP LIKE</label>
                                        <select name="" id="package-vip" onchange="update()" class="form-control" required="required">
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Lựa Chọn Cảm Xúc</label>
                                        
                                           <select id="camxuc">
                                              <option value="like">LIKE</option>
                                              <option value="love">LOVE</option>
                                              <option value="haha">HAHA</option>
                                              <option value="wow">WOW</option>
                                              <option value="sad">SAD</option>
                                              <option value="angry">ANGRY</option>
                                            </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <ul>
                                        <li>
                                            <p class="font-bold font-underline col-pink">Lưu ý:</p>
                                            <ul>
                                                <li>
                                                    <p><b style="color: red">Like là like ảo, sau mỗi đợt fb quét, like có thể giảm, hãy cân nhắc khi sử dụng</b></p>
                                                    <p><b style="color: red">Từ ngày 20/10/2018 Khách hàng buff nhầm sẽ ko đc hoàn tiền, chỉ buff bài viết, ko buff like page</b></p>

                                                    <p>
                                                        <a href="https://www.facebook.com/nghiahsgs">Facebook admin</a>
                                                    </p>
                                                    <p>Liên hệ admin 0982.149.607</p>
                                                <p class="font-bold">Nếu Cài Liền Lúc 2-3 fb trở lên bạn nhớ f5 load lại trang sau mỗi lần cài đặt, tránh tình trạng lỗi không tích chọn cảm xúc dẫn đến tình trạng cài vip mà không tăng</p></li>
                                                <li><p class="font-bold">Status Đăng Phải Ở Trạng Thái Công Khai, Bạn Chỉ Việc Chờ Đợi Hệ Thống Sẽ Làm Việc Không Việc Gì Phải Gấp Cả! Vì Đây Là Hệ Thống VIP Like Chứ Không Phải Hack Like Đâu Mà Muốn Nhanh Là Nhanh Được! Like Lên Từ Từ Như Lượt Tương Tác Thật!</p></li>
                                                <li><p class="font-bold">Sử dụng hashtag *|**|*** để tùy chỉnh số số like muốn tăng ở bài bài đó, ví dụ ** thì số Like tối đa là 50% gói Like, tại bài đó.</p></li>
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
                                <li class="list-group-item">Tên Gói VIP:<span class="badge bg-pink" id="name-vip">BUFF LIKE</span></li>
                              
                              <li class="list-group-item">Id bài viết<span class="badge bg-cyan" id="id-post">NULL</span></li>
                              <li class="list-group-item">Số like muốn mua<span class="badge bg-cyan" id="numberLike">NULL</span></li>
                              <li class="list-group-item">Số tiền thanh toán<span class="badge bg-cyan" id="price">NULL</span></li>


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
                                        <th>Số Like</th>
                                        <th>Giá Tiền</th>
                                    </tr>
                                </thead>
                                <tbody id="table-vip"><tr>                                        <td>1 Like Server 1</td>                                        <td>6 Đồng</td>                                    </tr>
                                    <tr>                                        <td>1 Like Server 2</td>                                        <td>16 Đồng</td>                                    </tr></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){
           
            console.log("ready");
            var _PACKAGE;
            
            $('[data-toggle="tooltip"]').tooltip(); 
        })
        function trim(s){
            while (s.substring(0,1) == "|"){
                s = s.substring(1, s.length);
            }
            while (s.substring(s.length-1, s.length) == "|") {
                s = s.substring(0,s.length-1);
            }
            return s;
        }
        function buy(){
            var id = $("#id").val();
            var numberLike = $("#user").val();
           var camxuc = $("#camxuc").val();
            var serverBuffLike = $("#serverBuffLike").val();

            if(!id || !user){
                showNotification('bg-red', 'Vui Lòng Điền Đầy Đủ Thông Tin');
                return;
            }
            $("#buy").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t       : 'buy-buff',
                    id      : id,
                    numberLike    : numberLike,
                    camxuc  : camxuc,
                    serverBuffLike:serverBuffLike
                },
                success: (data) => {
                   // console.log(data);
                    $("#buy").html('<i class="fa fa-shopping-cart"></i> Thanh Toán');
                    if (data.error) {
                        showNotification('bg-red', data.msg);
                    } else {
                        // showNotification('bg-green', data.msg);
                        // $("input").val('');
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
           
            $("#id-post").text($("#id").val());
            $("#numberLike").text($("#user").val());
            
            serverBuffLike= $("#serverBuffLike").val();
            
            if(serverBuffLike==="1"){
                $("#price").text($("#user").val()*6+ " VND");
            }else{
                $("#price").text($("#user").val()*16+ " VND");
            }
            
        }
    </script>