    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card animated bounceIn">
                        <div class="header">
                            <h2>
                                <i class="fa fa-commenting" aria-hidden="true"></i> MANAGE BUY FOLLOW<small>Quản lý các gói FOLLOW đã mua</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <button type="button" class="btn btn-primary waves-effect" style="display: none;" data-toggle="modal" data-target="#edit-vip" id="btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh Sửa</button>
                                <!--<button type="button" class="btn btn-danger waves-effect" onclick="del_package()">Xóa</button>-->
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered" width="100%" id="result-vip">
                            </table>
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
        });
        
        function load_vip(){
            $('#result-vip').DataTable({
                destroy: true,
                "ajax": '2T_modun/modun_post.php?t=load-buy-follow',
                "columns": [{
                        title: "ID"
                    },
                    {
                        title: "#AVT"
                    },
                    {
                        title: "FB ID"
                    },
                    {
                        title: "NAME"
                    },
                    {
                        title: "SỐ LƯỢNG"
                    },
                    {
                        title: "LOẠI SUB"
                    },
                    {
                        title: "THỜI GIAN MUA"
                    },
                    {
                        title: "TRẠNG THÁI"
                    }
                   
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