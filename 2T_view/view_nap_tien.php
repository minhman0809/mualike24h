    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card animated bounceInRight" style="height: 656px;">
                        <div class="header">
                            <h2>
                                <i class="fa fa-university" aria-hidden="true"></i> Chuyển Khoản Ngân Hàng & Ví Điện Tử <small>Chuyển khoản rồi ib bằng chứng thanh toán vào fb admin <a href="https://www.facebook.com/nghiahsgs">nghiahsgs</a></small>
                            </h2>
                        </div>
                        <div class="body" style="padding: 2px;">
                           <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Ngân Hàng & Ví Điện Tử</th>
                                        <th>Thông Tin Thanh Toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                    <td>
                                                        <p class="font-bold">VIETCOMBANK</p>
                                                        <center><img src="images/vcb.png" class="img-responsive" alt="Image"></center>
                                                    </td>
                                                    <td style="text-align: left;">
                                                        <p class="font-bold col-pink"> <font color="black">STK: </font>0011004254984</p>
                                                        <p class="font-bold col-pink"> <font color="black">Tên: </font>NGUYEN BA NGHIA</p>
                                                        <p class="font-bold col-pink"> <font color="black">Chi Nhánh: </font>Thanh Xuân, Hà Nội</p>
                                                      
                                                       <p class="font-bold col-pink"> <font color="black">Link Admin: </font><a href="https://www.facebook.com/nghiahsgs">Nguyễn Bá Nghĩa</a></p>

                                                    </td></tr>
                                                                               </tbody>
                            </table>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
    function napthe(){
        var nhamang = $("#nhamang").val();
        var mathe = $("#mathe").val();
        var seri = $("#seri").val();
        if (!mathe || !seri) {
            showNotification('bg-red', 'Vui Lòng Điền Đầy Đủ Thông Tin');
            return;
        }
        if (mathe.length <= 10 || seri <= 11) {
            showNotification('bg-red', 'Mã Thẻ Hoặc Seri Không Chính Xác');
            return;
        }
        $("#btn").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
        $.ajax({
            url: prefix+modun+'/modun_post.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                t: 'nap-the-banthe247',
                nhamang: nhamang,
                mathe: mathe,
                seri: seri
            },
            success: (data) => {
                $("#btn").html('<i class="fa fa-money" aria-hidden="true"></i> Nạp Thẻ');
                if (data.error == 1) {
                    showNotification('bg-red', data.msg);
                } else {
                    showNotification('bg-green', data.msg);
                    $("input").val('');
                }
            }
        })
    }
    </script>