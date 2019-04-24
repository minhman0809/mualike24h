    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                <i class="fa fa-commenting" aria-hidden="true"></i> MANAGE VIP LSTREAM <small>Quản lý các gói VIP LSTREAM đã mua</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <button type="button" class="btn btn-primary waves-effect" style="display: none;" data-toggle="modal" data-target="#edit-vip" id="btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh Sửa</button>
                                <!--<button type="button" class="btn btn-danger waves-effect" onclick="del_package()">Xóa</button>-->
                            </ul>
                        </div>

                        <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#packageRun">Gói đang chạy</a></li>
                        <li><a data-toggle="tab" href="#packageExpire">Gói hết hạn</a></li>
                        <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
                        </ul>


                        <div class="tab-content">
    <div id="packageRun" class="tab-pane fade in active">
      <div class="body table-responsive">
                            <table class="table table-bordered" width="100%" id="result-vip">
                            </table>
                        </div>
    </div>
    <div id="packageExpire" class="tab-pane fade">
      <div class="body table-responsive">
                            <table class="table table-bordered" width="100%" id="result-vip-2">
                            </table>
                        </div>
    </div>
    
  </div>



                       
                    </div>
                </div>
            </div>
            <div id="show-modal">
                <div class="modal fade" id="edit-vip" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Không Thể Thực Hiện Hành Động</h4>
                            </div>
                            <div class="modal-body">
                                Vui Lòng Chọn 1 Mục Cần Chỉnh Sửa
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){
            load_vip();
            // $('#result-vip').on( 'click', 'tr', function () {
            //     if ( $(this).hasClass('active') ) {
            //         $(this).removeClass('active');
            //         $("#btn-edit").fadeOut('slow');
            //     }else {
            //         $('#result-vip').DataTable().$('tr.active').removeClass('active');
            //         $(this).addClass('active');
            //         $("#btn-edit").fadeOut('slow', function(){
            //             $("#btn-edit").fadeIn('slow');
            //         });
            //         var data = $("#result-vip").DataTable().rows('.active').data();
            //         var cmt = data[0][7].replace('<textarea disabled class="form-control" rows="3">', '');
            //         cmt = cmt.replace('</textarea>', '')
            //         var tpl = '<div class="modal fade" id="edit-vip" tabindex="-1" role="dialog">\
            //             <div class="modal-dialog" role="document">\
            //                 <div class="modal-content">\
            //                     <div class="modal-header">\
            //                         <h4 class="modal-title">Chỉnh Sửa Nội Dung Comment Cho ID '+data[0][1]+'</h4>\
            //                     </div>\
            //                     <div class="modal-body">\
            //                         <div class="row clearfix">\
            //                             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">\
            //                                 <label for="id-up">ID</label>\
            //                             </div>\
            //                             <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">\
            //                                 <div class="form-group">\
            //                                     <div class="form-line">\
            //                                         <input type="text" disabled id="id-up" class="form-control" value="'+data[0][0]+'">\
            //                                     </div>\
            //                                 </div>\
            //                             </div>\
            //                         </div>\
            //                         <div class="row clearfix">\
            //                             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">\
            //                                 <label for="fbid-up">FBID</label>\
            //                             </div>\
            //                             <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">\
            //                                 <div class="form-group">\
            //                                     <div class="form-line">\
            //                                         <input type="text" id="fbid-up" class="form-control" value="'+data[0][1]+'">\
            //                                     </div>\
            //                                 </div>\
            //                             </div>\
            //                         </div>\
            //                         <div class="row clearfix">\
            //                             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">\
            //                                 <label for="name-up">NAME</label>\
            //                             </div>\
            //                             <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">\
            //                                 <div class="form-group">\
            //                                     <div class="form-line">\
            //                                         <input type="text" id="name-up" class="form-control" value="'+data[0][2]+'">\
            //                                     </div>\
            //                                 </div>\
            //                             </div>\
            //                         </div>\
            //                         <div class="row clearfix">\
            //                             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">\
            //                                 <label for="name-up">SPEED</label>\
            //                             </div>\
            //                             <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">\
            //                                 <div class="form-group">\
            //                                     <div class="form-line">\
            //                                         <input type="text" id="speed-up" class="form-control" value="'+data[0][5]+'">\
            //                                     </div>\
            //                                 </div>\
            //                             </div>\
            //                         </div>\
            //                         <div class="row clearfix">\
            //                             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">\
            //                                 <label for="fbid-up">COMMENT</label>\
            //                             </div>\
            //                             <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">\
            //                                 <div class="form-group">\
            //                                     <div class="form-line">\
            //                                         <textarea name=cmt" id="cmt-up" class="form-control" rows="5" required="required">'+cmt+'</textarea>\
            //                                     </div>\
            //                                 </div>\
            //                             </div>\
            //                         </div>\
            //                     <div class="modal-footer">\
            //                         <button type="button" class="btn btn-link waves-effect" id="btn2" onclick="update_vip()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh Sửa</button>\
            //                         <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Đóng</button>\
            //                     </div>\
            //                 </div>\
            //             </div>\
            //         </div>';
            //         $("#show-modal").html(tpl);
            //     }
            // })
        });
        $(document).on('click', '.btnActionModuleItem', function(){
            // var _that = $(this);
            // if (_that.is(":checked")) {
            //     var checked = 'checked';
            //     var value = _that.val();
            // } else {
            //     var checked = '';
            //     var value = _that.val();
            // }
            // $.ajax({
            //     url     : prefix+modun+ '/modun_post.php',
            //     type    : 'POST',
            //     dataType: 'JSON',
            //     data    : {
            //         t       : 'action-vip-lstream',
            //         checked      : checked,
            //         value : value
            //     },
            //     success: (data) => {
            //         console.log(data)
            //         if (data.error) {
            //             showNotification('bg-red', data.msg);
            //         } else {
            //             showNotification('bg-green', data.msg);
            //         }
            //     }
            // })
        })
        function update_vip(){
            // var fbid = $("#fbid-up").val();
            // var name = $("#name-up").val();
            // var cmt = $("#cmt-up").val();
            // if (!fbid || !name || !cmt) {
            //     showNotification('bg-red','Vui Lòng Điền Đầy Đủ Thông Tin!');
            //     return;
            // }
            // $("#btn2").html('<i class="fa fa-refresh fa-spin"></i> Vui Lòng Đợi');
            // $.ajax({
            //     url     : prefix+modun+ '/modun_post.php',
            //     type    : 'POST',
            //     dataType: 'JSON',
            //     data    : {
            //         t           : 'update-vip-cmt',
            //         id          : $('#id-up').val(),
            //         cmt         : cmt,
            //         fbid        : fbid,
            //         name        : name
            //     },
            //     success : (data) => {
            //         $("#btn2").html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Hoàn Thành');
            //         if (data.error) {
            //             showNotification('bg-red', data.msg);
            //         } else {
            //             showNotification('bg-green', data.msg);
            //             load_vip();
            //         }
            //         setTimeout(function(){
            //             $('#edit-vip').modal('hide');
            //         }, 500);
            //     }
            // })
        }
        function del_package(){
            // var data = $("#result-vip").DataTable().rows('.active').data();
            // if (data.length == 0) {
            //     showNotification('bg-red', 'Vui lòng chọn 1 gói VIP để xóa!');
            //     return;
            // }
            // swal({
            //   title: 'Bạn muốn xóa gói VIP ' + data[0][1],
            //   text: "Không thể phục hồi sau khi xóa",
            //   type: 'warning',
            //   showCancelButton: true,
            //   confirmButtonColor: '#3085d6',
            //   cancelButtonColor: '#d33',
            //   confirmButtonText: 'Vâng, Tôi muốn xóa!',
            //   cancelButtonText: 'Trở về'
            // }).then(function () {
            //   submit_del(data[0][0]);
            // })
        }
        function submit_del(id){
            // $.ajax({
            //     url     : prefix+modun+ '/modun_post.php',
            //     type    : 'POST',
            //     dataType: 'JSON',
            //     data    : {
            //         t           : 'delete-vip',
            //         id          : id,
            //         type        : 'vip_cmt'
            //     },
            //     success : (data) => {
            //         if (data.error) {
            //             showNotification('bg-red', data.msg);
            //         } else {
            //             showNotification('bg-green', data.msg);
            //             load_vip();
            //         }
            //     }
            // })
        }
        function xoaIdLstream(id) {
             $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t           : 'delete-vip',
                    id          : id,
                    type        : 'vip_lstream'
                },
                success : (data) => {
                    if (data.error) {
                        showNotification('bg-red', data.msg);
                    } else {
                        showNotification('bg-green', data.msg);
                        location.reload();
                        //load_vip();
                    }
                }
            })
        }
        function giaHanGoiLive(id,fbid,name,name_package,dayRemain) {
             if(dayRemain<0){
                var user = name;

            var package = name_package;
            
            var time = $("#time-gia-han-"+id).val();
            //   console.log(id);
            //   console.log(fbid);
            //   console.log(user);
            //   console.log(package);
            // console.log(time);

            $.ajax({
                url     : prefix+modun+ '/modun_post.php',
                type    : 'POST',
                dataType: 'JSON',
                data    : {
                    t       : 'buy-vip-lstream',
                    id      : fbid,
                    stt:id,
                    user    : user,
                    package : package,
                    time    : time,
                    type:"gianHan"
                    
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
        }else{
            showNotification('bg-red', "Chưa hết hạn");
        }
             
        }
        function load_vip(){
            $('#result-vip').DataTable({
                destroy: true,
                "ajax": '2T_modun/modun_post.php?t=load-vip-lstream',
                "columns": [{
                        title: "ID"
                    },
                    {
                        title: "FB ID"
                    },
                    {
                        title: "NAME"
                    },
                    {
                        title: "GÓI"
                    },
                    {
                        title: "LIVE"
                    },
                    {
                        title: "HẠN DÙNG"
                    }
                    ,
                    {
                        title: "XÓA"
                    }
                    // ,
                    // {
                    //     title: "GIA HẠN"
                    // }
                    
                    // {
                    //     title: "STATUS"
                    // },
                ],
                "language": {
                    "search": "Tìm Kiếm",
                    "paginate": {
                        "first": "Về Đầu",
                        "last": "Về Cuối",
                        "next": "Tiến",
                        "previous": "Lùi"
                    },
                    "info": "Hiển thị _START_ đến _END_ của _TOTAL_ mục",
                    "infoEmpty": "Hiển thị 0 đến 0 của 0 mục",
                    "lengthMenu": "Hiển thị _MENU_ mục",
                    "loadingRecords": "Đang tải...",
                    "emptyTable": "Không có gì để hiển thị",
                }
            });

            $('#result-vip-2').DataTable({
                destroy: true,
                "ajax": '2T_modun/modun_post.php?t=load-vip-lstream-2',
                "columns": [{
                        title: "ID"
                    },
                    {
                        title: "FB ID"
                    },
                    {
                        title: "NAME"
                    },
                    {
                        title: "GÓI"
                    },
                    {
                        title: "HẠN DÙNG"
                    }
                    ,
                    {
                        title: "XÓA"
                    }
                    // ,
                    // {
                    //     title: "GIA HẠN"
                    // }
                    
                    // {
                    //     title: "STATUS"
                    // },
                ],
                "language": {
                    "search": "Tìm Kiếm",
                    "paginate": {
                        "first": "Về Đầu",
                        "last": "Về Cuối",
                        "next": "Tiến",
                        "previous": "Lùi"
                    },
                    "info": "Hiển thị _START_ đến _END_ của _TOTAL_ mục",
                    "infoEmpty": "Hiển thị 0 đến 0 của 0 mục",
                    "lengthMenu": "Hiển thị _MENU_ mục",
                    "loadingRecords": "Đang tải...",
                    "emptyTable": "Không có gì để hiển thị",
                }
            });
        }
    </script>