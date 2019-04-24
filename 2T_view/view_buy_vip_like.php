
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                <i class="fa fa-heartbeat" aria-hidden="true"></i> VIP LIKE<small>Liên hệ admin <b>0982.149.607</b></small>
                            </h2>
                        </div>
                        <div class="body" style="min-height: 180px;background-image: url('https://res-zaloapp.zadn.vn/pc/banners/footer-t1.png'); background-repeat: no-repeat; background-position: right bottom;">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <label for="email_address">FB ID (*)</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" onchange="update()" id="id" class="form-control" placeholder="Vui Lòng Nhập Chính Xác FB ID Người Hưởng Like">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email_address">Tên Người Dùng</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="user" onchange="update()" class="form-control" placeholder="Nhập Tên Người Dùng">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Chọn Gói VIP LIKE</label>
                                        <select name="" id="package-vip" onchange="update()" class="form-control" required="required">
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-vip" class="control-label">Lựa Chọn Cảm Xúc</label> <br>
                                        <input name="camxuc[]" checked type="checkbox" class="filled-in" id="like" value="LIKE" />
                                        <label for="like" style="margin-right: 20px;"><img src="images/png/like.png" style="width:24px" data-toggle="tooltip" title="" data-original-title="Thích"></label>
                                        <input name="camxuc[]" type="checkbox" class="filled-in" id="love" value="LOVE" />
                                        <label for="love" style="margin-right: 20px;"><img src="images/png/love.png" style="width:24px" data-toggle="tooltip" title="" data-original-title="Yêu Thích"></label>
                                        <input name="camxuc[]" type="checkbox" class="filled-in" id="haha" value="HAHA" />
                                        <label for="haha" style="margin-right: 20px;"><img src="images/png/haha.png" style="width:24px" data-toggle="tooltip" title="" data-original-title="Cười Lớn"></label>
                                        <input name="camxuc[]" type="checkbox" class="filled-in" id="wow" value="WOW" />
                                        <label for="wow" style="margin-right: 20px;"><img src="images/png/wow.png" style="width:24px" data-toggle="tooltip" title="" data-original-title="Ngạc Nhiên"></label>
                                        <input name="camxuc[]" type="checkbox" class="filled-in" id="sad" value="SAD" />
                                        <label for="sad" style="margin-right: 20px;"><img src="images/png/sad.png" style="width:24px" data-toggle="tooltip" title="" data-original-title="Buồn"></label>
                                        <input name="camxuc[]" type="checkbox" class="filled-in" id="angry" value="ANGRY" />
                                        <label for="angry" style="margin-right: 20px;"><img src="images/png/angry.png" style="width:24px" data-toggle="tooltip" title="" data-original-title="Phẫn Nộ"></label>
                                    </div>
                                </div> -->
                               <!--  <input type="hidden" name="" id="speed" value="0"> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input" class="control-label">Tốc Độ LIKE(VD: 2s 1 like) 'để 0 là MAX'</label>
                                        <!-- <input type="text" id="speed" value="" onchange="update()" /> -->
                                        
                                        <select name="" id="speed" onchange="update()" class="form-control" required="required">
                                            <option value="0">MAX</option>
                                            <option value="1">1 S/LIKE</option>
                                            <option value="2">2 S/LIKE</option>
                                            <option value="3">3 S/LIKE</option>
                                            <option value="4">4 S/LIKE</option>
                                            <option value="5">5 S/LIKE</option>
                                            <option value="6">6 S/LIKE</option>
                                            <option value="7">7 S/LIKE</option>
                                            <option value="8">8 S/LIKE</option>
                                            <option value="9">9 S/LIKE</option>
                                            <option value="10">10 S/LIKE</option>
                                            <option value="15">15 S/LIKE</option>
                                            <option value="20">20 S/LIKE</option>
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
                                            <option value="4">4 Tháng</option>
                                            <option value="5">5 Tháng</option>
                                            <option value="6">6 Tháng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul>
                                        <li>
                                            <p class="font-bold font-underline col-pink">Lưu ý:</p>
                                            <ul>
                                                <li>
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
                                <li class="list-group-item">Tên Gói VIP:<span class="badge bg-pink" id="name-vip">NULL</span></li>
                                <li class="list-group-item">Giới Hạn Like Mỗi Bài:<span class="badge bg-cyan" id="limit-like">NULL</span></li>
                                <li class="list-group-item">Tên Người Dùng:<span class="badge bg-cyan" id="name-user">NULL</span></li>
                                <li class="list-group-item">ID Thụ Hưởng:<span class="badge bg-cyan" id="id-user">NULL</span></li>
                                <li class="list-group-item">Thời Gian Sử Dụng:<span class="badge bg-cyan" id="limit-time">NULL</span></li>
                                <li class="list-group-item">Giới Hạn Bài Đăng:<span class="badge bg-cyan" id="limit-post">NULL</span></li>
                                <!-- <li class="list-group-item">Tốc Độ:<span class="badge bg-cyan" id="speed-like">NULL</span></li> -->
                                <li class="list-group-item">Số Tiền Thanh Toán<span class="badge bg-cyan" id="price">NULL</span></li>
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
                                        <th>Cash/Tháng</th>
                                    </tr>
                                </thead>
                                <tbody id="table-vip">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){
            get_package();
            console.log("ready");
            var _PACKAGE;
            // $("#speed").ionRangeSlider({
            //     min: 1,
            //     max: 50,
            //     from: 25
            // });
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
            var user = $("#user").val();
            var package = $("#package-vip").val();
            var speed = $("#speed").val();
            var time = $("#time-vip").val();
            // var cx = '';
            // $('.filled-in:checked').each(function(){
            //     var values = $(this).val();
            //     cx += values+'|';
            // })
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
                    t       : 'buy-vip',
                    id      : id,
                    user    : user,
                    package : package,
                    speed   : speed,
                    time    : time,
                    // camxuc  : trim(cx)
                    camxuc    : 'LIKE'
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
        function get_package(){
            var option = '';
            var table  = '';
            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t           : 'get_name_package',
                },
                success : (data) => {
                    _PACKAGE = data;
                    $.each(data, (i, item) => {
                        option += '<option value="'+item.name+'">'+item.name+' Likes/Post'+'</option>';
                        table  += '<tr>\
                                        <td>'+item.name+'</td>\
                                        <td>'+number_format(item.price)+'</td>\
                                    </tr>';
                    })

                    setTimeout(function(){
                        $("#package-vip").html(option);
                        $("#table-vip").html(table);
                    }, 500);
                }
            })
        }
        function reset(){
            // $("input").val('');
            // $('select').prop('selectedIndex', 0);
            // $("#name-vip").text('NULL');
            // $("#limit-like").text('NULL');
            // $("#limit-post").text('NULL');
            // $("#price").text('NULL');
            // $("#name-user").text('NULL');
            // $("#id-user").text('NULL');
            // $("#speed-like").text('NULL');
            // $("#limit-time").text('NULL');
            location.reload();
        }
        function update(){
            var id = $("#id").val();
            var user = $("#user").val();
            var package = $("#package-vip").val();
            var speed = $("#speed").val();
            var time = $("#time-vip").val();
            $("#name-vip").text(package);
            $.each(_PACKAGE, (i, item) => {
                if (item.name == package) {
                    $("#limit-like").text(item.limit_like + ' Like');
                    $("#limit-post").text(item.limit_post + ' Post');
                    $("#price").text(number_format(time*item.price) + ' Cash')
                }
            })
            $("#name-user").text(user);
            $("#id-user").text(id);
            $("#speed-like").text(speed+'Like/Phút');
            $("#limit-time").text(time+' Tháng')
        }
    </script>